@extends('body')
@section('centerbox')

 <section class="slider-main-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-slider">
                            <div class="bend niceties preview-2">

                                <div id="ensign-nivoslider-2" class="slides"> 
                                @foreach($slider as $sp)
                                    <img src="uploaded/{{isset($sp->photos{0}) ? $sp->photos{0}->source : 'nophoto.png'}}" alt="" title="#slider-direction-3"/>
                                    
                                    
                                @endforeach
                                </div>
                                <!-- direction 1 -->
                                @foreach($slider as $slide)
                                <div id="slider-direction-3" class="t-cn slider-direction Builder">
                                    <div class="slide-all slide3">
                                        <!-- layer 1 -->
                                        <div class="layer-1">
                                            <h2 class="title5 h2">{{$slide->name}}</h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-2">
                                            <h2 class="title6">{{$slide->description_short}}</h2>
                                        </div>
                                        <!-- layer 3 -->
                                        <!-- <div class="layer-3">
                                            <a class="min1" href="#">Purchase now</a>
                                        </div> -->
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div id="slider-direction-1" class="t-cn slider-direction Builder">
                                    <div class="slide-all slide3">
                                        
                                        <div class="layer-1">
                                            <h2 class="title5 h2">AFFORDABLE LUXURY</h2>
                                        </div>
                                       
                                        <div class="layer-2">
                                            <h2 class="title6">SAVE UP TO 70% A HUGE SELECTION OF FURNITURE</h2>
                                        </div>
                                        
                                        <div class="layer-3">
                                            <a class="min1" href="#">Purchase now</a>
                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home2-all-area">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="row">
                            @foreach($banners as $key=>$ban)
                                <div class="col-md-6 col-sm-6">
                                    <div class="first-banner">
                                        <a target="_blank" href="{{$ban->description_short}}">
                                            <img  alt="{{$ban->name}}" src="uploaded/{{isset($ban->photos{0}) ? $ban->photos{0}->source : 'nophoto.png'}}" style="height:216px; width:100%; ">
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                       <div class="ma-title now2 now3">
                            <h2>{{ trans('common.product') }}:</h2>
                        </div>
                   </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="active-slider9 indicator-style2">
                            @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="slider-one">
                                    <div class="single-product">
                                        <div class="products-top">
                                            @if ($product->price_discount != 0)
                                                <p class="price special-price non">
                                                    <span class="price-new">{{$product->price_discount}} {{ trans('common.valut') }}</span>
                                                    <span class="price-old">{{$product->price}} {{ trans('common.valut') }}</span>
                                                </p>
                                                @else
                                                <p class="price special-price">
                                                    <span class="price-new new2">{{$product->price}} {{ trans('common.valut') }}</span>
                                                </p>
                                            @endif
                                            <div class="product-img">
                                                <a href="{{route('get_slug', $product->slug)}}">
                                                    <img class="primary-image" alt="" src="uploaded/{{isset($product->photos{0}) ? $product->photos{0}->source : 'nophoto.png'}}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-box again">
                                            <h2 class="name h2">
                                                <a href="{{route('get_slug', $product->slug)}}">{{$product->name}}</a>
                                            </h2>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="icon-slider-area">
            <div class="container">
                <div class="row">          
                    <div class="col-md-12">
                        <div class="item_all indicator-style3">
                            @foreach($partners as $key=>$part)
                                <a target="_blank" href="{{$part->description_short}}" class="part_item">
                                    <img src="uploaded/{{isset($part->photos{0}) ? $part->photos{0}->source : 'nophoto.png'}}" alt="{{$part->name}}" />
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop
