<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Brantford Institute')</title>
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <!-- custom css link -->
    <link rel="stylesheet" href="{{ asset('main/css/phone.css') }}">

</head>

<body>
    <!-- header section starts -->

    <header class="header">
        <div class="logo_banner">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('main/images/logo-transparent.png') }}" alt="" />
            </a>
        </div>
        <nav class="navbar-custom d-flex justify-content-center align-items-center shadow-0">
            <div class="navbar-item">
                <a href="{{ route('home') }}" class="hover-underline  navbar-link">home</a>
            </div>

            <div class="navbar-item">
                <a class="hover-underline navbar-link">career courses </a>
                <div class="career-mega-menu">
                    <div class="container mega-container">
                        <div class="career-courses">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($categories as $data)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $data->id }}">
                                            <button data-mdb-collapse-init
                                                class="navbar-link accordion-button collapsed" type="button"
                                                data-mdb-target="#flush-collapse{{ $data->id }}"
                                                aria-expanded="false" aria-controls="flush-collapse{{ $data->id }}">
                                                {{ $data->name }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $data->id }}"
                                            class="navbar-link accordion-collapse collapse"
                                            aria-labelledby="flush-heading{{ $data->id }}"
                                            data-mdb-parent="#accordionFlushExample">
                                            <div class="accordion-body d-flex flex-column">
                                                @foreach ($data->courses as $course)
                                                    <a href="{{ route('singlecourse', $course->id) }}"
                                                        class="navbar-link acc-link">{{ $course->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    {{-- <div class="container mega-container">
                        <div class="career-courses">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Career Development & Professional Skills
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="courses.html" class="navbar-link acc-link">Career Development &
                                                Professional
                                                Skills</a>
                                            <a href="" class="navbar-link acc-link">Career Counseling</a>
                                            <a href="" class="navbar-link acc-link">Professional Skills
                                                Development for
                                                Immigrants</a>
                                            <a href="" class="navbar-link acc-link">Mental Health Insights and
                                                Strategies</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Business & Entrepreneurship
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Business &
                                                Entrepreneurship</a>
                                            <a href="" class="navbar-link acc-link">Industrial Management
                                                Techniques</a>
                                            <a href="" class="navbar-link acc-link">nnovative Business &
                                                Entrepreneurship</a>
                                            <a href="" class="navbar-link acc-link">Online Business and Digital
                                                Marketing</a>
                                            <a href="" class="navbar-link acc-link">TikTok MarketPro (Commerce
                                                Connect)</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            Technology & Computer Skills
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Technology & Computer
                                                Skills</a>
                                            <a href="" class="navbar-link acc-link">Computer Literacy &
                                                Applications</a>
                                            <a href="" class="navbar-link acc-link">Data Analytics in Health
                                                Sciences</a>
                                            <a href="" class="navbar-link acc-link">Office 365 Specialist</a>
                                            <a href="" class="navbar-link acc-link">Computer Programming</a>
                                            <a href="" class="navbar-link acc-link">Computer Training and
                                                Repair</a>
                                            <a href="" class="navbar-link acc-link">Drafting with AutoCad</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            Languages and Communications
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Languages and
                                                Communications</a>
                                            <a href="" class="navbar-link acc-link">English as a Secondary
                                                Language</a>
                                            <a href="" class="navbar-link acc-link">Fundamental of English
                                                Language</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            Counselling and Education
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Counselling and
                                                Education</a>
                                            <a href="" class="navbar-link acc-link">High School Program</a>
                                            <a href="" class="navbar-link acc-link">Elementary</a>
                                            <a href="" class="navbar-link acc-link">College and University</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseSix" aria-expanded="false"
                                            aria-controls="flush-collapseSix">
                                            Health & Safety
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">asdfasdfasdf</a>
                                            <a href="" class="navbar-link acc-link">Food Handling and
                                                Safety</a>
                                            <a href="" class="navbar-link acc-link">Safety & Health Risk
                                                Management</a>
                                            <a href="" class="navbar-link acc-link">Medical Aesthetics</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Finance & Accounting
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Finance & Accounting</a>
                                            <a href="" class="navbar-link acc-link">Fundamentals of Accounting
                                                and
                                                Bookkeeping</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingEight">
                                        <button data-mdb-collapse-init class=" navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseEight"
                                            aria-expanded="false" aria-controls="flush-collapseEight">
                                            Sustainability & Development
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEight" class="navbar-link accordion-collapse collapse"
                                        aria-labelledby="flush-headingEight" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Foundations of
                                                Sustainability &
                                                Skills
                                                Development</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Accordion Item #9 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingNine">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseNine"
                                            aria-expanded="false" aria-controls="flush-collapseNine">
                                            Vocational Trades
                                        </button>
                                    </h2>
                                    <div id="flush-collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingNine" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column   ">
                                            <a href="" class="navbar-link acc-link">Vocational Trades</a>
                                            <a href="" class="navbar-link acc-link">Pet Grooming and Care</a>
                                            <a href="" class="navbar-link acc-link">Cat care Specialist</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTen">
                                        <button data-mdb-collapse-init class="navbar-link accordion-button collapsed"
                                            type="button" data-mdb-target="#flush-collapseTen" aria-expanded="false"
                                            aria-controls="flush-collapseTen">
                                            Creative Career
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTen" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTen" data-mdb-parent="#accordionFlushExample">
                                        <div class="accordion-body d-flex flex-column">
                                            <a href="" class="navbar-link acc-link">Creative Career</a>
                                            <a href="" class="navbar-link acc-link">Photography</a>
                                            <a href="" class="navbar-link acc-link">Creative Writing</a>
                                            <a href="" class="navbar-link acc-link">Research Methodology and
                                                writing
                                                Skills</a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}
                </div>

            </div>
            </div>
            <div class="navbar-item">
                <a href="#staff" class="hover-underline navbar-link">BI Team</a>
            </div>
            <div class="navbar-item">
                <a href="#about-bi" class="hover-underline navbar-link">about bI</a>
            </div>
            <div class="navbar-item">
                <a href="#" class="hover-underline navbar-link">student portal</a>
            </div>
            <div class="navbar-item">
                <a href="#contact" class="hover-underline navbar-link">contact</a>
            </div>
        </nav>
        <!-- =========================== accordion sections ====================== -->
        <!-- ======================================================================= -->

        <!-- ======================================================================= -->
        <!-- ======================================================================= -->
        <div class="icons">
            @guest
                <a href="{{ route('login') }}" id="login-btn" class="fas fa-user dashboard-icon"></a>
            @endguest
            @auth
                <div class="d-flex justify-content-center align-items-center gap-5">
                    <a href="{{ route('dashboard') }}" class="fas fa-user-cog dashboard-icon"></a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="fas fa-sign-out-alt dashboard-icon"></button>
                    </form>
                </div>
            @endauth
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>

        <!-- login form -->

        {{-- <form action="{{ route('login') }}" method="POST" class="login-form">
            @csrf
            <h3>login form</h3>
            <input type="email" name="email" placeholder="enter your email" class="box" />
            <input type="password" name="password" placeholder="enter your password" class="box" />
            <div class="remember">
                <input type="checkbox" name="remember" id="remember" />
                <label for="remember-me">remember me</label>
            </div>
            <button type="submit" class="cus-btn">
                <span class="text text-1">login now</span>
            </button>
        </form> --}}
    </header>

    <!-- header section ends -->

    <!-- home section starts-->

    <!-- <section class="home" id="home">
        <div class="content">
            <h3>
                Education for Life, <br />
                Skills for Success
            </h3>
            <p>
                To build a community of lifelong learners, fostering
                creativity, critical thinking, and a passion for sustainable
                growth, that transcends boundaries and transforms lives.
            </p>
            <a href="#" class="btn">
                <span class="text text-1">learn more</span>
            </a>
        </div>
    </section> -->
    @yield('content')

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <div class="logo_banner-footer">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('main/images//logo-transparent.png') }}" alt="" />
                    </a>
                </div>
                <div class="share">
                    <a href="#" class="fab fa-snapchat-ghost"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-x-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-tiktok"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact us</h3>
                <a href="mailto:info@brantfordinstitute.ca" class="link">info@brantfordinstitute.ca</a>
            </div>

            <div class="box">
                <h3>location</h3>
                <p>
                    48 Colborne Street East, Brantford<br />
                    ON, N3T 2G2 <br />
                    Canada
                </p>
            </div>
        </div>

        <div class="credit">
            Copyright © 2024 Brantford Skills Inc.
            <img style="width: 20px" src="{{ asset('images/image.png') }}" />| All rights
            reserved
        </div>
    </section>
    <!-- footer section ends -->

    <!-- scroll top button -->
    <button class="scroll-top">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>
