@extends('user.layout')
@section('content')

       <!-- Carousel Start -->
       <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('User/img/carousel-1.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Empowering Minds, One Course at a
                                    Time</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Discover a world of learning at your fingertips. From mastering new skills to
                                    advancing your career, our platform offers engaging, high-quality courses tailored
                                    to help you achieve your goals. Start your journey today and transform your future!
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get
                                    Started</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('User/img/carousel-2.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown">Your Path to Lifelong Learning
                                    Starts Here</h1>
                                <p class="fs-5 text-white mb-4 pb-2">
                                    Unlock your full potential with our diverse range of courses designed for learners
                                    of all ages and backgrounds. Whether you're starting from scratch or sharpening
                                    existing skills, we provide the tools, resources, and support you need to succeed.
                                </p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get
                                    Started</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 d-flex align-items-stretch">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Skilled Instructors</h5>
                            <p class="mb-auto">
                                Learn from industry-leading experts who bring years of experience and knowledge to each
                                course. Our skilled instructors are dedicated to your growth and success.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p class="mb-auto">
                                Enjoy the flexibility of learning from anywhere with our interactive online classes.
                                Designed to fit your schedule, you can learn at your own pace.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p class="mb-auto">
                                Put theory into practice with engaging home projects tailored to each course. Build
                                real-world skills and showcase your achievements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3 h-100">
                        <div class="p-4 d-flex flex-column">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p class="mb-auto">
                                Access an extensive digital library filled with resources, study materials, and e-books
                                to deepen your understanding and enhance your learning experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection
