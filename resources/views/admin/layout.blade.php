<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Master Mind</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('Admin/img/Master_Mind__1_-removebg-preview.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />



    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{route('home')}}" class="navbar-brand mx-4 mb-3">
                    <img src="{{ asset('Admin/img/Master_Mind__1_-removebg-preview.png') }}" alt=""
                        width="70">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('Admin/img/No_Image_Available.jpg')}}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                        <span>{{Auth::user()->role}}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <!-- Dashboard -->
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>

                    <!-- Categories Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('category.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-layer-group me-2"></i>Categories
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('category.page') }}" class="dropdown-item">
                                <i class="fa-solid fa-plus me-2"></i>Create Category
                            </a>
                            <a href="{{ route('category.list') }}" class="dropdown-item">
                                <i class="fa-solid fa-list me-2"></i>Categories List
                            </a>
                        </div>
                    </div>

                    <!-- Courses Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('course.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-layer-group me-2"></i>Courses
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('course.page') }}" class="dropdown-item">
                                <i class="fa-solid fa-plus me-2"></i>Create Course
                            </a>
                            <a href="{{ route('course.list') }}" class="dropdown-item">
                                <i class="fa-solid fa-list me-2"></i>Courses List
                            </a>
                        </div>
                    </div>

                    <!-- Users Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('admin.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-user me-2"></i>Users
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.user.list')}}" class="dropdown-item">
                                <i class="fa-solid fa-list me-2"></i>Normal Users List
                            </a>
                            <a href="{{route('admin.adminRoute.list')}}" class="dropdown-item">
                                <i class="fa-solid fa-list me-2"></i>Administrators List
                            </a>
                        </div>
                    </div>

                    <!-- Contacts Dropdown -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('contact.*') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-address-book me-2"></i>Contacts
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('contact.list')}}" class="dropdown-item">
                                <i class="fa-solid fa-list me-2"></i>Contacts List
                            </a>
                        </div>
                    </div>
                </div>

        </div>
        </nav>
    </div>
    <!-- Sidebar End -->


    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="{{route('home')}}" class="navbar-brand d-flex d-lg-none me-4">
                <img src="{{ asset('Admin/img/Master_Mind__1_-removebg-preview.png') }}" alt=""
                    width="70">
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                          @foreach (\App\Models\Contact::get() as $contact )
                          <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="{{asset('Admin/img/No_Image_Available.jpg')}}" alt=""
                                    style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">{{$contact->name}} send a message to admin team</h6>
                                    <small>{{ $contact->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                          @endforeach
                        <hr class="dropdown-divider">
                        <a href="{{route('contact.list')}}" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="{{asset('Admin/img/No_Image_Available.jpg')}}" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="{{route('profile.show')}}" class="dropdown-item">My Profile</a>
                        <form action="{{ route('logout') }}" method="post" class="ms-3">
                            @csrf
                            <button type="submit" class="btn btn-primary py-1 px-2">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->



        @yield('content')



        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; All Right Reserved By Master Mind
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('Admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('Admin/js/main.js') }}"></script>
</body>

</html>
