@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Items</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($items as $item)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <!-- Item Image -->
                <img src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->name }}" class="w-full h-48 object-cover">

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
@endsection
