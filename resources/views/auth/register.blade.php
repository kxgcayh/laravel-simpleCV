<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simple CV Builder - Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Simple CV Builder - Laravel" />
    <meta name="keywords"
        content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free/css/all.css') }}">
    <script src="{{ asset('fonts/fontawesome-free/js/all.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">

</head>

<body>
    {{-- Animated Background --}}
    <div class="lm-animated-bg" style="background-image: url({{ asset('img/main_bg.png') }});"></div>
    {{-- /Animated Background --}}
    {{-- Loading animation --}}
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    {{-- /Loading animation --}}
    <div class="page">
        <div class="page-content">
            {{-- Header on Left --}}
            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">
                        @auth
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
                                        <a href="{{ url('/login#login') }}" class="btn btn-primary">Get your CV</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

                <ul class="main-menu">
                    <li>
                        <a href="#home" class="nav-anim">
                            <span class="menu-icon lnr lnr-home"></span>
                            <span class="link-text">Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#create-cv" class="nav-anim">
                            <i class="fas fa-user-edit"></i>
                            <span class="link-text">Create</span>
                        </a>
                    </li>
                </ul>
            </header>
            {{-- Mobile Navigation --}}
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            {{-- End Mobile Navigation --}}
            {{-- Arrows Nav --}}
            <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
            </div>
            {{-- End Arrows Nav --}}
            <div class="content-area">
                <div class="animated-sections">
                    <section data-id="home" class="animated-section start-page">
                        <div class="section-content vcentered">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-block">
                                        <h2>Simple CV Builder</h2>
                                        <div class="owl-carousel text-rotation">
                                            <div class="item">
                                                <div class="sp-subtitle">You can create CV</div>
                                            </div>
                                            <div class="item">
                                                <div class="sp-subtitle">in this apps</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-id="create-cv" class="animated-section">
                        <div class="page-title">
                            <h2>Create CV</h2>
                        </div>
                        <div class="section-content">
                            <div class="col-xl-12">
                                <div class="block-title">
                                    <h3>Too lazy to create your <span>Curriculum Vitae?</span></h3>
                                </div>
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <label class="custom-label">Full Name</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        required autocomplete="name" autofocus>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">Email Address</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="email" type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}" required autocomplete="email">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">Title</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="title" type="text" name="title"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        value="{{ old('title') }}" required>
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">Password</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="password" type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">Phone Number</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="phone" type="number" name="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        value="{{ old('phone') }}" required>
                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <label class="custom-label">Address</label>
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="address" name="address" rows="1"
                                                        class="form-control @error('address') is-invalid @enderror"
                                                        value="{{ old('address') }}" style="height: 41px;"
                                                        required></textarea>
                                                    @error('address')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">About Me</label>
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="about" name="about" rows="1"
                                                        class="form-control @error('about') is-invalid @enderror"
                                                        value="{{ old('about') }}" style="height: 41px;"
                                                        required></textarea>
                                                    @error('about')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">
                                                    Date Of Birth
                                                </label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="dateofbirth" type="date" name="dateofbirth"
                                                        class="form-control @error('dateofbirth') is-invalid @enderror"
                                                        value="{{ old('dateofbirth') }}" required
                                                        placeholder="Date of Birth">
                                                    @error('dateofbirth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <label class="custom-label">Password Confirm</label>
                                                <div class="form-group form-group-with-icon">
                                                    <input id="password-confirm" type="password"
                                                        name="password_confirmation" class="form-control" required
                                                        autocomplete="new-password">
                                                    @error('password_confirm')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="button btn-send">Generate CV</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
    --}}
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/animating.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src='{{ asset('js/perfect-scrollbar.min.js') }}'></script>
    <script src='{{ asset('js/jquery.shuffle.min.js') }}'></script>
    <script src='{{ asset('js/masonry.pkgd.min.js') }}'></script>
    <script src='{{ asset('js/owl.carousel.min.js') }}'></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        //

    </script>
</body>

</html>
