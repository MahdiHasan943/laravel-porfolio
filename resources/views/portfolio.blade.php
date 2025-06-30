@extends('layouts.app')
@section('title', 'Portfolio')

@section('content')
    <!-- Portfolio Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5">My Portfolio</h2>
                <p class="lead">Here are some of my recent projects</p>
            </div>

            <!-- Portfolio Grid -->
            <div class="row g-4 portfolio-grid">

                <!-- Restaurant Website -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="assets/images/restaurant-site.png" class="card-img-top" alt="Restaurant Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Restaurant Website</h5>
                                    <p class="text-white">Online presence for a local restaurant with menu and reservations.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#restaurantModal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Restaurant Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>

                <!-- Event Website -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="assets/images/event-site.png" class="card-img-top" alt="Event Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Event Website</h5>
                                    <p class="text-white">A vibrant website to showcase and manage events efficiently.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#eventModal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Event Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>

                <!-- Dental Website -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="portfolio-img-wrapper">
                            <img src="assets/images/cosmetic-site.png" class="card-img-top" alt="Dental Website">
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h5 class="text-white">Dental Website</h5>
                                    <p class="text-white">Professional site for a dental clinic featuring services and appointment booking.</p>
                                    <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#dentalModal">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cosmetic Clinic Website</h5>
                            <p class="card-text text-muted">Web Design</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Project Modals -->

    <!-- Restaurant Modal -->
    <div class="modal fade" id="restaurantModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Restaurant Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/restaurant-site.png" class="img-fluid mb-4" alt="Restaurant Website">
                    <p>A modern website for a local restaurant showcasing their menu, ambiance, and enabling online reservations.</p>
                    <p>Website features:</p>
                    <ul>
                        <li>Responsive design with mouth-watering food photography</li>
                        <li>Interactive menu with filtering options (vegetarian, gluten-free, etc.)</li>
                        <li>Online reservation system with table availability</li>
                        <li>Gallery showcasing the restaurant's ambiance</li>
                        <li>Integration with delivery services</li>
                    </ul>
                    <p><strong>Technologies used:</strong> HTML5, CSS3, JavaScript, PHP</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://passionblendbar.co.uk/WineAndCoctail/WineAndCoctail" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Event Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/event-site.png" class="img-fluid mb-4" alt="Event Website">
                    <p>A vibrant website to showcase and manage events efficiently, featuring event schedules, ticket booking, and speaker profiles.</p>
                    <p>Website highlights:</p>
                    <ul>
                        <li>Event calendar and countdown timer</li>
                        <li>Ticket purchasing and payment integration</li>
                        <li>Speaker bios and session details</li>
                        <li>Photo gallery and event updates</li>
                    </ul>
                    <p><strong>Technologies used:</strong> WordPress, JavaScript, Bootstrap</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://asabadrugawarenesscampaign.org/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>

    <!-- cosmetic Modal -->
    <div class="modal fade" id="dentalModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cosmetic Website</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="assets/images/cosmetic-site.png" class="img-fluid mb-4" alt="Dental Website">
                    <p>Professional site for a dental clinic featuring services, team profiles, and appointment booking options.</p>
                    <p>Key features:</p>
                    <ul>
                        <li>Service listing with descriptions</li>
                        <li>Meet the team section</li>
                        <li>Online appointment booking</li>
                        <li>Patient testimonials</li>
                        <li>Contact form with Google Maps integration</li>
                    </ul>
                    <p><strong>Technologies used:</strong> WordPress, PHP, CSS3, JavaScript</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="https://iwocpssl.com/" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </div>
    </div>
@endsection
