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
    <a href="{{ route('dashboard') }}" class="text-2xl font-bold">
            Pansion Karić Admin Panel
        </a>            
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

            <!-- All Items Table -->
            <div class="mt-10 bg-white p-6 rounded shadow">

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-100 text-gray-600">
                            <tr>
                                <th class="px-4 py-2 text-left">ID</th>
                                <th class="px-4 py-2 text-left">Name</th>
                                <th class="px-4 py-2 text-left">Price</th>
                                <th class="px-4 py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($items as $item)
                                <tr>
                                    <td class="px-4 py-2">{{ $item->id }}</td>
                                    <td class="px-4 py-2">{{ $item->name }}</td>
                                    <td class="px-4 py-2">{{ $item->price }}</td>
                                    <td class="px-4 py-2 space-x-2">
                                        <a href="{{ route('items.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

  
    </main>

</body>
</html>
