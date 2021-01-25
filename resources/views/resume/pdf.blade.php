<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="{{ asset('resume/css/css2.css') }}" />
    <link rel="stylesheet" href="{{ asset('resume/css/css2.css') }}" media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('resume/css/css2.css') }}" />
    </noscript>
    <link href="{{ asset('resume/css/font-awesome/css/all.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/bootstrap.min.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/aos.css?ver=1.2.0') }}" rel="stylesheet">
    <link href="{{ asset('resume/css/main.css?ver=1.2.0') }}" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }

        </style>
    </noscript>
</head>

<body id="top">
    <header class="d-print-none">
        <div class="container text-center text-lg-left">
            <div class="py-3 clearfix">
                <h1 class="site-title mb-0">
                    <a href="{{ route('home') }}" class="btn btn-primary">Back</a>
                </h1>
                {{-- <div class="site-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                    title="Twitter"><i class="fab fa-twitter"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip"
                                    title="Facebook"><i class="fab fa-facebook"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip"
                                    title="Instagram"><i class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </header>
    <div class="page-content">
        <div class="container">
            <div class="cover shadow-lg bg-white">
                <div class="cover-bg p-3 p-lg-4 text-white">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="avatar hover-effect bg-white shadow-sm p-1">
                                @if (auth()->user()->image)
                                    <img src="{{ asset('storage/pics/' . Auth::user()->image) }}"
                                        alt="{{ Auth::user()->name }}" width="200" height="200">
                                @else
                                    <img src="{{ asset('img/main_photo.jpg') }}" width="200" height="200" />
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 text-center text-md-start">
                            <h2 class="h1 mt-2" data-aos="fade-left" data-aos-delay="0">{{ auth()->user()->name }}</h2>
                            <p data-aos="fade-left" data-aos-delay="100">{{ Auth::user()->title }}</p>
                            <div class="d-print-none" data-aos="fade-left" data-aos-delay="200">
                                {{-- <a
                                    class="btn btn-light text-dark shadow-sm mt-1 me-1"
                                    href="{{ route('getPDF', auth()->user()->id) }}" target="_blank">Download CV</a>
                                <a class="btn btn-success shadow-sm mt-1" href="#contact">Hire Me</a>
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-section pt-4 px-3 px-lg-4 mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="h3 mb-3">About Me</h2>
                            <p>
                                {{ Auth::user()->about }}
                            </p>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <div class="row mt-2">
                                <div class="col-sm-4">
                                    <div class="pb-1">Age</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">
                                        {{ \Carbon\Carbon::now()->year - substr(Auth::user()->dateofbirth, 0, 4) }}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Email</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Phone</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">
                                        62{{ Auth::user()->phone }}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="pb-1">Address</div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="pb-1 text-secondary">
                                        {{ Auth::user()->address }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="d-print-none" />
                @foreach ($users as $user)
                    <div class="work-experience-section px-3 px-lg-4">
                        <h2 class="h3 mb-4">Experience</h2>
                        @foreach ($user->experiences as $experience)
                            <div class="timeline">
                                <div class="timeline-card timeline-card-primary card shadow-sm">
                                    <div class="card-body">
                                        <div class="h5 mb-1">
                                            {{ $experience->exp_title }}
                                            <span class="text-muted h6">at {{ $experience->company }}</span>
                                        </div>
                                        <div class="text-muted text-small mb-2">
                                            {{ substr($experience->from_date, 0, 4) }} -
                                            {{ substr($experience->to_date, 0, 4) }}
                                        </div>
                                        <div>
                                            {{ $experience->exp_description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <hr class="d-print-none" />
                    {{-- <div class="page-break"></div> --}}
                    <div class="education-section px-3 px-lg-4 pb-4">
                        <h2 class="h3 mb-4">Education</h2>
                        @foreach ($user->educations as $education)
                            <div class="timeline">
                                <div class="timeline-card timeline-card-success card shadow-sm">
                                    <div class="card-body">
                                        <div class="h5 mb-1">{{ $education->major }}
                                            <span class="text-muted h6">
                                                {{ $education->institution }}
                                            </span>
                                        </div>
                                        <div class="text-muted text-small mb-2">
                                            {{ substr($education->date, 0, 4) }}
                                        </div>
                                        <div>
                                            {{ $education->edu_description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
        <div class="container">
            <div class="my-3">
                <div class="h4">{{ Auth::user()->name }}</div>
                {{-- <div class="footer-nav">
                    <nav role="navigation">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/templateflip"
                                    title="Twitter"><i class="fab fa-twitter"></i><span
                                        class="menu-title sr-only">Twitter</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/templateflip"
                                    title="Facebook"><i class="fab fa-facebook"></i><span
                                        class="menu-title sr-only">Facebook</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip"
                                    title="Instagram"><i class="fab fa-instagram"></i><span
                                        class="menu-title sr-only">Instagram</span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://github.com/templateflip"
                                    title="Github"><i class="fab fa-github"></i><span
                                        class="menu-title sr-only">Github</span></a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </footer>
    <script src="{{ asset('resume/scripts/bootstrap.bundle.min.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('resume/scripts/aos.js?ver=1.2.0') }}"></script>
    <script src="{{ asset('resume/scripts/main.js?ver=1.2.0') }}"></script>
</body>

</html>
