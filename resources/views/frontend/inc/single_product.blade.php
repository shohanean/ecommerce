<div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
    <div class="airi-product">
        <div class="product-inner">
            <figure class="product-image">
                <div class="product-image--holder">
                    <a href="product-details.html">
                        <img src="{{ asset('frontend_assets') }}/img/products/prod-19-4.jpg" alt="Product Image"
                            class="primary-image">
                        <img src="{{ asset('frontend_assets') }}/img/products/prod-19-1.jpg" alt="Product Image"
                            class="secondary-image">
                    </a>
                </div>
                <div class="airi-product-action">
                    <div class="product-action">
                        <a class="quickview-btn action-btn" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Quick Shop">
                            <span data-bs-toggle="modal" data-bs-target="#productModal">
                                <i class="dl-icon-view"></i>
                            </span>
                        </a>
                        <a class="add_to_cart_btn action-btn" href="cart.html" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Add to Cart">
                            <i class="dl-icon-cart29"></i>
                        </a>
                        <a class="add_wishlist action-btn" href="wishlist.html" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Add to Wishlist">
                            <i class="dl-icon-heart4"></i>
                        </a>
                        <a class="add_compare action-btn" href="compare.html" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Add to Compare">
                            <i class="dl-icon-compare"></i>
                        </a>
                    </div>
                </div>
                <span class="product-badge new">New</span>
            </figure>
            <div class="product-info text-center">
                <h3 class="product-title">
                    <a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a>
                </h3>
                <div class="product-rating">
                    <span>
                        <i class="dl-icon-star rated"></i>
                        <i class="dl-icon-star rated"></i>
                        <i class="dl-icon-star rated"></i>
                        <i class="dl-icon-star"></i>
                        <i class="dl-icon-star"></i>
                    </span>
                </div>
                <span class="product-price-wrapper">
                    <span class="money">$49.00</span>
                    <span class="product-price-old">
                        <span class="money">$60.00</span>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
