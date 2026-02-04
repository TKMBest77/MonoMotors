@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row align-items-center mb-4">
        <div class="col-auto">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary rounded-3">
                <i class="bi bi-arrow-left"></i>
            </a>
        </div>
        <div class="col">
            <h2 class="fw-bold mb-0 text-uppercase">{{ $car->brand }} <span class="fw-light text-muted">{{ $car->model }}</span></h2>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-5">
            <div class="border p-2 bg-white shadow-sm">
                <div style="height: 300px; overflow: hidden; background-color: #fdfdfd;">
                    <img src="{{ asset('img/' . $car->brand . '/' . $car->brand . '_' . $car->model . '.webp') }}"
                        class="w-100 h-100"
                        alt="{{ $car->model }}"
                        style="object-fit: contain;">
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="ps-md-4">
                <div class="mb-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3 small text-uppercase" style="letter-spacing: 1px;">Car Details</h5>

                    <div class="row g-3">
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Price</label>
                            <span class="fw-bold text-dark fs-5">${{ number_format($car->price) }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Manufacture Year</label>
                            <span class="fw-bold">{{ $car->year }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Body Type</label>
                            <span class="fw-bold">{{ $car->kuzow }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Color</label>
                            <span class="fw-bold">{{ $car->color }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Transmission</label>
                            <span class="fw-bold">{{ $car->transmission }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Drive</label>
                            <span class="fw-bold">{{ $car->drive }}</span>
                        </div>
                        <div class="col-6 col-sm-4">
                            <label class="text-muted small d-block">Status</label>
                            <span class="fw-bold">{{ $car->status_id }}</span>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-2 small text-uppercase">Description</h5>
                    <p class="text-muted small fw-light lh-base">
                        {{ $car->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection