@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h2 class="fw-bold text-uppercase m-0">Our Car Brands</h2>
        <a href="{{ route('cars.index') }}" class="btn btn-outline-dark rounded-pill">All Cars</a>
    </div>

    <div class="row g-4">
        @foreach($brands as $brand)
        <div class="col-md-3">
            <div class="card border-0 rounded-0 shadow-sm h-100 position-relative">
                <div class="d-flex align-items-center justify-content-center bg-white" style="height: 200px;">
                    <a href="{{ route('brands.show', $brand->brand) }}">
                        <img src="{{ asset('img/Logo/' . $brand->brand . '_logo.png') }}"
                            class="img-fluid p-5"
                            style="max-height: 100%; object-fit: contain;">
                    </a>
                </div>

                <div class="card-body p-4 pt-0">
                    <p class="text-muted small text-uppercase mb-1" style="font-size: 11px;">Brand</p>
                    <h4 class="fw-bold mb-4 text-uppercase">{{ $brand->brand }}</h4>
                </div>

                <a href="{{ route('brands.show', $brand->brand) }}"
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