@extends('admin.layouts.contentLayoutMaster')

@section('title', __('general.product_stock'))
@section('vendor-style')
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset('admin/css/extra/card-skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/extra/product_info_card.css') }}">
    <style>

    </style>
@endsection


@section('content')
    <div class="content-detached content-right">
        <div class="content-body">

            <section id="bg-variants">
{{--                <div class="card-grid" id="block__card__skeleton">--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card__skeleton">--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card-category skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <h2 class="card-title skeleton">--}}
{{--                                <!-- wating for title to load from javascript -->--}}
{{--                            </h2>--}}
{{--                            <p class="card-intro skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                            <p class="card-instock skeleton">--}}
{{--                                <!-- waiting for intro to load from Javascript -->--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <main class="card-layout">
                    @if($products)
                        @foreach($products as $product)
                            <div class="card-info" style="background-image: url('{{ url(product_image_path().'/'.$product->productImage->original_images) }}')">
                                <div class="content-info">
                                    <h2 class="title">{{ $product->name }}</h2>
                                    <p class="copy">{{ $product->category->category_name }}</p>
                                    <p class="copy">{{ $product->subcategory->subcategory_name }}</p>
                                    <button class="btn">Add Quantity</button>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </main>
            </section>

        </div>
    </div>
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <!-- Ecommerce Sidebar Starts -->
            <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                    </div>
                </div>
                <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                <div class="card">
                    <div class="card-body">
                        <div class="multi-range-price">
                            <div class="multi-range-title pb-75">
                                <h6 class="filter-title mb-0">Multi Range</h6>
                            </div>
                            <ul class="list-unstyled price-range" id="price-range">
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" checked value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">All</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> &lt;=$10</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$10 - $100</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">$100 - $500</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="price-range" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">&gt;= $500</span>
                                            </span>
                                </li>

                            </ul>
                        </div>
                        <!-- /Price Filter -->
                        <hr>
                        <!-- /Price Slider -->
                        <div class="price-slider">
                            <div class="price-slider-title mt-1">
                                <h6 class="filter-title mb-0">Slider</h6>
                            </div>
                            <div class="price-slider">
                                <div class="price_slider_amount mb-2">
                                </div>
                                <div class="form-group">
                                    <div class="slider-sm my-1 range-slider" id="price-slider"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Price Range -->
                        <hr>
                        <!-- Categories Starts -->
                        <div id="product-categories">
                            <div class="product-category-title">
                                <h6 class="filter-title mb-1">Categories</h6>
                            </div>
                            <ul class="list-unstyled categories-list">
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false" checked>
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Appliances</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Audio</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cameras & Camcorders</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Car Electronics & GPS</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Cell Phones</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Computers & Tablets</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"> Health, Fitness & Beauty</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Office & School Supplies</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">TV & Home Theater</span>
                                            </span>
                                </li>
                                <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="false">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50">Video Games
                                                </span>
                                            </span>
                                </li>

                            </ul>
                        </div>
                        <!-- Categories Ends -->
                        <hr>
                        <!-- Brands -->
                        <div class="brands">
                            <div class="brand-title mt-1 pb-1">
                                <h6 class="filter-title mb-0">Brands</h6>
                            </div>
                            <div class="brand-list" id="brands">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Insignia™</span>
                                                </span>
                                        <span>746</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Samsung
                                                    </span>
                                                </span>
                                        <span>633</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        Metra
                                                    </span>
                                                </span>
                                        <span>591</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">HP</span>
                                                </span>
                                        <span>530</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Apple</span>
                                                </span>
                                        <span>442</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">GE</span>
                                                </span>
                                        <span>394</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Sony</span>
                                                </span>
                                        <span>350</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Incipio</span>
                                                </span>
                                        <span>320</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">KitchenAid</span>
                                                </span>
                                        <span>318</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="false">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">Whirlpool</span>
                                                </span>
                                        <span>298</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Brand -->
                        <hr>
                        <!-- Rating section starts -->
                        <div id="ratings">
                            <div class="ratings-title mt-1 pb-75">
                                <h6 class="filter-title mb-0">Ratings</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">(160)</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">(176)</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">(291)</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i></li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">(190)</div>
                            </div>
                        </div>
                        <!-- Rating section Ends -->
                        <hr>
                        <!-- Clear Filters Starts -->
                        <div id="clear-filters">
                            <button class="btn btn-block btn-primary">CLEAR ALL FILTERS</button>
                        </div>
                        <!-- Clear Filters Ends -->

                    </div>
                </div>
            </div>
            <!-- Ecommerce Sidebar Ends -->

        </div>
    </div>
@endsection

@section('vendor-script')

@endsection
@section('page-script')
    <script>

    </script>
@endsection