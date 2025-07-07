<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Edit Items</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.update') }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Types Section -->
        <div class="mb-5">
            <h2>Types</h2>
            @foreach($types as $type)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Edit Type: {{ $type->name }}</h5>

                        <div class="mb-3">
                            <label for="type_name_{{ $type->id }}" class="form-label">Name (Default)</label>
                            <input type="text" class="form-control" name="type_name[{{ $type->id }}]" value="{{ old('type_name.' . $type->id, $type->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="type_name_en_{{ $type->id }}" class="form-label">Name (EN)</label>
                            <input type="text" class="form-control" name="type_name_en[{{ $type->id }}]" value="{{ old('type_name_en.' . $type->id, $type->name_en) }}">
                        </div>

                        <div class="mb-3">
                            <label for="type_name_de_{{ $type->id }}" class="form-label">Name (DE)</label>
                            <input type="text" class="form-control" name="type_name_de[{{ $type->id }}]" value="{{ old('type_name_de.' . $type->id, $type->name_de) }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Subtypes Section -->
        <div class="mb-5">
            <h2>Subtypes</h2>
            @foreach($subtypes as $subtype)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Edit Subtype: {{ $subtype->name }}</h5>

                        <div class="mb-3">
                            <label for="subtype_name_{{ $subtype->id }}" class="form-label">Name (Default)</label>
                            <input type="text" class="form-control" name="subtype_name[{{ $subtype->id }}]" value="{{ old('subtype_name.' . $subtype->id, $subtype->name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="subtype_name_en_{{ $subtype->id }}" class="form-label">Name (EN)</label>
                            <input type="text" class="form-control" name="subtype_name_en[{{ $subtype->id }}]" value="{{ old('subtype_name_en.' . $subtype->id, $subtype->name_en) }}">
                        </div>

                        <div class="mb-3">
                            <label for="subtype_name_de_{{ $subtype->id }}" class="form-label">Name (DE)</label>
                            <input type="text" class="form-control" name="subtype_name_de[{{ $subtype->id }}]" value="{{ old('subtype_name_de.' . $subtype->id, $subtype->name_de) }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update All</button>
    </form>
</div>

</body>
</html>
