@extends('layouts.dashboard')

@section('product.index')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'Product' => 'product.index',
            $product->name => 'link',
        ]
    ])
@endsection

@section('content')
    <!--begin::Form-->
    <div class="form d-flex flex-column flex-lg-row">
        <!--begin::Aside column-->
        <div class="w-100 flex-lg-row-auto mb-7 me-7 me-lg-10">
            <div class="row mb-4">
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $product->primary_image }}" alt="not found" />
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <p class="card-text">{{ $product->short_description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Description</h3>
                            <p class="card-text">
                                {!! $product->long_description !!}
                            </p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Added By</td>
                                            <td>{{ $product->user_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Category Name</td>
                                            <td>{{ $product->category_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Subcategory Name</td>
                                            <td>{{ $product->subcategory_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Collection Name</td>
                                            <td>{{ $product->collection_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>SKU Code</td>
                                            <td>{{ $product->sku }}</td>
                                        </tr>
                                        <tr>
                                            <td>Slug</td>
                                            <td>{{ $product->slug }}</td>
                                        </tr>

                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $product->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--begin::Order details-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Products</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="d-flex flex-column gap-10">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="ps-4 min-w-300px rounded-start">Product Name</th>
                                        <th>asdas</th>
                                        <th class="pe-4 min-w-200px text-end rounded-end">Action</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($product->inventory as $inventory)
                                    <tr>
                                        <td>{{ $inventory->purchase_price }}</td>
                                        <td>{{ $inventory->selling_price }}</td>
                                        <td>{{ $inventory->offer_price }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
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
