@extends('admin.layout')
@section('content')


    <main class="main" id="main">
        {{-- Administrators List --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Administrators List - {{ $admins->total() }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Administrators</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Administrators List</li>
                </ol>
            </nav>
        </div>


        @if (count($admins) == 0)
            <h2 class="text-center mt-5">There is no <span class="text-danger">Administrators Data!</span></h2>
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
                        <th scope="col">Admin Name</th>
                        <th scope="col">Registered Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Admins list --}}
                    @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->created_at->format('j/F/Y') }}</td>
                            <td>
                                <a href="{{route('admin.adminRoute.detail',$admin->id)}}" title="Admin Detail">
                                    <button class="btn btn-success me-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </a>
                                @if (Auth::user()->id !== $admin->id)
                                <a href="{{route('admin.adminRoute.promoteToAdmin', $admin->id)}}" title="Demote The Admin to User">
                                    <button class="btn btn-warning me-2">
                                        <i class="fa-solid fa-person-arrow-up-from-line"></i>
                                    </button>
                                </a>
                                <a href="{{route('admin.adminRoute.delete', $admin->id)}}" title="Delete The Admin">
                                    <button class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        <div class="mt-5">
            {{ $admins->links() }}
        </div>

    @endsection
