<nav id="topnav" class="defaultscroll is-sticky nav-sticky">
    <div class="container relative flex justify-between">

        <a class="logo" href="/">
            <img src="{{ asset('images/logo-dark.png') }}" class="inline-block dark:hidden" alt="hously-dark">
            <img src="{{ asset('images/logo-light.png') }}" class="hidden dark:inline-block" alt="hously-light">
        </a>

        <div id="navigation">
            <ul class="justify-end navigation-menu">
                <li><a href="#">Buy</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">Agents</a></li>
                <li><a href="#">Contact</a></li>
                @auth
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
