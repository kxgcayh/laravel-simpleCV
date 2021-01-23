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
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" crossorigin="anonymous">
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
            @leftheader
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
                                        <h2>Welcome</h2>
                                        <div class="owl-carousel text-rotation">
                                            <div class="item">
                                                <div class="sp-subtitle">Create Your CV</div>
                                            </div>
                                            <div class="item">
                                                <div class="sp-subtitle">Using this Apps</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @auth
                        <section data-id="resume" class="animated-section">
                            @resume
                        </section>
                        <section data-id="edit-cv" class="animated-section">
                            @edit
                        </section>
                    @else
                        <section data-id="create-cv" class="animated-section">
                            @register
                        </section>
                        <section data-id="login" class="animated-section">
                            @login
                        </section>
                    @endauth
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
        $(function() {
            //
        });

    </script>
</body>

</html>
