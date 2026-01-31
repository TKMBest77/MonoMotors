@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-5 border-bottom pb-4">
        <div>
            <h1 class="fw-bold display-5 mb-0">КАТАЛОГ</h1>
            <p class="text-muted fw-light text-uppercase mb-0 small">Премиальный парк</p>
        </div>
        <div>
            <a href="{{ route('cars.create') }}" class="btn btn-dark">
                ADD CAR
            </a>
        </div>
    </div>

    <div class="row g-4">
        @foreach($cars as $car)
        <div class="col-md-3">
            <div class="card h-100 border-0 rounded-0 shadow-sm">
                <div style="height: 180px; overflow: hidden">
                    <a href="{{ route('cars.show', $car->id) }}">
                        <img src="{{ asset('img/' . $car->brand . '/' . $car->brand . '_' . $car->model . '.webp') }}"
                            class="w-100 h-100"
                            alt="{{ $car->model }}"
                            style="object-fit: contain; padding: 10px;"> {{-- contain сохранит пропорции полностью --}}
                    </a>
                </div>

                <div class="card-body px-3 pb-3">
                    <span class="text-muted small text-uppercase fw-light">{{ $car->brand }}</span>
                    <h6 class="fw-bold mb-2">{{ $car->model }}</h6>
                    <div class="d-flex justify-content-between align-items-center mt-auto">
                        <span class="fw-bold text-dark">${{ number_format($car->price) }}</span>
                        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-dark btn-sm rounded-0 fw-bold">ОТКРЫТЬ</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center mt-4 custom-pagination">
    {{ $cars->links('pagination::bootstrap-5') }}
</div>
@endsection