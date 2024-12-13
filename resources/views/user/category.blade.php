@extends('user.layout')
@section('content')
    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>

            <div class="row g-4">
                @forelse ($categories as $category)
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                        <a href="">
                            <button class="btn btn-primary w-100 rounded">{{ $category->name }}</button>
                        </a>
                    </div>
                @empty
                    <p class="text-center">No categories available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>

    {{ $categories->links() }}

@endsection
