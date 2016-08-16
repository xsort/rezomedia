
@extends('body')
@section('centerbox')

<div ng-controller="myCtrl">
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                        <div class="modal-up" >
                           <table class="shop-container cart">
                                <thead>
                                    <tr>
                                        <th class="item-thumb">&nbsp;</th>
                                        <th class="item-name">{{ trans('common.product-t') }}</th>
                                        <th class="item-quantity">{{ trans('common.quant') }}</th>
                                        <th class="item-nom">&nbsp;</th>
                                        <th class="item-subtotal">{{ trans('common.total') }}</th>                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="item-row">
                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-hdd-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-product') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <div class="i-arrows">

                                                    <div class="i-arrows i-arrows-up">
                                                        <button ng-click="value_prod = value_prod + 1">
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <div class="i-arrows i-arrows-down">
                                                        <button ng-click="value_prod=(value_prod-1) || 1">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <input  disabled ng-model="value_prod" ng-init="value_prod=1" >
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-nom">
                                            <input type="checkbox" disabled checked>
                                        </td>
                                        <td class="item-subtotal">
                                            <span class="amount ng-binding" ng-model="price_prod" 
                                            @if ($data->price_discount != 0) ng-init="price_prod='{{$data->price_discount}}' @else ng-init="price_prod='{{$data->price}}' @endif ">

                                            @{{product=value_prod*price_prod}} {{ trans('common.valut') }}

                                            </span> 
                                        </td>
                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-journal') }}</a> 
                                        </td>
                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <div class="i-arrows">

                                                    <div class="i-arrows i-arrows-up">
                                                        <button ng-click="value_prod = value_prod + 1">
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <div class="i-arrows i-arrows-down">
                                                        <button ng-click="value_prod=(value_prod-1) || 1">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <input disabled ng-model="value_prod" ng-init="value_prod=1" >
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-nom">
                                            <input type="checkbox" disabled checked>
                                        </td>
                                        <td class="item-subtotal">
                                            <span class="amount ng-binding" ng-model="price_tech" ng-init="price_tech='320'">@{{tech=value_prod*price_tech}} {{ trans('common.valut') }}</span> 
                                        </td>
                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-plomb') }}</a> 
                                        </td>
                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <div class="i-arrows">

                                                    <div class="i-arrows i-arrows-up">
                                                        <button ng-click="value_prod = value_prod + 1">
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <div class="i-arrows i-arrows-down">
                                                        <button ng-click="value_prod=(value_prod-1) || 1">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <input disabled ng-model="value_prod" ng-init="value_prod=1" >
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-nom">
                                            <input type="checkbox" disabled checked>
                                        </td>

                                        <td class="item-subtotal" ng-model="price_plomb" ng-init="price_plomb='280'">
                                            <span class="amount ng-binding">@{{plomb=value_prod*price_plomb}} {{ trans('common.valut') }}</span>
                                            <input value="@{{plomb}}" type="hidden">
                                        </td>
                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-cashier') }}</a> 
                                        </td>
                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <div class="i-arrows">

                                                <div class="i-arrows i-arrows-up">
                                                    <button ng-click="value_journal = value_journal + 1"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
                                                </div>

                                                <div class="i-arrows i-arrows-down">
                                                    <button ng-click="value_journal=(value_journal-1) || 1"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                                </div>
                                                
                                                <input disabled ng-model="value_journal" ng-init="value_journal=1" >
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-nom" >
                                            <input type="checkbox" checked ng-model="cashier.price_cashier" ng-true-value="'200'" ng-false-value="'0'">
                                        </td>
                                        <td class="item-subtotal" ng-model="price_journal" ng-init="price_journal='200'">
                                            <span class="amount ng-binding">
                                            @{{journal1=value_journal*price_journal}} 
                                            <span style="display:none">@{{journal=value_journal*cashier.price_cashier}} </span> 
                                            {{ trans('common.valut') }}
                                            </span> 
                                        </td>
                                    </tr>

                                    <tr class="item-row" >                                 
                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-exploitation') }}</a> 
                                        </td>
                                        <td class="item-quantity">
                                          <div class="quantity">
                                                <div class="i-arrows">

                                                <div class="i-arrows i-arrows-up">
                                                    <button ng-click="value_instr = value_instr + 1"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
                                                </div>

                                                <div class="i-arrows i-arrows-down">
                                                    <button ng-click="value_instr=(value_instr-1) || 1"><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                                </div>
                                                
                                                <input disabled ng-model="value_instr" ng-init="value_instr=1" >
                                                </div>
                                            </div>
                                        </td>
                                        <td class="item-nom" >
                                            <input type="checkbox" checked ng-model="exploit.price_exploit" ng-true-value="'150'" ng-false-value="'0'">
                                        </td>
                                        <td class="item-subtotal" ng-model="price_instr" ng-init="price_instr='150'">
                                            <span class="amount ng-binding">
                                            @{{instr1=value_instr*price_instr}}
                                            <span style="display:none">@{{instr=value_instr*exploit.price_exploit}} </span> 
                                            {{ trans('common.valut') }}
                                            </span> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>  
                            
                            <span class="col-xs-12 text-center">
                                <span class="pull-right total-price" ng-model="total">{{ trans('common.m-conc') }}: @{{total=product+tech+plomb+journal+instr}}</span>
                            </span>  
                        </div>
                                    <div class="modal-down">

                                        <form id="product-form" class="prod-fisc" role="form" method="post" action="index.php?action=main_cart&a=sendcart">
                                            <div class="form-container">
                                            <div class="row">

                                            <div class="title-group-parent grp-three">
                                                <div class="featured-slider-title title-group">
                                                    <h2>{{ trans('common.register') }}</h2>
                                                    <div class="after-title">
                                                        <span class="content-after-title"></span>
                                                    </div>
                                                    <div class="before-title after-title">
                                                        <span class="content-before-title content-after-title"></span>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.phone') }} *" type="text" value="" name="tel"></div>
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.m-fisc') }} *" type="text" value="" name="fisc"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.m-firm') }} " type="text" value="" name="firm"></div>
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.your-name') }} " type="text" value="" name="name"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12"><input class="form-control" placeholder="{{ trans('common.m-adress') }} " type="text" value="" name="adres"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12"><input class="form-control" placeholder="{{ trans('common.comment') }} " type="text" value="" name="comm"></div>
                                                </div>
                                            

                                            <div class="col-md-12">
                                                    <div class="buttons">
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary" type="submit" value="{{ trans('common.submit') }}">
                                                        </div>
                                                    </div>

                                            </div>

                                            </div>
