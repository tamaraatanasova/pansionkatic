<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

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
    <div class="burger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
<div class="nav-links">
    <a href="{{ route('lang.switch', 'en') }}">EN</a>
    <a href="{{ route('lang.switch', 'de') }}">DE</a>
    <a href="{{ route('lang.switch', 'hr') }}">HR</a>
</div>

</div>
<header>
    <div class="hero">

    </div>
</header>
<div class="container">

    @foreach($types as $type)
    <a href="{{ route('type.show', $type->id) }}">
            <div class="card">
                <img src="{{ asset('images/' . strtolower($type->name) . '.jpg') }}" alt="{{ $type->name }}">
                <div class="card-body">
@php
    $locale = app()->getLocale();
    $name = $locale === 'hr' ? $type->name : ($type->{'name_' . $locale} ?? $type->name);
@endphp

<h5 class="card-title">{{ $name }}</h5>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </a>
    @endforeach
    
</div>

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
