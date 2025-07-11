<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-white shadow fixed top-0 left-0 right-0 z-10">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-black no-underline hover:underline">
                <h1 class="text-xl font-bold">Pansion Katić Admin</h1>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-500 hover:underline">Logout</button>
            </form>
        </div>
    </nav>

    <!-- Sidebar + Main -->
    <div class="flex pt-20">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r h-screen fixed top-16 left-0 p-4 space-y-2">
            <a href="{{ route('items.create') }}" class="block px-4 py-2 rounded hover:bg-gray-200">Dodaj novi</a>
            @foreach ($subtypes as $subtype)
            <a href="dashboard/#subtype-{{ $subtype->id }}"
                class="block px-4 py-2 rounded hover:bg-gray-200">
                {{ $subtype->name }}
            </a>
            @endforeach
        </aside>

        <!-- Main Content -->
        <main class="ml-64 p-6 w-full">
            @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-300 rounded text-green-800">
                {{ session('success') }}
            </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>

</html>