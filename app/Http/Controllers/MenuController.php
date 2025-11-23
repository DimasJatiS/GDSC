<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Services\GeminiService;

// Request classes
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

// Resource classes
use App\Http\Resources\MenuResource;
use App\Http\Resources\MenuCollection;

use App\Helpers\ApiResponse;

class MenuController extends Controller
{

    // POST /menu
    public function store(StoreMenuRequest $request, GeminiService $gemini)
    {
        $data = $request->validated();

        // 1. Save menu
        $menu = Menu::create($data);

        // 2. Call Gemini
        $ai = $gemini->analyzeMenu([
            'name'        => $data['name'],
            'ingredients' => $data['ingredients'],
            'category'    => $data['category'],
        ]);

        // 3. Update menu with AI result
        $menu->update([
            'ai_description' => $ai['description'] ?? null,
            'ai_calories'    => $ai['calories'] ?? null,
            'ai_category'    => $ai['category'] ?? null,
            'ai_recipe_steps'=> $ai['recipe_steps'] ?? [],
        ]);

        return ApiResponse::created(new MenuResource($menu), 
        'Menu created successfully');
    }

    // GET /menu
    public function index(Request $request)
    {
        $q         = $request->query('q');
        $category  = $request->query('category');
        $minPrice  = $request->query('min_price');
        $maxPrice  = $request->query('max_price');
        $maxCal    = $request->query('max_cal');
        $sort      = $request->query('sort', 'created_at:desc');
        $page      = (int)$request->query('page', 1);
        $perPage   = (int)$request->query('per_page', 10);

        $query = Menu::query();

        if ($q) {
            $query->where(function ($qb) use ($q) {
                $qb->where('name', 'like', "%$q%")
                    ->orWhere('description', 'like', "%$q%");
            });
        }

        if ($category) $query->where('category', $category);
        if ($minPrice) $query->where('price', '>=', $minPrice);
        if ($maxPrice) $query->where('price', '<=', $maxPrice);
        if ($maxCal)   $query->where('calories', '<=', $maxCal);

        [$field, $dir] = array_pad(explode(':', $sort), 2, 'asc');

        if (in_array($field, ['name','price','calories','created_at'])) {
            $query->orderBy($field, $dir === 'desc' ? 'desc' : 'asc');
        }

        $paginator = $query->paginate($perPage, ['*'], 'page', $page);

        return new MenuCollection($paginator);
    }

    // GET /menu/:id
    public function show($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        return ApiResponse::success(new MenuResource($menu));
    }

    // PUT /menu/:id
    public function update(UpdateMenuRequest $request, $id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $menu->update($request->validated());

        return (new MenuResource($menu))
            ->additional(['message' => 'Menu updated successfully']);
    }

    // DELETE /menu/:id
    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return ApiResponse::notFound('Menu not found');
        }

        $menu->delete();

        return ApiResponse::success(null, 'Menu deleted successfully');
    }

    // GET /menu/group-by-category
    public function groupByCategory(Request $request)
    {
        $mode = $request->query('mode', 'count');

        if ($mode === 'count') {
            $rows = Menu::selectRaw('category, count(*) as total')
                ->groupBy('category')
                ->get();

            $output = [];
            foreach ($rows as $row) {
                $output[$row->category] = (int)$row->total;
            }

            return response()->json(['data' => $output]);
        }

        $perCategory = (int)$request->query('per_category', 5);

        $rows = Menu::orderBy('category')->orderByDesc('created_at')->get();

        $result = [];
        foreach ($rows as $menu) {
            if (!isset($result[$menu->category])) {
                $result[$menu->category] = [];
            }
            if (count($result[$menu->category]) < $perCategory) {
                $result[$menu->category][] = [
                    'id'       => $menu->id,
                    'name'     => $menu->name,
                    'category' => $menu->category,
                    'price'    => (float)$menu->price,
                ];
            }
        }

        return response()->json(['data' => $result]);
    }

    // GET /menu/search
    public function search(Request $request)
    {
        $q       = $request->query('q', '');
        $page    = (int)$request->query('page', 1);
        $perPage = (int)$request->query('per_page', 10);

        $query = Menu::query();

        if ($q !== '') {
            $query->where(function ($qb) use ($q) {
                $qb->where('name', 'like', "%$q%")
                    ->orWhere('description', 'like', "%$q%");
            });
        }

        $paginator = $query->paginate($perPage, ['*'], 'page', $page);

        return new MenuCollection($paginator);
    }
}
