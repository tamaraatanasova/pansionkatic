<!DOCTYPE html>
<html lang="hr">
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

    @foreach($subtype as $type)
        <a href="{{ route('subtype.show', $type->id) }}">
            <div class="card">
                <!-- <img src="{{ asset('images/' . strtolower($type->name) . '.jpg') }}" alt="{{ $type->name }}"> -->
                <div class="card-body">
                      {{ localized_field($type, 'name') }}
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
        </a>
    @endforeach

</div>

<script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
