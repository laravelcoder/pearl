@extends('layouts.site')

@section('content')
    <!--=== Products Start ======-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-slider flexslider">
                        <ul class="slides">
                            @if(@$design->image[0])
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. $design->image[0]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. $design->image[0]) !!}" class="img-responsive" alt="single-product" />
                            </li>
                            @endif

                            @if(@$design->image[1])
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. $design->image[1]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. $design->image[1]) !!}" class="img-responsive" alt="single-product" />
                            </li>
                            @endif

                            @if(@$design->image[2])
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. $design->image[2]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. $design->image[2]) !!}" class="img-responsive" alt="single-product" />
                             </li>
                             @endif

                            @if(@$design->image[3])
                            <li data-thumb="{!! asset('assets/images/designs/thumb/'. $design->image[3]) !!}">
                                <img src="{!! asset('assets/images/designs/single/'. $design->image[3]) !!}" class="img-responsive" alt="single-product" />
                             </li>
                             @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{!! $design->name !!}</h2>
                    <h3 class="grey">${!! $design->price !!}</h3>
                    <div class="single-product-des">
                        <h5>Product Desription</h5>

                        <p>{!! $design->short_details !!}</p>
                    </div>


                    <div class="single-product-qty pull-right">

                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="item_name" value="{!! $design->name !!}">
                        <input type="hidden" name="item_number" value="{!! $design->id !!}">
                        <input type="hidden" name="amount" value="{!! $design->price !!}">
                        <input type="hidden" name="currency_code" value="USD">
                        <input type="hidden" name="hosted_button_id" value="6UCU5V4HZZDGQ">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                    </div>


                    <div class="product-fabric-detail">
                        {!! $design->details !!}
                    </div>
                </div>
            </div>
            <div class="row mt-50">
                @foreach($other as $ot)
                <div class="col-md-3 col-sm-6">
                    <div class="product">
                        <div class="product-wrap"> <img src="{!! url('assets/images/designs/thumb/'.@$ot->image[0]) !!}" class="img-responsive" alt="team-01">
                            <div class="product-caption">
                                <div class="product-description text-center">
                                    <div class="product-description-wrap">
                                        <div class="product-title">
                                        <a href="{!! url('designs', [$ot->slug]) !!}"><i class="fa fa-2x fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h4>{{$ot->name}}</h4>
                            <p>${{$ot->price}} </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=== Products End ======-->

@endsection
