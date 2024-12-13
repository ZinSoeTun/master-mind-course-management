@extends('admin.layout')
@section('content')
    <main class="main" id="main">
        {{-- Contact Detail  --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Contact Detail Page</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Contacts</li>
                    <li class="breadcrumb-item" aria-current="page">Contacts List</li>
                    <li class="breadcrumb-item active text-primary" aria-current="page">Contact Detail</li>
                </ol>
            </nav>
        </div>

        <div class="card text-center mx-auto w-25" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-dark"><i class="fa-solid fa-user me-2"></i>{{ $contact->name }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-envelope me-2"></i>{{ $contact->email }}</li>
                <li class="list-group-item"><i class="fa-solid fa-phone me-2"></i>{{ $contact->phone }} </li>
                <li class="list-group-item"><i class="fa-solid fa-message me-2"></i>{{ $contact->message }} </li>
                <li class="list-group-item"><i
                        class="fa-regular fa-calendar-days me-2"></i>{{ $contact->created_at->format('j/F/Y') }}</li>
            </ul>
        </div>

    </main>
@endsection
