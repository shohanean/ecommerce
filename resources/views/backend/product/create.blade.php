@extends('layouts.dashboard')

@section('product.index')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'Add New Product' => 'product.create',
        ],
        'right_btn' => ['All Products', 'product.index']
    ])
@endsection

@section('content')

@endsection
