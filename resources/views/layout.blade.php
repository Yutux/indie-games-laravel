<?php
if (isset($_GET['Cookies'])){
    setcookie('Cookies', 'Ok', time() + 31536000 );
    header("Refresh:0; url=/");
}
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indie-Games</title>
    <!-- Styles -->
    <link href="{{ asset ('Css/header.css') }}" rel="stylesheet">
    <link href="{{ asset ('Css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('Css/Cookies.css') }}" rel="stylesheet">

    @yield('link')
</head>

<header>
    <h1 class="presentation">
        <a href="logo.html">
            <img src="{{asset('css/img/giphy.gif')}}" alt="gif" height="100px" width="100px">
        </a>
    </h1>

    <!-- Left Side Of Navbar -->
    <nav>
        <!-- Right Side Of Navbar -->
        <ul id="menu-deroulant">
            <!-- Authentication Links -->
            <li><a href="/">home</a>
                <ul>
                    @guest
                    <li><a href='/Login'>login</a></li>
                    <li><a href="/Signin">Sign in</a></li>
                    <li><a href="/Reset">Reset</a></li>
                    @else
                    <li>
                        <a href="/Account" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/Shop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            Shop <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/cart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            <img src="{{asset('css/img/panier.png')}}" alt="panier" height="50px" width="50px">
                            <i class='circle'>{{Session::has('cart') ? Session::get('cart')->totalQty: ''}}</i> <span
                                class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="buttom">Logout</a>
                    </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </nav>
</header>

<body>
    @yield('content')
</body>

<div class="footer">
    <!-- include('cookieConsent::index') -->
    <?php 
if (!isset($_COOKIE['Cookies'])) {
?>
    <div id="Cookies">
        <div id="Cookies-container">
            <p>Ce site utilise des cookies. En utilisant ce site internet, vous adhérez donc aux cookies que nous
                utilisons.</p>
            <a href="?Cookies" id="click">Ok, continuer</a>
        </div>
    </div>
    <?php
}
?>

    <h3>copyright</h3>
    <a href="https://www.facebook.com">
        <img src="{{asset ('css/img/logo_fb.png')}}" alt="facebook" height="25" />
    </a>
    <div>
        <a href="https://twitter.com">
            <img src="{{asset ('css/img/logo_instagram.png')}}" alt="twitter" height="25" />
        </a>
        <p class="insta">Instagram</p>
    </div>
    <div>
        <h3>Zogoury Moloko</h3>
        <h3>Carre Dorian</h3>
    </div>
    </footer>

</html>
