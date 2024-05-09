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
                        <h2>Add New Product</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="d-flex flex-column gap-10">
                        <form action="{{ route('product.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Product Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control" placeholder="Enter Product Name"
                                            name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Category Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <select class="form-select" name="category_id">
                                            <option value="">-Select Category-</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Subcategory Name</span>
                                        </label>
                                        <!--end::Label-->
                                        <select class="form-select" name="">
                                            <option value="">-Select Subcategory-</option>
                                            <option value="">-asdasd Subcategory-</option>
                                            <option value="">-g Subcategory-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            Collection
                                        </label>
                                        <!--end::Label-->
                                        <select class="form-select" name="collection_id">
                                            <option value="">-Select Collection-</option>
                                            @foreach ($collections as $collection)
                                                <option value="{{ $collection->id }}">{{ $collection->top_title }}
                                                    ({{ $collection->lower_title }} {{ $collection->strong_title }})
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Stock Keeping Unit (SKU)</span>
                                        </label>
                                        <!--end::Label-->
                                        <input class="form-control" type="text" name="sku"
                                            value="{{ Str::upper(Str::random(6)) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Short Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea class="form-control" name="short_description" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                            <span class="required">Long Description</span>
                                        </label>
                                        <!--end::Label-->
                                        <textarea id="long_description_editor" class="form-control" name="long_description" rows="4"></textarea>
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

@section('footer_scripts')
    <script>
        tinymce.init({
            selector: "#long_description_editor",
            menubar: false,
            toolbar: [
                "styleselect fontselect fontsizeselect",
                "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | print preview"
            ],
            plugins: "advlist autolink link image lists charmap print preview code"
        });
    </script>
@endsection
