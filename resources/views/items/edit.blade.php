@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">✏️ Edit Item</h2>

    <form method="POST" action="{{ route('items.update', $item->id) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <!-- Name Fields -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Name</label>
            <input type="text" name="name" value="{{ old('name', $item->name) }}" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Name (English)</label>
            <input type="text" name="name_en" value="{{ old('name_en', $item->name_en) }}" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Name (German)</label>
            <input type="text" name="name_de" value="{{ old('name_de', $item->name_de) }}" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Description Fields -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Description</label>
            <textarea name="description" rows="3"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $item->description) }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Description (English)</label>
            <textarea name="description_en" rows="3"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description_en', $item->description_en) }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700 font-medium mb-1">Description (German)</label>
            <textarea name="description_de" rows="3"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description_de', $item->description_de) }}</textarea>
        </div>

        <!-- Price -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Price (€)</label>
            <input type="text" name="price" value="{{ old('price', $item->price) }}" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Subtype -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Subtype</label>
            <select name="subtype_id" required
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Subtype</option>
                @foreach($subtypes as $subtype)
                <option value="{{ $subtype->id }}" {{ old('subtype_id', $item->subtype_id) == $subtype->id ? 'selected' : '' }}>
                    {{ $subtype->name }}
                </option>
                @endforeach
            </select>
        </div>

        <!-- Image Display -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Current Image</label>
            @php
                $imageSrc = file_exists(public_path('images/items/' . $item->id . '.jpg'))
                    ? asset('images/items/' . $item->id . '.jpg')
                    : asset('images/items/placeholder.png');
            @endphp
            <img src="{{ $imageSrc }}" alt="Item Image" class="h-40 w-full object-cover rounded border border-gray-300">
        </div>

        <!-- Replace Image -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Replace Image (optional)</label>
            <input type="file" name="image" accept=".jpg"
                class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Submit -->
        <div class="pt-4 text-right">
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition font-semibold">
                💾 Update Item
            </button>
        </div>
    </form>
</div>
@endsection
