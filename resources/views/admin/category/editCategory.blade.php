@extends('admin.layout')
@section('content')

<main id="main" class="main">
    {{-- Create Category --}}
    <div class="pagetitle">
        <h1 class="text-center mt-5 text-primary">Update Category</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Categories</li>
                <li class="breadcrumb-item text-primary" aria-current="page" >Update Category</li>
            </ol>
        </nav>
    </div>
    {{-- Category update success message --}}
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
    {{-- Category update card --}}
    <div class="container-fluid my-5">
        <div class="col-lg-6 offset-lg-3">
            <div class="card">
                <div class="card-body">
                    {{-- horizontal line --}}
                    <br>
                    {{-- category form --}}
                    <form action="{{route('category.update',$category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        {{-- category name --}}
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Category Name:</label>
                            <input type="text" name="categoryName"
                                class="form-control @error('categoryName')  is-invalid @enderror"
                                placeholder="category name" value="{{old('categoryName', $category->name)}}">
                            @error('categoryName')
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
