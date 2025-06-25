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
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-2">Welcome, Admin!</h3>
        <!-- All Items Table -->
<div class="max-w-7xl mx-auto py-10">
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-lg font-semibold mb-4">Edit Item</h3>

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="name" class="block">Name</label>
                <input type="text" name="name" id="name" value="{{ $item->name }}" class="w-full border-gray-300 p-2 rounded">
            </div>
            
            <div class="mb-4">
                <label for="price" class="block">Price</label>
                <input type="number" name="price" id="price" value="{{ $item->price }}" class="w-full border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label for="subtype_id" class="block">Category</label>
                <select name="subtype_id" id="subtype_id" class="w-full border-gray-300 p-2 rounded">
                    @foreach ($subtypes as $subtype)
                        <option value="{{ $subtype->id }}" {{ $item->subtype_id == $subtype->id ? 'selected' : '' }}>{{ $subtype->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white p-2 rounded">Update Item</button>
        </form>
    </div>
</div>


    </div>
    
</main>

</body>
</html>

