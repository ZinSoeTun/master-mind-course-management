@extends('admin.layout')
@section('content')


    <main class="main" id="main">
        {{-- Course List --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Courses List - {{ $courses->total() }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Courses</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Courses List</li>
                </ol>
            </nav>
        </div>


        @if (count($courses) == 0)
            <h2 class="text-center mt-5">There is no <span class="text-danger">Course Data!</span></h2>
        @else
        <div style="width: 500px;" class="text-success mx-2 mx-auto">
            @if (session('success'))
                <div class="alert alert-primary bg-success text-center  text-dark alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check me-3"></i><strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Course Name</th>
                        <th scope="col">Created Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Course list --}}
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->created_at->format('j/F/Y') }}</td>
                            <td>
                                <a href="{{route('course.detail',$course->id)}}" title="Course Detail">
                                    <button class="btn btn-success me-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </a>
                                <a href="{{route('course.updatePage',$course->id)}}" title="Edit The Course">
                                    <button class="btn btn-warning me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <a href="{{route('course.delete',$course->id)}}" title="Delete The Course">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="mt-5">
            {{ $courses->links() }}
        </div>

    @endsection
