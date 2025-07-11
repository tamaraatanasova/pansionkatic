<!-- resources/views/admin/items/edit.blade.php -->
@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Edit Item</h2>

    <form method="POST" action="{{ route('admin.items.update', $item->id) }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-xl">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium mb-1">Name</label>
            <input type="text" name="name" value="{{ $item->name }}" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3">{{ $item->description }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Current Image</label>
            <img src="{{ asset('items/' . $item->id . '.jpg') }}" alt="Item Image" class="h-40 object-cover rounded">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Replace Image (optional)</label>
            <input type="file" name="image" accept=".jpg" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
    </form>
@endsection
