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
<!--begin::Form-->
<div class="form d-flex flex-column flex-lg-row">
    <!--begin::Aside column-->
    <div class="w-100 flex-lg-row-auto mb-7 me-7 me-lg-10">
        <!--begin::Order details-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Add Product</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="d-flex flex-column gap-10">
                    <form action="{{ route('product.store') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Product Name</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name">
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Category Name</span>
                            </label>
                            <!--end::Label-->
                            <select class="form-select" name="category_id">
                                <option value="">asdasd</option>
                                <option value="">asdasd</option>
                                <option value="">asdasd</option>
                                <option value="">asdasd</option>
                                <option value="">asdasd</option>
                            </select>
                        </div>
                        <button>Submit</button>
                    </form>
                </div>
                {{-- {{ $products->links() }} --}}
            </div>
            <!--end::Card header-->
        </div>
        <!--end::Order details-->
    </div>
    <!--end::Aside column-->
</div>
<!--end::Form-->
@endsection
