@extends('layouts.dashboard')

@section('product.index')
    active
@endsection

@section('toolbar')
    @includeIf('parts.toolbar', [
        'links' => [
            'home' => 'home',
            'Product' => 'product.index',
        ],
        'right_btn' => ['Add New Product', 'product.create']
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
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $product->name }}</a>
                                                        <span
                                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $product->description }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>asdasd</td>
                                            <td class="text-end">
                                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">View</a>
                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Edit</a>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-bg-danger btn-color-white btn-active-color-primary btn-sm px-4 me-2">Delete</button>
                                                </form>
                                            </td>
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
