<header id="site_header" class="header mobile-menu-hide">
    <div class="header-content">
        <div class="header-photo">
            @auth
                <img src="{{ asset('storage/pics/' . Auth::user()->image) }}" alt="{{ Auth::user()->name }}">
                <div class="header-titles">
                    <h2>{{ Auth::user()->name }}</h2>
                    <h4>{{ Auth::user()->title }}</h4>
                </div>
            @else
                <img src="{{ asset('img/main_photo.jpg') }}" alt="&nbsp;">
            @endauth
        </div>
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <div class="header-buttons">
                        <a href="#" class="btn btn-primary">Download CV</a>
                    </div>
                @else
                    @if (Route::has('register'))
                        <div class="header-buttons">
                            <a href="{{ url('/register#create-cv') }}" class="btn btn-primary">Create your CV</a>
                        </div>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <ul class="main-menu">
        <li class="active">
            <a href="#home" class="nav-anim">
                <span class="menu-icon lnr lnr-home"></span>
                <span class="link-text">Home</span>
            </a>
        </li>
        @auth
            <li>
                <a href="#resume" class="nav-anim">
                    <span class="menu-icon lnr lnr-graduation-hat"></span>
                    <span class="link-text">Resume</span>
                </a>
            </li>
            <li>
                <a href="#edit-profile" class="nav-anim">
                    <i class="fas fa-user-edit"></i>
                    <span class="link-text">Update<br>Profile</span>
                </a>
            </li>
            <li>
                <a href="#insert-experience" class="nav-anim">
                    <i class="fas fa-book-reader"></i><br>
                    <span class="link-text">Insert<br>Experience</span>
                </a>
            </li>
            <li>
                <a href="#insert-education" class="nav-anim">
                    <i class="fas fa-graduation-cap"></i><br>
                    <span class="link-text">Insert<br>Education</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-anim">
                    <i class="fas fa-sign-out-alt"></i><br>
                    <span class="link-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        @else
            <li>
                <a href="#login" class="nav-anim">
                    <span class="fas fa-sign-in-alt"></span><br>
                    <span class="link-text">Get CV</span>
                </a>
            </li>
        @endauth
    </ul>
</header>
