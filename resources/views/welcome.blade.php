<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Construction Company</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body class="antialiased">
        <div class="header">
            <nav>
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}">Home</a></li>
                        @else
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}" class="auth-login">Account</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
                <i class="fas fa-bars open-icon" onclick="openmenu()"></i>
                <i class="fas fa-times close-icon" onclick="closemenu()"></i>
            </nav>
        </div>

        <div class="heading">
            <p>Edward And Liam Construction Company</p>
        </div>
        <div class="image-container">
    <div class="img1">
        <img src="images/excavator.jpeg" alt="">
    </div>
    <div class="img2">
        <img src="images/construction.jpeg" alt="">
    </div>
    <div class="img3">
        <img src="images/house.jpeg" alt="">
    </div>
</div>

<div class="about-container">
    <h2>About Us</h2>
    <p>At Edward and Liam Construction Company, we are dedicated to building not just structures, but dreams. With years of experience in the construction industry, our passion for excellence drives us to deliver exceptional quality and unparalleled craftsmanship in every project we undertake.</p>
    <p>We believe that every project is an opportunity to create lasting relationships with our clients, and we strive to exceed expectations by combining innovative designs with robust engineering. Whether it’s a cozy residential home or a grand commercial establishment, our team of skilled professionals approaches each project with the utmost care and attention to detail.</p>
    <p>Our commitment to sustainability and safety ensures that we not only create beautiful spaces but also protect the environment and our workforce. We understand that construction is more than just bricks and mortar; it's about building communities, enhancing lifestyles, and creating environments where memories are made.</p>
    <p>Join us in transforming your vision into reality. At Edward and Liam Construction Company, your project is our priority, and your satisfaction is our success.</p>
</div>


        <script>
            function openmenu() {
                document.getElementById("sidemenu").style.display = "flex";
            }
            function closemenu() {
                document.getElementById("sidemenu").style.display = "none";
            }
        </script>
    </body>
</html>
