<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->name }} - Pansion Karić</title>
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


<div class="container" style="margin-top: 80px;">
    <div class="item-info">
        <div class="item-image">
@php
    $itemImagePath = storage_path('app/public/images/items/' . $item->id . '.jpg');
    $imageSrc = file_exists($itemImagePath)
        ? asset('storage/images/items/' . $item->id . '.jpg')
        : asset('storage/images/items/placeholder.png');
@endphp

<img src="{{ $imageSrc }}" alt="{{ $item->name }}">

        </div>
        
        <div class="item-details">
            <h2>{{ $item->name }}</h2>
            <p><strong>Price:</strong> {{ $item->price }}€</p>
            <p><strong></strong> {{ $item->description ?? ' ' }}</p>
            <!-- Add more item details if needed -->
        </div>
    </div>

</div>

<script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
