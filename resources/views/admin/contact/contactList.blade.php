@extends('admin.layout')
@section('content')


    <main class="main" id="main">
        {{-- Contacts List --}}
        <div class="pagetitle">
            <h1 class="text-center text-primary">Contacts List - {{ $contacts->total() }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page">Contacts</li>
                    <li class="breadcrumb-item text-primary" aria-current="page">Contacts List</li>
                </ol>
            </nav>
        </div>


        @if (count($contacts) == 0)
            <h2 class="text-center mt-5">There is no <span class="text-danger">Contacts Data!</span></h2>
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
                        <th scope="col">Sent Date</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contacts list --}}
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->created_at->format('j/F/Y') }}</td>
                            <td>
                                <a href="{{route('contact.detail', $contact->id)}}" title="Contact Detail">
                                    <button class="btn btn-success me-2">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </button>
                                </a>
                                <a href="{{route('contact.delete', $contact->id)}}" title="Delete The Contact">
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
            {{ $contacts->links() }}
        </div>

    @endsection
