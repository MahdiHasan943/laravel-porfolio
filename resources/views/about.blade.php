@extends('layouts.app')
@section('title', 'About')

@section('content')
    <!-- About Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="Mahdi Hasan" class="img-fluid rounded-circle shadow" style="max-width: 250px;">
                </div>
                <div class="col-lg-7">
                    <h2 class="display-5 mb-4">About Me</h2>
                    <p class="lead">I'm Mahdi Hasan, a passionate Front-End & WordPress developer with over 3 years of experience building clean, modern, and responsive websites.</p>
                    <p>My journey began with HTML, CSS, and JavaScript, and I've since expanded my skillset into WordPress development using Elementor and Breakdance, as well as Next.js and Tailwind CSS for modern web apps.</p>
                    <p>I pride myself on delivering pixel-perfect designs with a strong focus on user experience, performance, and SEO optimization.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Name:</strong> Mahdi Hasan</li>
                                <li class="mb-2"><strong>Email:</strong> mahdihasan038@gmail.com</li>
                                <li class="mb-2"><strong>Phone:</strong> +8801843412068</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Experience:</strong> 3+ Years</li>
                                <li class="mb-2"><strong>Location:</strong> Tongi, Gazipur</li>
                                <li class="mb-2"><strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-primary mt-3">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Skills</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5>HTML5</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 95%;">95%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>CSS3</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>JavaScript</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 85%;">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Bootstrap</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>WordPress & Elementor</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 90%;">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Next.js & Tailwind CSS</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 85%;">85%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
