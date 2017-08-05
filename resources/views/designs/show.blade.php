@extends('layouts.site')

@section('content')
    <!--=== Products Start ======-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-slider flexslider">
                        <ul class="slides">
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. unserialize($design->image)[0]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. unserialize($design->image)[0]) !!}" class="img-responsive" alt="single-product" />
                            </li>

                            {{-- @if($design->image, 'id' == 1): --}}
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. unserialize($design->image)[1]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. unserialize($design->image)[1]) !!}" class="img-responsive" alt="single-product" />
                            </li>
                            {{-- @endif --}}

{{--                             @if($design->image[2]):
                            <li data-thumb="{!! asset('assets/images/designs/single/'. unserialize($design->image)[2]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. unserialize($design->image)[2]) !!}" class="img-responsive" alt="single-product" />
                            </li>
                            @endif --}}

{{--                             @if($design->image[3]):
                            <li data-thumb="{!! asset('assets/images/designs/single/'. unserialize($design->image)[3]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. unserialize($design->image)[3]) !!}" class="img-responsive" alt="single-product" />
                            </li>
                            @endif --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{!! $design->name !!}</h2>
                    <h3 class="grey">${!! $design->price !!}</h3>
                    <div class="single-product-des">
                        <h5>Product Desription</h5>
                        {!! $design->short_details !!}
                    </div>

                    @if($design->button_code):
                    <div class="single-product-qty">
                        {!! $design->button_code !!}

                    </div>
                    @endif

                    <div class="product-fabric-detail">
                        {!! $design->details !!}
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{!! asset('assets/images/shop/product-01.jpg') !!}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Jet Black/White Sports Trim</h4>
                            <p>$85.99 <span class="old-price">$104.99</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{!! asset('assets/images/shop/product-02.jpg') !!}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Jet Black/ T-shirt</h4>
                            <p>$59.99 <span class="old-price">$79.99</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{!! asset('assets/images/shop/product-03.jpg') !!}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Navy Blue Plain</h4>
                            <p>$59.99 <span class="old-price">$79.99</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{!! asset('assets/images/shop/product-04.jpg') !!}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title"> <a href="#" class="btn btn-color btn-circle">ADD TO CART <span class="icon"><i class="mdi mdi-cart"></i></span></a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>Just Let Me Sleep</h4>
                            <p>$195.99 <span class="old-price">$230.99</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Products End ======-->

@endsection
