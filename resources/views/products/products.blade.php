@extends('body')
@section('centerbox')
        <div class="top-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb"> 
                            <li class="p-none">
                                <a href="{{route('index')}}">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a class="current" href="{{route('get_slug', $category->slug)}}">{{$category->name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="top-shop-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="shop-around margin-b-20">
                           <div class="all-shop2-area">
                                <div class="filter-attribute-container ">
                                    <div class="block-title">
                                        <h2>{{ trans('common.contacts') }}</h2>
                                    </div>
                                    <div class="layered-content no_cb">
                                        <div class="cen-shop">
                                            <ul>
                                            @foreach ($categories as $c)
                                                <li>
                                                    <a class="a-filter add-filter" href="{{route('get_slug', $c->slug)}}">{{$c->name}}</a>
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    
                                @if ($category->id == 40)
                                    <div class="shop-around margin-b-20">
                                        <div class="all-shop2-area">
                                            <div class="filter-attribute-container">

                                    <div class="block-title">
                                        <h2>{{ trans('common.width') }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                             <ul>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">28+28</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">35+20</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">38+38</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">57</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">80</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>{{ trans('common.type-product') }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.tip-port') }}</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.tip-stat') }}</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.tip-fisc') }}</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.tip-reg') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>{{ trans('common.power') }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.acum-with') }}</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">{{ trans('common.acum-without') }}</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>{{ trans('common.interface') }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">USB</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">LAN</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">rs232</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>{{ trans('common.brand') }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Datex</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Tremol</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Daisy</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Elicom</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Aclas</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                           </div>

                        </div>
                     @endif
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="features-tab fe-again">

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="shop-tab">
                                                    <!-- single-product start -->
                                                @foreach ($data as $product)
                                                    <div class="col-md-4 col-sm-6">
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
                                                                    <h2 class="name">
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
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <ul class="pagination">
                                                <li class="active">
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <a href="#">2</a>
                                                </li>
                                                <li>
                                                    <a href="#">3</a>
                                                </li>
                                                <li>
                                                    <a href="#">></a>
                                                </li>
                                                <li>
                                                    <a href="#">>|</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@stop