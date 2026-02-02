@extends('layouts.app')

@section('content')
<div class="py-5 mb-5" style="background: #000; color: #fff;">
    <div class="container py-5 text-center">
        <h1 class="display-1 fw-bold mb-3" style="letter-spacing: -2px;">MONO MOTORS</h1>
        <p class="lead text-uppercase" style="letter-spacing: 5px; opacity: 0.7;">Pure Aesthetics</p>
        <div class="mt-4">
            <a href="/cars" class="btn btn-outline-light px-5 py-3 rounded-0">GO TO CATALOG</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="d-flex justify-content-between align-items-center gx-4 mb-3">
        <div>
            <img src="{{ asset('img/MonoMotors_3D.png') }}" class="w-75" alt="">
        </div>
        <div class="fs-4 text-muted mt-3">
            <strong>MonoMotors</strong> is more than just a car dealership. We strip away the unnecessary,
            leaving only impeccable condition and strict style. We believe a car should convey
            status more quietly, yet more convincingly, than others.
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-end mb-4">
        <h3 class="fw-bold mb-0">LATEST ARRIVALS</h3>
        <a href="/cars" class="btn btn-dark rounded-pill">All Cars →</a>
    </div>

    <div class="row g-4 mb-5">
        @foreach($cars->take(4) as $car)
        <div class="col-md-3">
            <div class="card h-100 border-0 shadow-sm p-2">
                <div class="position-relative overflow-hidden" style="height: 180px;">
                    <a href="{{ route('cars.show', $car->id) }}">
                        <img src="{{ asset('img/' . $car->brand . '/' . $car->brand . '_' . $car->model . '.webp') }}"
                            class="w-100 h-100"
                            alt="{{ $car->model }}"
                            style="object-fit: contain; padding: 10px;">
                    </a>
                    <div class="position-absolute top-0 end-0 bg-dark text-white px-2 py-1 small">
                        NEW
                    </div>
                </div>
                <div class="card-body px-0 py-3">
                    <h6 class="text-muted text-uppercase mb-1 small">{{ $car->brand }}</h6>
                    <h5 class="fw-bold mb-2">{{ $car->model }}</h5>
                    <p class="fw-bold fs-5">${{ number_format($car->price) }}</p>
                    <a href="/cars/{{ $car->id }}" class="btn btn-dark w-100 rounded-0">DETAILS</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row g-4 mt-5">
        <div class="col-md-6">
            <div class="p-5 bg-light border h-100">
                <h4 class="fw-bold">CAR SELECTION</h4>
                <p class="text-muted">We'll find the perfect model to suit your budget and requirements within 7 days.</p>
                <a href="/contact" class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover fw-bold">Leave a request →</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-5 border h-100" style="border: 2px solid #000 !important;">
                <h4 class="fw-bold">TRADE-IN</h4>
                <p class="text-muted">Trade in your old car for a new MonoMotors car with a round trip payment.</p>
                <a href="/contact" class="link-dark link-underline-opacity-0 link-underline-opacity-100-hover fw-bold">Rate my car →</a>
            </div>
        </div>
    </div>
</div>
@endsection