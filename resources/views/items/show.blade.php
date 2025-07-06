<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pansion Katić</title>
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

<header>
    <div class="hero"></div>
</header>

<div class="container">
    @foreach($items as $item)
        <a href="{{ route('items.info', $item->id) }}">
            <div class="card">
                @php
                    $itemImagePath = storage_path('app/public/images/items/' . $item->id . '.jpg');
                    $imageSrc = file_exists($itemImagePath)
                        ? asset('storage/images/items/' . $item->id . '.jpg')
                        : asset('storage/images/items/placeholder.png');
                @endphp

                <img src="{{ $imageSrc }}" alt="{{ localized_field($item, 'name') }}">

                <div class="card-body">
                    <h4>{{ localized_field($item, 'name') }}</h4>
                    <p>{{ $item->price }}€</p>
                    <!-- <i class="fa-solid fa-chevron-right"></i> -->
                </div>
            </div>
        </a>
    @endforeach
</div>

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
