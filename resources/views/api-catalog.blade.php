<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Catalog – API Collection</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Highlight on hover */
        .api-card:hover {
            transform: translateY(-4px);
            border-color: rgba(45, 212, 191, .6);
            box-shadow: 0 10px 35px rgba(45, 212, 191, .1);
        }

        /* HTTP Method Colors */
        .method-get { color: #4ade80; }
        .method-post { color: #60a5fa; }
        .method-put { color: #fbbf24; }
        .method-delete { color: #f87171; }

        /* Code block style */
        pre {
            background: #1e1e1e;
            padding: 12px;
            border-radius: 8px;
            overflow-x: auto;
            font-size: .9rem;
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-200">

    <!-- HEADER -->
    <header class="p-8 border-b border-gray-700 flex justify-between items-center">
        <h1 class="text-3xl font-bold">
            <span class="text-teal-400">Menu Catalog</span> — API Collection
        </h1>

        <a href="/" class="text-sm px-4 py-2 rounded-lg bg-teal-500 hover:bg-teal-400">
            ← Back to Home
        </a>
    </header>

    <!-- PAGE WRAPPER -->
    <div class="max-w-5xl mx-auto py-12 px-6 space-y-12">

        <!-- INTRO -->
        <section>
            <h2 class="text-2xl font-bold mb-3">API Overview</h2>
            <p class="text-gray-300 leading-relaxed">
                Berikut adalah daftar endpoint API untuk mengelola katalog Menu.
                UI dibuat dalam bentuk kartu mirip Postman untuk memudahkan eksplorasi.
            </p>
        </section>

        <!-- API LIST -->
        <section class="space-y-6">

            <!-- Card Template -->
            @php
                $apis = [
                    [
                        'method' => 'POST',
                        'endpoint' => '/menu',
                        'title' => 'Create Menu (POST /menu)',
                        'description' => 'Create new menu item with full data and AI analysis.',
                        'body' => json_encode([
                            "name" => "Es Kopi Susu",
                            "category" => "drinks",
                            "calories" => 180,
                            "price" => 25000.00,
                            "ingredients" => ["coffee","milk","ice","sugar"],
                            "description" => "Classic iced coffee with milk"
                        ], JSON_PRETTY_PRINT)
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu',
                        'title' => 'List Menu (GET /menu)',
                        'description' => 'List all menu items.',
                        'body' => null
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu?category=&min_price=&max_price=&page=1',
                        'title' => 'List Menu with Filters',
                        'description' => 'Supports pagination, sorting, and filter queries.',
                        'body' => null
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu/{id}',
                        'title' => 'Get Menu by ID',
                        'description' => 'Retrieve single menu item.',
                        'body' => null
                    ],
                    [
                        'method' => 'PUT',
                        'endpoint' => '/menu/{id}',
                        'title' => 'Update Menu',
                        'description' => 'Full update on menu item.',
                        'body' => json_encode([
                            "name" => "Es Kopi Susu Premium",
                            "category" => "drinks",
                            "calories" => 190,
                            "price" => 30000,
                            "ingredients" => ["coffee","milk","ice","condensed_milk"],
                            "description" => "Premium recipe"
                        ], JSON_PRETTY_PRINT)
                    ],
                    [
                        'method' => 'DELETE',
                        'endpoint' => '/menu/{id}',
                        'title' => 'Delete Menu',
                        'description' => 'Permanently remove menu item.',
                        'body' => null
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu/group-by-category?mode=count',
                        'title' => 'Group by Category (Count)',
                        'description' => 'Returns count of items in each category.',
                        'body' => null
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu/group-by-category?mode=list&per_category=5',
                        'title' => 'Group by Category (List)',
                        'description' => 'Top items per category.',
                        'body' => null
                    ],
                    [
                        'method' => 'GET',
                        'endpoint' => '/menu/search?q=',
                        'title' => 'Search Menu',
                        'description' => 'Simple search by keyword.',
                        'body' => null
                    ],
                    [
                        'method' => 'POST',
                        'endpoint' => '/menu/ai-suggest',
                        'title' => 'Gemini AI Suggest',
                        'description' => 'Request AI menu suggestion.',
                        'body' => json_encode([
                            "name" => "Latte Caramel",
                            "ingredients" => ["coffee","milk","caramel syrup"]
                        ], JSON_PRETTY_PRINT)
                    ],
                ];
            @endphp

            @foreach($apis as $api)
            <div class="api-card p-6 rounded-xl border border-gray-700 transition bg-gray-800/60">
                <!-- Method & Title -->
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold 
                        @if($api['method']=='GET') method-get 
                        @elseif($api['method']=='POST') method-post
                        @elseif($api['method']=='PUT') method-put
                        @elseif($api['method']=='DELETE') method-delete
                        @endif
                    ">
                        {{ $api['method'] }}
                    </span>
                    <code class="bg-gray-900 px-3 py-1 rounded-md text-sm">
                        {{ $api['endpoint'] }}
                    </code>
                </div>

                <!-- Description -->
                <h4 class="text-xl font-semibold mb-1">{{ $api['title'] }}</h4>
                <p class="text-gray-400 text-sm mb-4">{{ $api['description'] }}</p>

                <!-- Body -->
                @if($api['body'])
                <pre>{{ $api['body'] }}</pre>
                @endif
            </div>
            @endforeach

        </section>
    </div>

</body>
</html>
