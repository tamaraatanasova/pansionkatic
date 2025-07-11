@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Items Dashboard</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($items as $item)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <div class="mb-4">
                    @php
                        $imageSrc = file_exists(public_path('images/items/' . $item->id . '.jpg'))
                            ? asset('images/items/' . $item->id . '.jpg')
                            : asset('images/items/placeholder.png');
                    @endphp
                    <img src="{{ $imageSrc }}" alt="{{ $item->name }}" class="h-32 w-full object-cover rounded mb-4">
                </div>
                <h3 class="text-lg font-semibold mb-2">{{ $item->name }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ Str::limit($item->description, 80) }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-green-500 font-semibold">{{ $item->price }} USD</span>
                    <a href="{{ route('items.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
