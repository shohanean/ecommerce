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
        'right_btn' => ['All Products', 'product.index'],
    ])
@endsection

@section('content')
    <!--begin::Form-->
    <div class="form d-flex flex-column flex-lg-row">
        <!--begin::Aside column-->
        <div class="w-100 flex-lg-row-auto mb-7 me-7 me-lg-10">
            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Add Inventory - {{ $product->name }}</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="d-flex flex-column gap-10">
                        @session('success')
                        <div class="alert alert-success">
                            {{ $value }}
                        </div>
                        @endsession

                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-6">
                                <div class="col-12">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Color</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <select class="form-select" name="color_id">
                                                            <option value="">-Select One Color-</option>
                                                            @foreach ($colors as $color)
                                                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Size</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <select class="form-select" name="size_id">
                                                            <option value="">-Select One Size-</option>
                                                            @foreach ($sizes as $size)
                                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Purchase Price</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input class="form-control" type="number" name="purchase_price">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Selling Price</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input class="form-control" type="number" name="selling_price">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Offer Price</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input class="form-control" type="number" name="offer_price">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                                            <span>Quantity</span>
                                                        </label>
                                                        <!--end::Label-->
                                                        <input class="form-control" type="number" name="quantity">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info">Add New Product</button>
                        </form>
                    </div>
                </div>
                <!--end::Card header-->
            </div>
            <!--end::Order details-->
        </div>
        <!--end::Aside column-->
    </div>
    <!--end::Form-->
@endsection
