
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Pansion Karić Admin Panel</h1>
            
            <nav class="space-x-4">
                <form action="/logout" method="POST" class="inline">
                    <!-- Laravel requires CSRF token for logout -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="text-gray-700 hover:text-red-600">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
<main class="py-10 px-6 max-w-7xl mx-auto">

    <!-- Tabs Navbar -->
<nav class="mb-6 border-b border-gray-200">
    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500">
        @foreach ($subtypes as $subtype)
            <li class="mr-2">
                <a href="{{ route('items.category', $subtype->id) }}" 
                   class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:border-b-2 border-blue-600">
                   {{ $subtype->name }}
                </a>
            </li>
        @endforeach
        
        <!-- Vertical Line -->
        <li class="border-l border-gray-200 mx-4"></li>

        <!-- Add New Item Tab -->
        <li class="mr-2">
            <a href="{{ route('items.create') }}" 
               class="inline-block p-4 rounded-t-lg hover:text-green-600 hover:border-b-2 border-green-600">
               Dodaj nov
            </a>
        </li>
    </ul>
</nav>
    <!-- Main Card -->

<div class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-6 rounded shadow">

            <!-- Form for creating a new item -->
            <form action="{{ route('items.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="price" name="price" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                    </div>

                    <div>
                        <label for="subtype_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="subtype_id" name="subtype_id" class="mt-1 block w-full border border-gray-300 rounded-lg p-2" required>
                            <option value="">Select a category</option>
                            @foreach ($subtypes as $subtype)
                                <option value="{{ $subtype->id }}">{{ $subtype->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Dodaj
                    </button>
                </div>
            </form>
    </div>


    </div>
    
</main>

</body>
</html>

