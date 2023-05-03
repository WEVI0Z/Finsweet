<header class="header">
    <nav class="header__content">
        <a href="{{route("main-page")}}" class="header__link">
            <h1 class="header__title">{Finsweet</h1>
        </a>
        <ul class="header__resources">
            <li class="header__resource"><a href="{{route("main-page")}}" class="header__link">Home</a></li>
            <li class="header__resource"><a href="#" class="header__link">Blog</a></li>
            <li class="header__resource"><a href="#" class="header__link">About Us</a></li>
            <li class="header__resource"><a href="#" class="header__link">Contact Us</a></li>
        </ul>
        <ul class="header__options">
            <li class="header__option">
                <a href="{{route("login-page")}}" class="header__button">Login</a>
            </li>
            <li class="header__option">
                <a href="{{route("register-page")}}" class="header__button">Register</a>
            </li>
            <li class="header__option">
                <a href="{{route("creation-page")}}" class="header__button">Create</a>
            </li>
        </ul>
    </nav>
</header>
