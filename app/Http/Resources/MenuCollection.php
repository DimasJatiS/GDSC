<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuCollection extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'data' => MenuResource::collection($this->collection),
        ];
    }

    public function with(Request $request)
    {
        return [
            'pagination' => [
                'total'       => $this->resource->total(),
                'page'        => $this->resource->currentPage(),
                'per_page'    => $this->resource->perPage(),
                'total_pages' => $this->resource->lastPage(),
            ],
        ];
    }
}
