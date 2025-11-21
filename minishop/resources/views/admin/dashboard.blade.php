@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>
<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.products.create') }}" class="btn btn-success mb-3">Add New Product</a>
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary mb-3">Manage Products</a>
    </div>
</div>
@endsection