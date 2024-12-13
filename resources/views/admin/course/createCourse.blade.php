@extends('admin.layout')
@section('content')

<main id="main" class="main">
    {{-- Create Course --}}
    <div class="pagetitle">
        <h1 class="text-center mt-5 text-primary">Create Course</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Courses</li>
                <li class="breadcrumb-item text-primary" aria-current="page" >Create Course</li>
            </ol>
        </nav>
    </div>
    {{-- Course create success message --}}
    <div class="col-lg-6 offset-lg-3">
        <div style="width: 500px;" class="text-success mx-2 mx-auto">
            @if (session('success'))
                <div class="alert alert-primary bg-success text-center  text-dark alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check me-3"></i><strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        {{--  error message --}}
        <div style="width: 500px;" class="text-success mx-2 mx-auto">
            @if (session('error'))
                <div style="color: white" class="alert alert-light bg-danger text-center alert-dismissible fade show" role="alert">
                    <i class=" bg-danger fa-solid fa-circle-exclamation me-3"></i><strong>{{ session('error') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>
    {{-- Course create card --}}
    <div class="container-fluid my-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    {{-- horizontal line --}}
                    <br>
                    {{-- course form --}}
                    <form action="{{route('course.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- course name --}}
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Course Name:</label>
                            <input type="text" name="courseName"
                                class="form-control @error('courseName')  is-invalid @enderror"
                                placeholder="course name" value="{{old('courseName')}}">
                            @error('courseName')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- related course category --}}
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Category:</label>
                            <select class="form-select @error('categoryId')  is-invalid @enderror"
                                aria-label="Default select example" name="categoryId">
                                <option value="">Choose Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('categoryId')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                         {{-- course price --}}
                         <div class="form-group mb-3">
                            <label for="" class="form-label">Course Price:</label>
                            <input type="text" name="coursePrice"
                                class="form-control @error('coursePrice')  is-invalid @enderror"
                                placeholder="course price" value="{{old('coursePrice')}}">
                            @error('coursePrice')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                         {{-- course duration --}}
                         <div class="form-group mb-3">
                            <label for="" class="form-label">Course Duration:</label>
                            <input type="text" name="courseDuration"
                                class="form-control @error('courseDuration')  is-invalid @enderror"
                                placeholder="course duration" value="{{old('courseDuration')}}">
                            @error('courseDuration')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                         {{-- course description --}}
                         <div class="form-group mb-3">
                            <label for="" class="form-label">Course Description:</label>
                            <input type="text" name="courseDescription"
                                class="form-control @error('courseDescription')  is-invalid @enderror"
                                placeholder="course description" value="{{old('courseDescription')}}">
                            @error('courseDescription')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                           {{-- course image --}}
                           <div class="form-group mb-3">
                            <label for="" class="form-label">Course Image:</label>
                            <input type="file" name="courseImage"
                                class="form-control @error('courseImage')  is-invalid @enderror">
                            @error('courseImage')
                                <div class="text-danger">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        {{-- button for card --}}
                        <div class="text-center">
                            <input type="submit" value="create" class="btn btn-success px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
