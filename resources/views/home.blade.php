@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <header class="hero-section bg-dark" style="min-height: 70vh;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white fw-bold">Hi, I'm Mahdi Hasan</h1>
                    <p class="lead text-white">Front-End & WordPress Developer | Clean & Responsive Websites</p>
                    <a href="{{ route('portfolio') }}" class="btn btn-primary btn-lg mt-3">View My Work</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Work -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Work</h2>
            <div class="row">
                @foreach ($featuredWorks as $featuredWork)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <img src="{{ asset($featuredWork['image']) }}" class="card-img-top" alt="{{ $featuredWork['title'] }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $featuredWork['title'] }}</h5>
                                <p class="card-text flex-grow-1">{{ $featuredWork['short_description'] }}</p>
                                <a href="{{ route('portfolio') }}" class="btn btn-outline-primary mt-auto">View Project</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
