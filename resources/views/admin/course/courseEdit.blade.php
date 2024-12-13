@extends('admin.layout')
@section('content')

<main id="main" class="main">
    {{-- Update Course --}}
    <div class="pagetitle">
        <h1 class="text-center mt-5 text-primary">Update Course</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Courses</li>
                <li class="breadcrumb-item" aria-current="page">Courses List</li>
                <li class="breadcrumb-item text-primary" aria-current="page" >Update Course</li>
            </ol>
        </nav>
    </div>
    {{-- Course update success message --}}
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
    {{-- Course update card --}}
    <div class="container-fluid my-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    {{-- horizontal line --}}
                    <br>
                    {{-- course form --}}
                    <form action="{{route('course.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        {{-- course name --}}
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Course Name:</label>
                            <input type="text" name="courseName"
                                class="form-control @error('courseName')  is-invalid @enderror"
                                placeholder="course name" value="{{old('courseName',$course->name)}}">
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
                                    <option value="{{ $category->id }}" {{$category->id == $course->category_id ? 'selected' : ''}}>
                                        {{ $category->name }}</option>
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
                                placeholder="course price" value="{{old('coursePrice',$course->price)}}">
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
                                placeholder="course duration" value="{{old('courseDuration', $course->duration)}}">
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
                                placeholder="course description" value="{{old('courseDescription', $course->description)}}">
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
                            <input type="submit" value="update" class="btn btn-success px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
