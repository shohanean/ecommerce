@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb area Start -->
    <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Favourites</h1>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li class="current"><span>Favourites</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <div id="content" class="main-content-wrapper">
        <div class="page-content-inner">
            <div class="container">
                <div class="row pt--80 pt-md--60 pt-sm--40 pb--65 pb-md--45 pb-sm--25">
                    <div class="col-12" id="main-content">
                        <div class="table-content table-responsive">
                            <table class="table table-style-2 wishlist-table text-center">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                        <th class="text-start">Product</th>
                                        <th>Stock Status</th>
                                        <th>Price</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($favourites as $favourite)
                                        <tr>
                                            <td class="product-remove text-start">
                                                {{-- <a href="#"><i class="dl-icon-close"></i></a> --}}
                                                <a href="">
                                                    <span class="fa-stack fa-lg">
                                                        <i class="fa fa-square-o fa-stack-2x"></i>
                                                        <i class="fa fa-times fa-stack-1x"></i>
                                                    </span>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail text-start">
                                                <img src="{{ $favourite->product->primary_image }}" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name wide-column">
                                                <h3>
                                                    <a
                                                        href="{{ route('product.details', $favourite->product->slug) }}">{{ $favourite->product->name }}</a>
                                                </h3>
                                            </td>
                                            <td class="product-stock text-success">
                                                <i class="fa fa-check"></i> In Stock
                                                <i class="fa fa-exclamation-circle"></i> Stock Out
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money">$$$</span>
                                                </span>
                                            </td>
                                            <td class="product-action-btn">
                                                <a href="{{ route('product.details', $favourite->product->slug) }}">View
                                                    Product</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="50">
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Upps!</strong> Nothing to show here
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper Start -->
@endsection
