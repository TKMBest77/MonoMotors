@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-5">
        <div class="col-lg-6">
            <p class="text-muted small text-uppercase mb-2" style="letter-spacing: 2px;">Our Story</p>
            <h1 class="display-4 fw-bold text-uppercase">Experience <br> Meets Luxury</h1>
        </div>
        <div class="col-lg-6 d-flex align-items-end">
            <p class="text-secondary lead">
                We are a leading premium car dealership, offering proven solutions for true connoisseurs of speed and comfort.
            </p>
        </div>
    </div>

    <div class="mb-5 shadow-sm overflow-hidden" style="height: 500px;">
        <img src="{{ asset('img/About_photo.png') }}"
            class="w-100 h-100" style="object-fit: cover;" alt="Luxury Showroom">
    </div>

    <div class="row g-4 py-5 text-center">
        <div class="col-md-4">
            <div class="p-4 border-end border-md-0">
                <h2 class="fw-bold display-5 mb-2">10+</h2>
                <p class="text-muted text-uppercase small fw-bold">Years of Excellence</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-end border-md-0">
                <h2 class="fw-bold display-5 mb-2">250+</h2>
                <p class="text-muted text-uppercase small fw-bold">Cars Sold</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 border-end border-md-0">
                <h2 class="fw-bold display-5 mb-2">24/7</h2>
                <p class="text-muted text-uppercase small fw-bold">Customer Support</p>
            </div>
        </div>
    </div>

    <div class="row py-5 align-items-center">
        <div class="col-md-5">
            <h2 class="fw-bold text-uppercase mb-4">Why Choose Us?</h2>
            <div class="mb-4">
                <h6 class="fw-bold">Certified Quality</h6>
                <p class="text-muted small">Each car undergoes a comprehensive diagnostic test covering 150 parameters before being included in our catalog.</p>
            </div>
            <div class="mb-4">
                <h6 class="fw-bold">Global Delivery</h6>
                <p class="text-muted small">We provide safe transportation of your new car to anywhere in the world.</p>
            </div>
        </div>
        <div class="col-md-7 ps-md-5">
            <div class="bg-dark text-white p-5 rounded-0 shadow-lg">
                <h3 class="fw-bold mb-4">"The car you drive says a lot about you."</h3>
                <p class="mb-0 text-secondary italic">— Our mission is to find a car that will highlight your individuality and status.</p>
            </div>
        </div>
    </div>
</div>
@endsection