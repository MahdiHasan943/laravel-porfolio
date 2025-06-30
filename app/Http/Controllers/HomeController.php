<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

    $featuredWorks = [
    [
        'image' => asset('assets/images/restaurant-site.png'), // Replace with your image later
        'title' => 'Restaurant Website',
        'short_description' => 'Modern website for a local restaurant with menu and reservation system.'
    ],
    [
        'image' => asset('assets/images/event-site.png'), // Replace with your image later
        'title' => 'Event Management Website',
        'short_description' => 'Interactive event site featuring schedules, registration, and gallery.'
    ],
    [
        'image' => asset('assets/images/cosmetic-site.png'), // Replace with your image later
        'title' => 'Cosmetic Clinic Website',
        'short_description' => 'Elegant and clean clinic site with services, appointment system, and testimonials.'
    ]
];


        return view('home', compact('featuredWorks'));
    }
}
