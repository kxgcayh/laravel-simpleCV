<div class="header-content">
    <div class="header-photo">
        @auth
            {{-- {{ Auth::user()->getFirstMediaUrl('avatars', 'thumb') }}
            --}}
            <img src="{{ asset('img/main_photo.jpg') }}" alt="{{ Auth::user()->name }}">
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
                        <a href="{{ route('register') }}" class="btn btn-primary">Create your CV</a>
                    </div>
                @endif
            @endauth
        </div>
    @endif
</div>
