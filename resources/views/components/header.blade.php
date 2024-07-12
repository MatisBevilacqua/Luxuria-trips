<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxuria trips</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__logo-container">
                @include('components.logo')
            </div>
            <ul class="header__menu">
                <li class="header__menu-item {{ request()->is('/') ? 'header__menu-item--active' : '' }}">
                    <a href="{{ url('/') }}" class="header__link">Home</a>
                    <span class="header__underline"></span>
                </li>
                <li class="header__menu-item {{ request()->is('cars') ? 'header__menu-item--active' : '' }}">
                    <a href="{{ url('/cars') }}" class="header__link">Cars</a>
                    <span class="header__underline"></span>
                </li>
                <li class="header__menu-item {{ request()->is('tickets') ? 'header__menu-item--active' : '' }}">
                    <a href="{{ url('/tickets') }}" class="header__link">Tickets</a>
                    <span class="header__underline"></span>
                </li>
                <li class="header__menu-item {{ request()->is('yachts') ? 'header__menu-item--active' : '' }}">
                    <a href="{{ url('/yachts') }}" class="header__link">Yachts</a>
                    <span class="header__underline"></span>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>
