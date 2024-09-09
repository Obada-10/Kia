<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">KN</a>
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

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-block">
                <h3>About Us</h3>
                <p>Kia is een Zuid-Koreaans automerk dat deel uitmaakt van de Hyundai Motor Company.</p>
                <p>(c) 2024 KIA.</p>
            </div>
            <div class="footer-block">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#">Modellen</a></li>
                    <li><a href="#">Occassions</a></li>
                    <li><a href="#">Zakelijk</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-block">
                <h3>Social</h3>
                <ul>
                    <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    
</body>
</html>