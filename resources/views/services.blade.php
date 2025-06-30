@extends('layouts.app')
@section('title', 'Services')

@section('content')
    <!-- Services Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5">My Services</h2>
                <p class="lead">I offer professional web development and design services to help your business grow online.</p>
            </div>
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-code fa-lg"></i>
                            </div>
                            <h5 class="card-title">Custom WordPress Development</h5>
                            <p class="card-text">Building tailored WordPress websites using Elementor and Breakdance for easy management and stunning design.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Responsive Layouts</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Custom Plugins & Integrations</li>
                                <li><i class="fas fa-check text-primary me-2"></i> WooCommerce Store Setup</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-paint-brush fa-lg"></i>
                            </div>
                            <h5 class="card-title">Front-End Development</h5>
                            <p class="card-text">Crafting clean, modern, and user-friendly websites using HTML5, CSS3, JavaScript, Bootstrap, and Tailwind CSS.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Pixel-Perfect Designs</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Cross-Browser Compatibility</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Responsive & Mobile-First</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-mobile-alt fa-lg"></i>
                            </div>
                            <h5 class="card-title">Next.js & React Development</h5>
                            <p class="card-text">Building fast and SEO-friendly React applications using Next.js and modern JavaScript best practices.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Server-Side Rendering</li>
                                <li><i class="fas fa-check text-primary me-2"></i> API Integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i> State Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-shopping-cart fa-lg"></i>
                            </div>
                            <h5 class="card-title">E-commerce Website Development</h5>
                            <p class="card-text">Creating secure and scalable online stores with WooCommerce and custom integrations for seamless shopping experiences.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Payment Gateway Setup</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Product Management</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Inventory Tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-tools fa-lg"></i>
                            </div>
                            <h5 class="card-title">Website Maintenance & Support</h5>
                            <p class="card-text">Providing ongoing support, updates, backups, and performance optimization to keep your site running smoothly.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Security Updates</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Speed Optimization</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Backup & Recovery</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-4" style="width: 60px; height: 60px; line-height: 60px;">
                                <i class="fas fa-tools fa-lg"></i>
                            </div>
                            <h5 class="card-title">Fiverr HVAC Service Website</h5>
                            <p class="card-text">Specialized in creating HVAC service websites on Fiverr that drive leads and provide clear service info.</p>
                            <ul class="list-unstyled text-start">
                                <li><i class="fas fa-check text-primary me-2"></i> Custom Design</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Lead Generation Focused</li>
                                <li><i class="fas fa-check text-primary me-2"></i> Quick Delivery</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Client Testimonials</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <!-- Demo Review for Fiverr HVAC Service -->
                            <div class="carousel-item active">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">
                                            "Mahdi delivered an excellent HVAC service website on Fiverr. The site was professional, easy to navigate, and the communication was prompt throughout the project. My client saw an increase in leads within weeks!"
                                        </p>
                                        <h5 class="mb-1">David Thompson</h5>
                                        <p class="text-muted">HVAC Business Owner</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/45.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">
                                            "Working with Mahdi on our mobile app was a great experience. He delivered on time and within budget. User engagement increased by 40%!"
                                        </p>
                                        <h5 class="mb-1">Michael Chen</h5>
                                        <p class="text-muted">Founder, AppVenture</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="card border-0 bg-white shadow-sm">
                                    <div class="card-body p-4 text-center">
                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle mb-3" width="80" alt="Client">
                                        <p class="lead mb-4">
                                            "Mahdi's SEO expertise helped our business rank on Google's first page. Traffic tripled and leads improved dramatically."
                                        </p>
                                        <h5 class="mb-1">Emily Rodriguez</h5>
                                        <p class="text-muted">Marketing Director, GreenLeaf Organics</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
