@extends('layouts.admin')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="bg-white p-8 rounded-2xl shadow-lg">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Add New Item</h2>

        <form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <!-- Name Fields -->
            @foreach (['name' => '', 'name_en' => '(English)', 'name_de' => '(German)'] as $field => $label)
                <div>
                    <label class="block font-medium mb-1 capitalize">{{ ucfirst(str_replace('_', ' ', $field)) }} {{ $label }}</label>
                    <input type="text" name="{{ $field }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old($field) }}" required>
                </div>
            @endforeach

            <!-- Description Fields -->
            @foreach (['description' => '', 'description_en' => '(English)', 'description_de' => '(German)'] as $field => $label)
                <div>
                    <label class="block font-medium mb-1 capitalize">{{ ucfirst(str_replace('_', ' ', $field)) }} {{ $label }}</label>
                    <textarea name="{{ $field }}" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old($field) }}</textarea>
                </div>
            @endforeach

            <!-- Price -->
            <div>
                <label class="block font-medium mb-1">Price</label>
                <input type="text" name="price" class="w-full border border-gray-300 rounded-lg px-4 py-2" value="{{ old('price') }}" required>
            </div>

            <!-- Subtype -->
            <div>
                <label class="block font-medium mb-1">Subtype</label>
                <select name="subtype_id" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                    <option value="">Select Subtype</option>
                    @foreach($subtypes as $subtype)
                        <option value="{{ $subtype->id }}" {{ old('subtype_id') == $subtype->id ? 'selected' : '' }}>
                            {{ $subtype->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block font-medium mb-1">Image (.jpg)</label>
                <input type="file" name="image" accept=".jpg" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
            </div>

            <!-- Submit -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
