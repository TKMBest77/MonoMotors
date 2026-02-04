@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-4 border-bottom pb-3">
                <h2 class="fw-bold text-dark mb-0 text-uppercase">Add Car</h2>
                <p class="text-muted fw-light small">Fill the blankets</p>
            </div>

            <form action="{{ route('cars.store') }}" method="POST" class="bg-white p-4 border shadow-sm">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Brand</label>
                        <input type="text" name="brand" class="form-control rounded-0 fw-light" placeholder="BMW" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Model</label>
                        <input type="text" name="model" class="form-control rounded-0 fw-light" placeholder="M5" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Kuzow</label>
                        <input type="text" name="kuzow" class="form-control rounded-0 fw-light" placeholder="Sedan" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Color</label>
                        <input type="text" name="color" class="form-control rounded-0 fw-light" placeholder="White" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Status</label>
                        <input type="text" name="status_id" class="form-control rounded-0 fw-light" placeholder="Available" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Year</label>
                        <input type="number" name="year" class="form-control rounded-0 fw-light" placeholder="2024" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Transmission</label>
                        <input type="text" name="transmission" class="form-control rounded-0 fw-light" placeholder="Automatic">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Drive</label>
                        <input type="text" name="drive" class="form-control rounded-0 fw-light" placeholder="4WD">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Motor</label>
                        <input type="number" name="motor" step="0.1" class="form-control rounded-0 fw-light" placeholder="3.4" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold text-muted text-uppercase">Price ($)</label>
                        <input type="number" name="price" class="form-control rounded-0 fw-light" placeholder="50000" required>
                    </div>

                    <div class="col-md-12">
                        <div class="form-check form-switch p-0 ms-4">
                            <input class="form-check-input" type="checkbox" name="is_new" id="isNewSwitch" value="1" {{ old('is_new') ? 'checked' : '' }}>
                            <label class="form-check-label small fw-bold text-muted text-uppercase" for="isNewSwitch">Is NEW</label>
                        </div>
                    </div>

                    <div class="col-12 text-dark">
                        <label class="form-label small fw-bold text-muted text-uppercase">Description</label>
                        <textarea name="description" rows="3" class="form-control rounded-0 fw-light" placeholder="Max 255 chars">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-4 pt-3 border-top">
                    <button type="submit" class="btn btn-dark btn-sm rounded-0 px-4 fw-bold text-uppercase">Save</button>
                    <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary btn-sm rounded-0 px-4 fw-bold text-uppercase">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection