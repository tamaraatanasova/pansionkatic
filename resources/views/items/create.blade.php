@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Add New Item</h2>

    <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-xl">
        @csrf

        <!-- Name Fields -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Name (English)</label>
            <input type="text" name="name_en" class="w-full border rounded p-2" value="{{ old('name_en') }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Name (German)</label>
            <input type="text" name="name_de" class="w-full border rounded p-2" value="{{ old('name_de') }}" required>
        </div>

        <!-- Description Fields -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description (English)</label>
            <textarea name="description_en" class="w-full border rounded p-2" rows="3">{{ old('description_en') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description (German)</label>
            <textarea name="description_de" class="w-full border rounded p-2" rows="3">{{ old('description_de') }}</textarea>
        </div>

        <!-- Price Field -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Price</label>
            <input type="text" name="price" class="w-full border rounded p-2" value="{{ old('price') }}" required>
        </div>

        <!-- Subtype Selection -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Subtype</label>
            <select name="subtype_id" class="w-full border rounded p-2" required>
                <option value="">Select Subtype</option>
                @foreach($subtypes as $subtype)
                    <option value="{{ $subtype->id }}" {{ old('subtype_id') == $subtype->id ? 'selected' : '' }}>
                        {{ $subtype->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Image (.jpg)</label>
            <input type="file" name="image" accept=".jpg" class="w-full border rounded p-2" required>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
        </div>
    </form>
@endsection
