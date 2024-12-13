@extends('admin.layout')
@section('content')
    <main class="main" id="main">
        {{-- Course Detil  --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Course Detil Page</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Courses</li>
                    <li class="breadcrumb-item" aria-current="page">Course List</li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">Course Detail</li>
                </ol>
            </nav>
        </div>

        <div class="card text-center mx-auto w-25" style="width: 18rem; background-color:rgba(246, 240, 240, 0.14)">
                <div class="text-center mt-4 img-fluid">
                    <img src="{{ asset('storage/course/' . $course->image) }}" alt="image" width="150" height="150">
                </div>
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-heading me-2"></i>{{ $course->name }}</h5>
            </div>
            <div class="card-body">
                <h5 class="card-title"><i class="fa-brands fa-squarespace me-2"></i>{{ $cateName }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-regular fa-money-bill-1 me-2"></i>${{ $course->price }}</li>
                <li class="list-group-item"><i class="fa-solid fa-hourglass-start  me-2"></i>{{ $course->duration }} hr</li>
                <li class="list-group-item">{{ $course->description }}</li>
                <li class="list-group-item"><i
                        class="fa-regular fa-calendar-days me-2"></i>{{ $course->created_at->format('j/F/Y') }}</li>
            </ul>
        </div>





    </main>
@endsection
