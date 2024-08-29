<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Modellen</a></li>
                <li><a href="#">Occassions</a></li>
                <li><a href="#">Zakelijk</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>        
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Mijn Website. Alle rechten voorbehouden.</p>
    </footer>    
</body>
</html>