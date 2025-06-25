<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <h1>Edit Items</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.update') }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Types Section -->
        <div class="types-section">
            <h2>Types</h2>

            @foreach($types as $type)
                <div class="type-form">
                    <h3>Edit Type: {{ $type->name }}</h3>
                    <div>
                        <label for="type_name_en_{{ $type->id }}">Name (EN)</label>
                        <input type="text" name="type_name_en[{{ $type->id }}]" value="{{ old('type_name_en.' . $type->id, $type->name_en) }}">
                    </div>
                    <div>
                        <label for="type_name_de_{{ $type->id }}">Name (DE)</label>
                        <input type="text" name="type_name_de[{{ $type->id }}]" value="{{ old('type_name_de.' . $type->id, $type->name_de) }}">
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Subtypes Section -->
        <div class="subtypes-section">
            <h2>Subtypes</h2>

            @foreach($subtypes as $subtype)
                <div class="subtype-form">
                    <h3>Edit Subtype: {{ $subtype->name }}</h3>
                    <div>
                        <label for="subtype_name_en_{{ $subtype->id }}">Name (EN)</label>
                        <input type="text" name="subtype_name_en[{{ $subtype->id }}]" value="{{ old('subtype_name_en.' . $subtype->id, $subtype->name_en) }}">
                    </div>
                    <div>
                        <label for="subtype_name_de_{{ $subtype->id }}">Name (DE)</label>
                        <input type="text" name="subtype_name_de[{{ $subtype->id }}]" value="{{ old('subtype_name_de.' . $subtype->id, $subtype->name_de) }}">
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Submit Button -->
        <button type="submit">Update All</button>
    </form>

</body>
</html>
