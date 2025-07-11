@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Dashboard</h2>

    <!-- Subtypes Navigation -->
    <!-- <nav class="mb-6 border-b border-gray-200">
        <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500">
            @foreach ($subtypes as $subtype)
                <li class="mr-2">
                    <a href="#subtype-{{ $subtype->id }}" 
                       class="inline-block p-4 rounded-t-lg hover:text-blue-600 hover:border-b-2 border-blue-600">
                       {{ $subtype->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav> -->

@foreach ($subtypes as $subtype)
    <div id="subtype-{{ $subtype->id }}" class="mt-10 bg-white p-6 rounded shadow">
        <h4 class="text-xl font-semibold mb-4">{{ $subtype->name }}</h4>

        <!-- Display items for the current subtype -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($subtype->items as $item)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <!-- Conditional Item Image -->
                    @php
                        $imagePath = public_path('images/items/' . $item->image);
                        $imageSrc = file_exists($imagePath) && $item->image
                            ? asset('images/items/' . $item->image)
                            : asset('images/items/placeholder.png');
                    @endphp
                    <img src="{{ $imageSrc }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">

                    <div class="p-4">
                        <!-- Item Name -->
                        <h3 class="text-xl font-semibold text-gray-800 truncate">{{ $item->name }}</h3>

                        <!-- Item Description -->
                        <p class="text-sm text-gray-600 mt-2">{{ Str::limit($item->description, 80) }}</p>

                        <!-- Item Price -->
                        <p class="text-lg font-semibold text-gray-800 mt-4">${{ $item->price }}</p>

                        <!-- Action Buttons -->
                        <div class="mt-4 flex space-x-2">
                            <a href="{{ route('items.edit', $item->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>

                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endforeach

@endsection