</div>
                                        </form>

                                    </div>
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->


<!-- mobile-menu-area end -->
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
                            <li class="p-none si-no">
                                <a href="{{ route('get_slug', $data->parents{0}->slug)}}">{{ $data->parents{0}->name }}</a>
                            </li>
                            <li>
                                <a class="current" href="javascript:void(0)">{{$data->name}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
<section class="single-product-area sit">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 none-si-pro">
                        <div class="pro-img-tab-content tab-content">
                        
                            <div class="tab-pane active" id="image-1">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" href="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}">
                                        <img rel="image_src" src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>

                            @foreach($data->photos as $key=>$photo)
                                @if ($key == 0) @continue @endif
                                <div class="tab-pane" id="image-{{$key+1}}">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="uploaded/{{isset($photo->source) ? $photo->source : 'nophoto.png'}}" href="uploaded/{{isset($photo->source) ? $photo->source : 'nophoto.png'}}">
                                        <img src="uploaded/{{isset($photo->source) ? $photo->source : 'nophoto.png'}}" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="pro-img-tab-slider indicator-style2 product_img_min">

                            @foreach($data->photos as $key=>$photo)
                            <div class="item">
                                <a href="#image-{{$key+1}}" data-toggle="tab">
                                    <img src="uploaded/{{isset($photo->source) ? $photo->source : 'nophoto.png'}}" alt="" />
                                </a>
                            </div>

                            @endforeach

                        </div>


                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="cras">
                            <div class="product-name">
                                <h2>{{$data->name}}</h2>
                            </div>
                            <div class="short-description">
                                <p>{{$data->description_short}}</p>
                            </div>
                            
                            <div class="pre-box discount">
                            @if ($data->price_discount != 0)
                                <span class="price-old">{{$data->price}} {{ trans('common.valut') }}</span>
                                <span class="price-new">{{$data->price_discount}} {{ trans('common.valut') }}</span>
                            @else
                                <span class="price-new">{{$data->price}} {{ trans('common.valut') }}</span>
                            @endif
                            </div>
                            <div class="add-to-box1">
                                <div class="add-to-box add-to-box2">
                                    <div class="add-to-cart">
                                        <div class="input-content">
                                            <label for="qty">{{ trans('common.quant') }}:</label>
                                                <div class="i-arrows">

                                                    <div class="i-arrows i-arrows-up">
                                                        <button ng-click="value_prod = value_prod + 1">
                                                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                                                        </button>
                                                    </div>

                                                    <div class="i-arrows i-arrows-down">
                                                        <button ng-click="value_prod=(value_prod-1) || 1">
                                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <input disabled ng-model="value_prod" ng-init="value_prod=1" class="input-text qty" value="@{{value_prod}}">
                                                </div>
                                        </div>
                                        <div class="product-icon product-icon-buy">
                                            <a href="#productModal" data-toggle="modal" data-original-title="Quick View">
                                                {{ trans('common.payment') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-cart-img">
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="vkontakte,facebook,gplus,odnoklassniki" data-counter=""></div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="tab_area sing-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="text">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('common.desc-prod') }}</a>
                                </li>

                                @if ( $data->parents{0}->id == 40)
                                <li role="presentation">
                                    <a href="#characteristic" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('common.caracterist') }}</a>
                                </li>
                                @endif

                                @if ($data->instructions != "")
                                <li role="presentation">
                                    <a href="#instructions" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('common.instructions') }}</a>
                                </li>
                                @endif

                                @if ($data->soft != "")
                                <li role="presentation">
                                    <a href="#software" aria-controls="profile" role="tab" data-toggle="tab">{{ trans('common.soft') }}</a>
                                </li>
                                @endif
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    {!!$data->description!!}
                                </div>
                                @if ( $data->parents{0}->id == 40)
                                <div role="tabpanel" class="tab-pane" id="characteristic">
                                    <table class="table table-bordered table_carac">
                                        <tbody>
                                            @foreach($data->features as $feature)
                                            @if (!isset($feature->getValuesArrayAttribute()[$feature->pivot->value]))
                                                @continue
                                            @endif
                                            <tr>
                                                <td style="width: 35%;">{{ $feature->name }}</td>
                                                <td>{{ $feature->getValuesArrayAttribute()[$feature->pivot->value] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif

                                <div role="tabpanel" class="tab-pane" id="instructions">
                                    {!! $data->instructions !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="software">
                                    {!! $data->soft !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @if ($data->recommended->count() > 0))
        <section class="mostview-area mostview-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-group-parent grp-three">
                            <div class="featured-slider-title title-group">
                                <h2>{{ trans('common.recommend') }}</h2>
                                <div class="after-title">
                                    <span class="content-after-title"></span>
                                </div>
                                <div class="before-title after-title">
                                    <span class="content-before-title content-after-title"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="active-slider active3 indicator-style2">
                        @foreach($data->recommended as $product)
                            <div class="col-md-3">
                                @include('partials.oneproduct')
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif
</div>
@stop

@section('productValidation_angular')
<script src="js/angular.min.js" ></script>
  <script>
  angular.module('myApp', [])
    .controller('myCtrl', ['$scope', function($scope) {
      $scope.exploit = {
       price_exploit : '150'
     };
    $scope.cashier = {
       price_cashier : '200'
     };
    }]);
</script>
         


    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
    <script>
        $('#product-form') //инициализируем валидатор форм
                .formValidation({
                    fields: {
                      
                        tel: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите телефон.'
                                },
                                numeric: {
                                    message: 'Телефон должен состоять только из цифр.'
                                },
                                stringLength: {
                                 min: 5,
                                 max: 20,
                                 message: 'Телефон должен содержать не меньше 5 цифр.'
                                }
                            }
                         },
                         fisc: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите фискальный код.'
                                },
                                numeric: {
                                    message: 'Фискальный код должен состоять только из цифр.'
                                },
                                stringLength: {
                                 min: 5,
                                 max: 20,
                                 message: 'Фискальный код должен содержать не меньше 5 цифр.'
                                }
                            }
                         }
                    }
                })
                .on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();
        
                    var $form = $(e.target),
                        formData = new FormData(),
                        params   = $form.serializeArray(),
                        fv    = $(e.target).data('formValidation');
                        
                    $.each(params, function(i, val) {
                        formData.append(val.name, val.value);
                    });
                    
                    $.ajax({
                            url: $form.attr('action'),
                            data: formData,
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function(result) {
//                              alert("Вы подписаны!");
                                var confirmlink = lg+"/order-confirmed";
                                window.location.replace(confirmlink);
                                    
                            }   
                        });

                });
    </script>
@stop

@section('product_share')
    <meta property="og:url"           content="http://cab37e30.ngrok.io/{{$data->slug}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$data->name}}" />
    <meta property="og:description"   content="{!!$data->description_short!!}" />
    <meta property="og:image"         content="{{ URL::to('/') }}/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" />

     <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="{{ URL::to('/') }}/{{$data->slug}}">
    <meta name="twitter:title" content="{{$data->name}}">
    <meta name="twitter:description" content="{!!$data->description_short!!}">
    <meta name="twitter:image" content="{{ URL::to('/') }}/uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}">
@stop