<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pansion Karić</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

<div class="nav-container">
    <div class="logo"><a href="/">Pansion Karić</a></div>
    <!-- <div class="burger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="nav-links">
        <a href="/login">Login</a>
    </div> -->
</div>
<header>
    <div class="hero">

    </div>
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

<!-- <img src="{{ $imageSrc }}" alt="{{ $item->name }}"> -->


            <div class="card-body">
                <h4>{{ $item->name }}</h4>
                <p>{{ $item->price }}€</p>
            </div>
        </div>
    </a>
@endforeach

</div>

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
