@extends('layout.layout')
@section('content')
    <div class="hero-section">
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-mdb-ride="carousel"
            data-mdb-carousel-init>
            <div class="carousel-indicators">
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-mdb-target="#carouselExampleCrossfade" data-mdb-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero-items">
                        <div class="hero-content container">
                            <h2 class="hero-heading">
                                Education for Life,
                                Skills for Success
                            </h2>
                            <p class="hero-para">
                                To build a community of lifelong learners, fostering
                                creativity, critical thinking, and a passion for sustainable
                                growth, that transcends boundaries and transforms lives.
                            </p>
                            <a href="#" class="cus-btn hero-link">
                                <span class="text text-1 text-light">learn more</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class=" hero-item2">
                        <div class="hero-content container">
                            <h2 class="hero-heading">
                                Education for Life,
                                Skills for Success
                            </h2>
                            <p class="hero-para">
                                To build a community of lifelong learners, fostering
                                creativity, critical thinking, and a passion for sustainable
                                growth, that transcends boundaries and transforms lives.
                            </p>
                            <a href="#" class="cus-btn hero-link">
                                <span class="text text-1 text-light">learn more</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero-item3">
                        <div class="hero-content container">
                            <h2 class="hero-heading">
                                Education for Life,
                                Skills for Success
                            </h2>
                            <p class="hero-para">
                                To build a community of lifelong learners, fostering
                                creativity, critical thinking, and a passion for sustainable
                                growth, that transcends boundaries and transforms lives.
                            </p>
                            <a href="#" class="cus-btn hero-link">
                                <span class="text text-1 text-light">learn more</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCrossfade"
                data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCrossfade"
                data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- home section ends -->

    <!-- subjects section starts -->

    <section class="subjects container" id="programs">
        <h1 class="heading">current courses</h1>

        <div class="box-container">
            @foreach ($courses as $course)
                <a href="">
                    <div class="box">
                        <img src="{{ asset('storage/' . $course->image) }}" alt="" />
                        <h3>{{ $course->name }}</h3>
                    </div>
                </a>
            @endforeach

            {{-- <div class="box">
                <img src="images/subject-2.png" alt="" />
                <h3>Professional Skills Development for Immigrants</h3>
            </div>

            <div class="box">
                <img src="images/subject-3.png" alt="" />
                <h3>Computer Literacy & Applications</h3>
            </div>

            <div class="box">
                <img src="images/subject-4.png" alt="" />
                <h3>Online Business and Digital Marketing</h3>
            </div> --}}
        </div>
    </section>

    <!-- subject section ends -->

    <!-- teacher section starts -->

    <section class="teacher container" id="staff">
        <h1 class="heading">directors and advisors</h1>

        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h3>Sagheer Aslam, Ph.D</h3>
                    <span>Managing Director <br /></span>
                    <span>Contact: msagheeraslam@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>R.F Yousafxai</h3>
                    <span>Director Finance</span>
                    <span>Contact: director_finance@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Irshad Ali, Ph.D</h3>
                    <span>Director Student Affairs</span>
                    <span>Contact: irshad.uet@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Neharullah, Ph.D</h3>
                    <span>Director Academics</span>
                    <span>Contact: neharkhan@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Dr. H. Nabi</h3>
                    <span>Director IT</span>
                    <span>Contact: habibunnabi30@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Mr. Hazrat Hussain</h3>
                    <span>Director Administration</span>
                    <span>Contact: hhdir1ca@gmail.com</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Aina Shahid, M.P.A</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Khurshid Anwar Dost, D. Pharm</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Muhammad Adil, Ph.D</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Muhammad Ayub Rana, D. Pharm</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Prof. M.A Irfan Mufti, Ph.D</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Safdar Muhammad, Ph.D</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Salman Abideen, M.Des. SFI OcadU</h3>
                    <span>Advisor</span>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <h3>Sasha Omanovic, Ph.D</h3>
                    <span>Advisor</span>
                </div>
            </div>
        </div>
    </section>

    <!-- teacher section ends -->

    <!-- about section starts -->

    <section class="about container" id="about-bi">
        <h1 class="heading">about BI</h1>

        <div class="about-container">

            <p>
                Brantford Institute of Sustainable Education and Skills
                Development is located in the heart of the historic Bell
                City currently known as Brantford. The Institute is a
                beacon of purpose-driven education.
            </p>
            <p class="about-p">
                To build a distinctive community of lifelong learners by
                equipping individuals with future-ready skills that
                drive economic success and sustainable growth in an
                evolving job market, ensuring a prosperous and resilient
                society for generations to come.
            </p>
            <a href="#" class="cus-btn">
                <span class="text text-1">read more</span>
            </a>

        </div>
    </section>

    <!-- about section ends -->

    <!-- contact section starts -->

    <section class="contact container" id="contact">
        <h1 class="heading">contact us</h1>

        <div class="row">
            <div class="image">
                <img src="{{ asset('main/images/contact.png') }}" alt="" />
            </div>
            <form action="" class="round">
                <h3>Send us a Message</h3>
                <!-- <input type="text" placeholder="name" class="box">
                                            <input type="email" placeholder="email" class="box">
                                            <input type="number" placeholder="phone number" class="box">
                                            <textarea placeholder="message" class="box" cols="30" rows="10"></textarea> -->
                <a href="mailto:info@brantfordinstitute.ca" class="cus-btn">
                    <span class="text text-1">send message</span>
                </a>
            </form>
        </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section stars -->
@endsection
