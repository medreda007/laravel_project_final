<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    @livewireStyles
    <title>Document</title>

</head>

<body>

        <div class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    JoGeek
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>

            <div class="nav-links">
                <a href="//github.io/jo_geek" target="_blank">Github</a>
                <a href="http://stackoverflow.com/users/4084003/" target="_blank">Stackoverflow</a>
                <a href="https://in.linkedin.com/in/jonesvinothjoseph" target="_blank">LinkedIn</a>
                <a href="https://codepen.io/jo_Geek/" target="_blank">Codepen</a>
                <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">JsFiddle</a>
            </div>
        </div>


    {{-- <div class="nav-wrapper">
        <div class="grad-bar"></div>
        <nav class="navbar">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png"
                alt="Company Logo">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav no-search">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Work</a></li>
                <li class="nav-item"><a href="#">Careers</a></li>
                <li class="nav-item"><a href="#">Contact Us</a></li>
                <i class="fas fa-search" id="search-icon"></i>
                <input class="search-input" type="text" placeholder="Search..">
            </ul>
        </nav>
    </div> --}}

    @yield('main')


    @livewireScripts
</body>

</html>
