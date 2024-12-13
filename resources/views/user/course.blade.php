@extends('user.layout')
@section('content')
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">All Courses</h1>
            </div>
             {{--  success message --}}
            <div class="col-lg-6 offset-lg-3">
                <div style="width: 500px;" class="text-success mx-2 mx-auto">
                    @if (session('success'))
                        <div class="alert alert-primary bg-success text-center  text-dark alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                {{--  error message --}}
                <div style="width: 500px;" class="text-success mx-2 mx-auto">
                    @if (session('error'))
                        <div style="color: white" class="alert alert-ligh bg-danger text-center alert-dismissible fade show" role="alert">
                           <strong>{{ session('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @forelse ($courses as $course)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light h-100 d-flex flex-column">
                            <div class="position-relative overflow-hidden" style="height: 200px;">
                                <img class="img-fluid w-100 h-100" src="{{ asset('storage/course/' . $course->image) }}"
                                    alt="Course Image for {{ $course->name }}" style="object-fit: cover;">
                                    @if (Auth::user())
                                    @if (Auth::user()->role !== 'admin')
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                       <a href="{{route('join.course', $course->id)}}" class="btn btn-sm btn-primary px-3"
                                           style="border-radius: 0 30px 0 30px;">Join Now</a>
                                   </div>
                                    @endif
                                    @endif
                            </div>
                            <div class="text-center p-4 pb-0 flex-grow-1">
                                <h3 class="mb-0">${{ $course->price }}</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(123)</small>
                                </div>
                                <h5 class="mb-4">{{ $course->name }}</h5>
                                <p class="mb-4">{{ $course->description }}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>
                                        @php
                                            $randomName = collect([
                                                'Mr. Michael Johnson',
                                                'Dr. Emily Carter',
                                                'Mr. David Ahmed',
                                                'Ms. Sophia Lee',
                                            ])->random();
                                        @endphp
                                    {{ $randomName }}
                                </small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>{{ $course->duration }} Hrs</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-user text-primary me-2"></i>{{ $course->students_count }}
                                    Students</small>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">No courses available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{ $courses->links() }}
@endsection
