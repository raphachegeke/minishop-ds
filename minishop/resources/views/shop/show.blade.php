@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>{{ $product->name }}</h1>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $product->description }}</p>
        <a href="/" class="btn btn-secondary">Back to Products</a>
    </div>
</div>
@endsection