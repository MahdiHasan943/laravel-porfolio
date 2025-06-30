@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<!-- Contact Section -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="display-5 mb-4">Get In Touch</h2>
                <p class="lead mb-4">Have a project in mind or want to discuss potential collaboration? Feel free to reach out!</p>

                <div class="mb-4">
                    <h5 class="mb-3">Contact Information</h5>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <span>Tongi, Gazipur, Bangladesh</span>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <a href="mailto:mahdihasan038@gmail.com">mahdihasan038@gmail.com</a>
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <a href="tel:+8801843412068">01843-412068</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h5 class="mb-3">Follow Me</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com/mahdi.tuhin.7/" class="text-decoration-none me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://www.linkedin.com/in/mahdi-hasan-949b80239/" class="text-decoration-none me-3"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="https://github.com/MahdiHasan943" class="text-decoration-none"><i class="fab fa-github fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">Send Me a Message</h5>
                        <form id="contactForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-0">
    <div class="container-fluid px-0">
        <div class="ratio ratio-21x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.729643285504!2d90.39505487431654!3d23.75675328879232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5c8cf5a295f%3A0x3b37934b0a08aa15!2sTongi%2C%20Gazipur!5e0!3m2!1sen!2sbd!4v1719834137733!5m2!1sen!2sbd"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
