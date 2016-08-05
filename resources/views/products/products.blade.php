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
                            @if(isset($category))
                            <li>
                                <a class="current" href="{{route('get_slug', $category->slug)}}">{{$category->name}}</a>
                            </li>
                            @endif
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
                                        <h2>{{ trans('common.product-category') }}</h2>
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
                                    
                        @if (isset($category) && $category->id == 40)
                        <div class="shop-around margin-b-20">
                            <div class="all-shop2-area">
                                <div class="filter-attribute-container">
                                    @foreach($features as $feature)
                                    <div class="block-title">
                                        <h2>{{ $feature->name }}</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                             <ul>
                                                 @foreach($feature->values as $value)
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);" data-id="{{$value->id}}">{{ $value->name }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
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
                                                        @include('partials.oneproduct')
                                                    </div>
                                                @endforeach
                                  
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--
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
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script id="oneProductTemplate" type="text/x-jquery-tmpl">
            <div class="col-md-4 col-sm-6">
                <div class="slider-one">
                    <div class="single-product">
                        <div class="products-top">
                             {%if (price_discount != 0)%}
                                <p class="price special-price non">
                                    <span class="price-new">${price_discount} {{ trans('common.valut') }}</span>
                                    <span class="price-old">${price} {{ trans('common.valut') }}</span>
                                </p>
                             {%else%}
                                <p class="price special-price">
                                    <span class="price-new new2">${price} {{ trans('common.valut') }}</span>
                                </p>
                             {%/if%}
                            <div class="product-img">
                                <a href="${link}" title="${name}">
                                    <img class="primary-image" alt="${name}" src="uploaded/${photo}">
                                </a>
                            </div>
                        </div>
                        <div class="content-box again">
                            <h2 class="name h2">
                                <a href="${link}">${name}</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </script>
@stop


@section('scripts')

    <script src="js/jquery.tmpl.js"></script>

    <script>
        var mainfilter = [];
        $(document).ready(function(){
            $('.filter-attribute-container a').click(function(){
                var id = $(this).data('id');
                if(!$(this).parent().hasClass('active')){
                    addID(id);
                }else{
                    removeID(id);
                }
            });
        });

        function addID(cur_id){
            mainfilter[mainfilter.length] = cur_id;
            UpdatePage();
        }

        function removeID(cur_id){
            var index = mainfilter.indexOf(cur_id);
            if (index != -1){
                mainfilter.remove(index);
            }
            UpdatePage();
        }

        function UpdatePage(){
           $.get('{{ route('get-json-products') }}',
                    {
                        category_id: '@if(isset($category)){{ $category->id }}@endif',
                        filter     : JSON.stringify(mainfilter)
                    },
                    function(response){
                        if(response.success  == false){
                            alert('Some error');
                        }

                        var movies = [
                            { price_discount: "666", price: "555" },
                            { Name: "Eyes Wide Shut", ReleaseYear: "1999" },
                            { Name: "The Inheritance", ReleaseYear: "1976" }
                        ];

                        $(".shop-tab").empty();
                        $("#oneProductTemplate").tmpl(response.data).appendTo(".shop-tab");

                    });
        }

        // Array Remove - By John Resig (MIT Licensed)
        Array.prototype.remove = function(from, to) {
            var rest = this.slice((to || from) + 1 || this.length);
            this.length = from < 0 ? this.length + from : from;
            return this.push.apply(this, rest);
        };

        //indexOf Array for IE
        if (!Array.prototype.indexOf) {
            Array.prototype.indexOf = function (obj, fromIndex) {
                if (fromIndex == null) {
                    fromIndex = 0;
                } else if (fromIndex < 0) {
                    fromIndex = Math.max(0, this.length + fromIndex);
                }
                for (var i = fromIndex, j = this.length; i < j; i++) {
                    if (this[i] === obj)
                        return i;
                }
                return -1;
            };
        }
    </script>
@stop