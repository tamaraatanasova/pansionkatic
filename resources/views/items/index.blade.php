<!-- resources/views/admin/items/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">All Items</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($items as $item)
            <div class="bg-white rounded shadow p-4">
                <img src="{{ asset('items/' . $item->id . '.jpg') }}" alt="Item Image" class="w-full h-48 object-cover rounded mb-4">
                <h3 class="text-lg font-bold">{{ $item->name }}</h3>
                <p class="text-gray-700 mb-2">{{ $item->description }}</p>
                <div class="flex justify-between">
                    <a href="{{ route('admin.items.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
