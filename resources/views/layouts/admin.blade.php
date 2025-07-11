@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Edit Item</h2>

    <form method="POST" action="{{ route('items.update', $item->id) }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-xl">
        @csrf
        @method('PUT')

        <!-- Name Fields -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name', $item->name) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Name (English)</label>
            <input type="text" name="name_en" class="w-full border rounded p-2" value="{{ old('name_en', $item->name_en) }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Name (German)</label>
            <input type="text" name="name_de" class="w-full border rounded p-2" value="{{ old('name_de', $item->name_de) }}" required>
        </div>

        <!-- Description Fields -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3">{{ old('description', $item->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description (English)</label>
            <textarea name="description_en" class="w-full border rounded p-2" rows="3">{{ old('description_en', $item->description_en) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description (German)</label>
            <textarea name="description_de" class="w-full border rounded p-2" rows="3">{{ old('description_de', $item->description_de) }}</textarea>
        </div>

        <!-- Price Field -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Price</label>
            <input type="text" name="price" class="w-full border rounded p-2" value="{{ old('price', $item->price) }}" required>
        </div>

        <!-- Subtype Selection -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Subtype</label>
            <select name="subtype_id" class="w-full border rounded p-2" required>
                <option value="">Select Subtype</option>
                @foreach($subtypes as $subtype)
                    <option value="{{ $subtype->id }}" {{ old('subtype_id', $item->subtype_id) == $subtype->id ? 'selected' : '' }}>
                        {{ $subtype->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Current Image -->
        @php
            $imageSrc = file_exists(public_path('images/items/' . $item->id . '.jpg'))
                ?? asset('images/items/' . $item->id . '.jpg')
        @endphp
        <div class="mb-4">
            <label class="block font-medium mb-1">Current Image</label>
            <img src="{{ $imageSrc }}" alt="Item Image" class="h-40 object-cover rounded">
        </div>

        <!-- Image Upload (optional) -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Replace Image (optional)</label>
            <input type="file" name="image" accept=".jpg" class="w-full border rounded p-2">
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
        </div>
    </form>
@endsection
