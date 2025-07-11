<!-- resources/views/admin/items/create.blade.php -->
@extends('layouts.admin')

@section('content')
    <h2 class="text-2xl font-semibold mb-6">Add New Item</h2>

    <form method="POST" action="{{ route('admin.items.store') }}" enctype="multipart/form-data" class="bg-white p-6 rounded shadow max-w-xl">
        @csrf

        <div class="mb-4">
            <label class="block font-medium mb-1">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full border rounded p-2" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Image (.jpg)</label>
            <input type="file" name="image" accept=".jpg" class="w-full border rounded p-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
    </form>
@endsection
