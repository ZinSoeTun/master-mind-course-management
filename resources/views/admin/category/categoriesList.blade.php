@extends('admin.layout')
@section('content')


    <main class="main" id="main">
        {{-- Category List --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Categories List - {{ $categories->total() }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Categories</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Categories List</li>
                </ol>
            </nav>
        </div>


        @if (count($categories) == 0)
            <h2 class="text-center mt-5">There is no <span class="text-danger">Category Data!</span></h2>
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
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Created Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Category list --}}
                    @foreach ($categories as $category)
                        <tr>
                            <th>{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at->format('j/F/Y') }}</td>
                            <td>
                                <a href="{{ route('category.updatePage', $category->id) }}" title="Edit The Category">
                                    <button class="btn btn-warning me-2">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <a href="{{ route('category.delete', $category->id) }}" title="Delete The Category">
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
            {{ $categories->links() }}
        </div>

    @endsection
