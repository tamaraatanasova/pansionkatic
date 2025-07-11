@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">All Items</h2>

    @foreach($subtypes as $subtype)
        <h3 class="text-xl font-semibold mb-4">{{ $subtype->name }}</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @foreach($subtype->items as $item)
                <div class="bg-white rounded shadow p-4">
                    <img src="{{ asset('images/items/' . $item->id . '.jpg') }}" alt="Item Image" class="w-full h-48 object-cover rounded mb-4">
                    <h4 class="text-lg font-bold">{{ $item->name }}</h4>
                    <p class="text-gray-700 mb-2">{{ $item->description }}</p>
                    <p class="text-gray-900 font-semibold">${{ number_format($item->price, 2) }}</p>
                    <div class="flex justify-between mt-4">
                        <a href="{{ route('items.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this item?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
