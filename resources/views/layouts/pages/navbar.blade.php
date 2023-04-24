<!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1 style="font-size: 20px; width: 151px;">summer camp<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Camp benefits</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#chefs">Tourguide</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>

@auth
    <a class="btn-book-a-table" style="color: floralwhite;margin-left: 30px;">{{auth()->user()->name}}{{auth()->user()->family}}</a>
    <img class="rounded-circle" src="{{auth()->user()->picture}}" alt="" style="width:63px;height:55px;">
    <form action='{{route("logout")}}' method="post">
        @csrf
        <button class="btn-book-a-table" style="border: 0px">
            logout
        </button>
    </form>
@endauth

@guest
    <a class="btn-book-a-table" href="{{route('login')}}">Login</a>
    <a class="btn-book-a-table" href="{{route('register')}}">Register</a>
@endguest
<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
</div>
</header>
<!-- End Header -->
