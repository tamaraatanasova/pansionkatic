<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ localized_field($item, 'name') }} - Pansion Katić</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

<div class="nav-container">
    <div class="logo"><a href="/">Pansion Katić</a></div>
    <div class="burger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="nav-links">
        <a href="{{ url('/lang/hr') }}">HR</a>
        <a href="{{ url('/lang/en') }}">EN</a>
        <a href="{{ url('/lang/de') }}">DE</a>
    </div>
</div>

<div class="container" style="margin-top: 80px;">
    <div class="item-info">
        <div class="item-image">
    @php
    $imageSrc = file_exists(public_path('images/items/' . $item->id . '.jpg'))
        ? asset('images/items/' . $item->id . '.jpg')
        : asset('images/items/placeholder.png');
@endphp

            <img src="{{ $imageSrc }}" alt="{{ localized_field($item, 'name') }}">
        </div>

        <div class="item-details">
            <h2>{{ localized_field($item, 'name') }}</h2>
            <p>{{ $item->price }}€</p>
            <p>{{ localized_field($item, 'description') ?? '' }}</p>
        </div>
    </div>
</div>

<script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
