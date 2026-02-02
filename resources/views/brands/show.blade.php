@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <p class="text-muted small text-uppercase mb-0">Models Catalog</p>
            <h2 class="fw-bold text-uppercase m-0">{{ $brand }}</h2>
        </div>
        <a href="/brands" class="btn btn-sm btn-dark rounded-pill text-uppercase px-3"><i class="bi bi-arrow-left me-1"></i>Brands</a>
    </div>

    <div class="row g-4">
        @foreach($cars as $car)
        <div class="col-md-3">
            <div class="card border-0 rounded-0 shadow-sm h-100 position-relative">

                @if($car->is_new)
                <span class="badge bg-dark position-absolute top-0 end-0 m-3 rounded-0 px-2 py-1">NEW</span>
                @endif

                <div class="bg-white d-flex align-items-center justify-content-center" style="height: 200px;">
                    <a href="{{ route('cars.show', $car->id) }}">
                        <img src="{{ asset('img/' . $car->brand . '/' . $car->brand . '_' . $car->model . '.webp') }}"
                            class="img-fluid p-3"
                            style="max-height: 100%; object-fit: contain;">
                    </a>
                </div>

                <div class="card-body p-4 pt-0">
                    <p class="text-muted small text-uppercase mb-1" style="font-size: 11px;">{{ $car->brand }}</p>
                    <h4 class="fw-bold mb-1 text-uppercase">{{ $car->model }}</h4>
                    <h5 class="fw-bold mb-4">${{ number_format($car->price) }}</h5>
                </div>

                <a href="{{ route('cars.show', $car->id) }}"
                    class="btn btn-dark w-100 rounded-0 py-2 text-uppercase"
                    style="font-size: 13px; letter-spacing: 1px;">
                    Details
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection