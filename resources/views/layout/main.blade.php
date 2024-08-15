<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title','Hotel Room Reservation')</title>
    <link rel="stylesheet" href="{{ url('css/Frontend.css') }}">

</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <img src="../images/HRRS logo HD.webp" alt="HRRS">
                <h4>Hotel Room Booking</h4>
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li> <a href="{{ url('/') }}">Home</a></li>
                    <li> <a href="#about"> About</a></li>
                    <li> <a href="#rooms">Rooms</a></li>
                    <li> <a href="#service">Services</a></li>
                    <li> <a href="{{ url('contact') }}">Contact</a></li>
                    <li> <a href="{{ url('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="logo1">
            <img src="../images//HRRS logo HD.webp" alt="HRRS">
        </div>
        <div>
            <h3>Connect with us</h3>
            <div class="icon">
                <a href="https://www.facebook.com/badri.pokhrel7777" target="_blank">
                    <img src="../images//Icon//icons8-facebook-96.svg" alt="facebook">
                </a>
                <a href="https://www.instagram.com/badripokhrel143/"target="_blank">
                    <img src="../images//Icon//icons8-instagram-96.svg" alt="Instagram">
                </a>
                <a href="https://github.com/badripokhrel77"target="_blank">
                    <img src="../images//Icon//icons8-github (1).svg" alt="Github">
                </a>
                <a href="#"target="_blank">
                    <img src="../images//Icon//icons8-whatsapp-96.svg" alt="Whatsapp">
                </a>
            </div>
            <div class="copy">
                <h4> &copy;2024 Hotel Room Booking. All Right Reserved.</h4>
            </div>
        </div>
    </footer>
</body>

</html>
