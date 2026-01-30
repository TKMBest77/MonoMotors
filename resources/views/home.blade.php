@extends('layouts.app')

@section('content')
<div class="row g-3">
    @foreach ($cars->take(4) as $car)
    <div class="col-4 col-md-3">
        <div class="h3 text-center">
            {{ $car->brand_id }}
        </div>
    </div>
    @endforeach
</div>
@endsection