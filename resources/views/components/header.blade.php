<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative flex justify-between">

        <a class="logo" href="/">
            @if(request()->route()->getName() !== 'search')
                <img src="{{ asset('images/logo-dark.png') }}" class="inline-block dark:hidden" alt="hously-dark">
                <img src="{{ asset('images/logo-light.png') }}" class="hidden dark:inline-block" alt="hously-light">
            @else
                <span class="inline-block dark:hidden">
                    <img src="{{ asset('images/logo-dark.png') }}" class="l-dark" alt="hously-dark">
                    <img src="{{ asset('images/logo-light.png') }}" class="l-light" alt="hously-light">
                </span>
            @endif
        </a>

        <div id="navigation">
            <ul class="justify-end navigation-menu {{ request()->route()->getName() === 'search' ? 'nav-light' : '' }}">
                <li><a href="#">Buy</a></li>
                <li><a href="#">Sell</a></li>
                <li><a href="#">Agents</a></li>
                <li><a href="#">Contact</a></li>
                @auth
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="{{ route('logout') }}">Log Out</a></li>
                @else
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
        </div>

    </div>
</nav>
