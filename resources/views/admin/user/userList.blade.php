@extends('admin.layout')
@section('content')


    <main class="main" id="main">
        {{-- Users List --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Users List - {{ $users->total() }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Users</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Normal Users List</li>
                </ol>
            </nav>
        </div>


        @if (count($users) == 0)
            <h2 class="text-center mt-5">There is no <span class="text-danger">Users Data!</span></h2>
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
                        <th scope="col">User Name</th>
                        <th scope="col">Registered Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Users list --}}
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->created_at->format('j/F/Y') }}</td>
                            <td>
                                <a href="{{route('admin.user.detail',$user->id)}}" title="User Detail">
                                    <button class="btn btn-success me-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </a>
                                <a href="{{route('admin.user.promoteToAdmin', $user->id)}}" title="Promote The User to Admin">
                                    <button class="btn btn-warning me-2">
                                        <i class="fa-solid fa-person-arrow-up-from-line"></i>
                                    </button>
                                </a>
                                <a href="{{route('admin.user.delete', $user->id)}}" title="Delete The User">
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
            {{ $users->links() }}
        </div>

    @endsection
