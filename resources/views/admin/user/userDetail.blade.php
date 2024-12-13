@extends('admin.layout')
@section('content')
    <main class="main" id="main">
        {{-- User Detail  --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">User Detail Page</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Users</li>
                    <li class="breadcrumb-item" aria-current="page">Normal Users List</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">User Detail</li>
                </ol>
            </nav>
        </div>

        <div class="card text-center mx-auto w-25" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-dark"><i class="fa-solid fa-user me-2"></i>{{ $user->name }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-envelope me-2"></i>{{ $user->email }}</li>
                <li class="list-group-item"><i class="fa-solid fa-circle-right me-2"></i>{{ $user->role }} </li>
                <li class="list-group-item"><i
                        class="fa-regular fa-calendar-days me-2"></i>{{ $user->created_at->format('j/F/Y') }}</li>
            </ul>
        </div>

    </main>
@endsection