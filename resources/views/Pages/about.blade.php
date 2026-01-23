@extends('layouts.app')

@section('title', 'About Us')

@section('sidebar')
    @@parent
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<!-- HERO SECTION -->
<div class="bg-light py-5 mb-5 mt-4">
    <div class="container text-center">
        <h1 class="display-5 fw-bold">About Our Company</h1>
        <p class="lead mt-3">
            We are committed to delivering high-quality solutions that create real value for our customers.
        </p>
    </div>
</div>

<!-- ABOUT TEXT SECTION -->
<div class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold">Who We Are</h2>
            <p>
                Our company was founded with a simple mission: to build reliable, innovative, and scalable
                digital solutions. We believe technology should make life easier, smarter, and more connected.
            </p>
            <p>
                With a passionate team and a customer-first mindset, we continuously strive to improve and grow.
            </p>
        </div>
        <div class="col-md-6 text-center">
            <img 
                src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                class="img-fluid rounded shadow"
                alt="Team work"
            >
        </div>
    </div>
</div>

<!-- MISSION / VISION / VALUES -->
<div class="container mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Our Mission</h5>
                    <p class="card-text">
                        To provide innovative and affordable solutions that help businesses grow and succeed.
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Our Vision</h5>
                    <p class="card-text">
                        To become a trusted technology partner recognized for quality, integrity, and innovation.
                    </p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Our Values</h5>
                    <p class="card-text">
                        Integrity, teamwork, continuous learning, and customer satisfaction guide everything we do.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- TEAM SECTION -->
<div class="container mb-5">
    <h2 class="text-center fw-bold mb-4">Meet Our Team</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team member">
                <div class="card-body">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text text-muted">Founder & CEO</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team member">
                <div class="card-body">
                    <h5 class="card-title">Jane Smith</h5>
                    <p class="card-text text-muted">Lead Developer</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/300" class="card-img-top" alt="Team member">
                <div class="card-body">
                    <h5 class="card-title">David Lee</h5>
                    <p class="card-text text-muted">Project Manager</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- CALL TO ACTION -->
<div class="bg-dark text-white py-5">
    <div class="container text-center">
        <h2 class="fw-bold">Want to Work With Us?</h2>
        <p class="mt-3">
            Let’s build something great together. Contact us today to get started.
        </p>
        <a href="#" class="btn btn-primary mt-2">Contact Us</a>
    </div>
</div>

@endsection
