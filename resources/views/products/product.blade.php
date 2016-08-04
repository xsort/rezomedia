
@extends('body')
@section('centerbox')
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog" ng-app="modal_app">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                        <div class="modal-up">
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
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-product') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value_prod" ng-init="value_prod='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>
                                        
                                        <td class="item-nom">
                                            <input type="checkbox" disabled checked>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding" ng-model="price_prod" ng-init="price_prod='{{$data->price}}'">@{{product=value_prod*price_prod}} {{ trans('common.valut') }}</span> 
                                        </td>

                                    </tr>
                                    <tr class="item-row">

                                        

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-journal') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value_prod" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
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
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-plomb') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value_prod" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>
                                        
                                        <td class="item-nom">
                                            <input type="checkbox" disabled checked>
                                        </td>

                                        <td class="item-subtotal" ng-model="price_plomb" ng-init="price_plomb='280'">
                                            <span class="amount ng-binding">@{{plomb=value_prod*price_plomb}} {{ trans('common.valut') }}</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-cashier') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value_journal" ng-init="value_journal='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>
                                        
                                        <td class="item-nom">
                                            <input type="checkbox" checked >
                                        </td>



                                        <td class="item-subtotal" ng-model="price_journal" ng-init="price_journal='50'">
                                            <span class="amount ng-binding"> @{{journal=value_journal*price_journal}} {{ trans('common.valut') }}</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">

                                        

                                        <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td>

                                        <td class="item-name">
                                            <a href="javascript:void(0)">{{ trans('common.m-exploitation') }}</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value_instr" ng-init="value_instr='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>
                                        
                                        <td class="item-nom">
                                            <input type="checkbox"  checked>
                                        </td>

                                        <td class="item-subtotal" ng-model="price_instr" ng-init="price_instr='190'">
                                            <span class="amount ng-binding">@{{instr=value_instr*price_instr}} {{ trans('common.valut') }}</span> 
                                        </td>

                                    </tr>

                                </tbody>
                            </table>  
                            <span class="col-xs-12 text-center">
                                <span class="pull-right total-price">{{ trans('common.m-conc') }}: @{{total=product+tech+plomb+journal+instr}}</span>
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
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.m-firm') }} *" type="text" value="" name="firm"></div>
                                                    <div class="col-md-6"><input class="form-control" placeholder="{{ trans('common.your-name') }} *" type="text" value="" name="name"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12"><input class="form-control" placeholder="{{ trans('common.m-adress') }} *" type="text" value="" name="adres"></div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-12"><input class="form-control" placeholder="{{ trans('common.comment') }} *" type="text" value="" name="comm"></div>
                                                </div>
                                            

                                            <div class="col-md-12">
                                                    <div class="buttons">
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary" type="submit" value="{{ trans('common.submit') }}">
                                                        </div>
                                                    </div>
                                            </div></div>
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
                                        <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="" class="simpleLens-big-image">
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

                            <!-- <div class="item">
                                <a href="#image-1" data-toggle="tab">
                                    <img src="uploaded/{{isset($data->photos{0}) ? $data->photos{0}->source : 'nophoto.png'}}" alt="" />
                                </a>
                            </div>

                            <div class="item"><a href="#image-2" data-toggle="tab"><img src="http://spb-kassa.ru/images/%D1%8D%D0%BA%D1%80_2102_%D0%BC%D0%BA/%D1%8D%D0%BA%D1%80_2102%D0%BC%D0%BA.jpg" alt="" /></a></div>

                            <div class="item"><a href="#image-3" data-toggle="tab"><img src="http://www.dial-union.ru/images/stories/virtuemart/product/kkm_mercury-115k.jpg" alt="" /></a></div>

                            <div class="item"><a href="#image-4" data-toggle="tab"><img src="http://spb-kassa.ru/images/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA.jpg" alt="" /></a></div> -->

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
                                            <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
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
                                <a href="#">
                                    <img alt="" src="img/shopping-cart/Screenshot_2.png">
                                </a>
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

@stop

@section('productValidation_angular')
<script src="js/angular.min.js" ></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
    <script>
        $('#product-form') //инициализируем валидатор форм
                .formValidation({
                    fields: {
                        comm: {
                            validators: {
                                notEmpty: {
                                   message: 'Введите ваш комментарий'
                                },
                            
                            stringLength: {
                                 min: 5,
                                 max: 200,
                                 message: 'Комментарий должен содержать не меньше 5 символов.'
                                }
                                }
                            },
                        
                        firm: {
                            validators: {
                                notEmpty: {
                                   message: 'Введите название фирмы'
                                }
                            }
                        },
                        name: {
                             validators: {
                                notEmpty: {
                                    message: 'Введите ваше имя'
                                },
                                 stringLength: {
                                 min: 3,
                                 max: 20,
                                 message: 'Имя должно содержать не меньше 3 символов.'
                                },
                                regexp: {
                                   regexp: /^[a-zA-Zа-яА-Я ]+$/,
                                   message: 'Имя должно содержать только буквы'
                                }
                             }
                         },
                        adres: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите адрес.'
                                },
                                stringLength: {
                                 min: 3,
                                 max: 20,
                                 message: 'Адрес должен содержать не меньше 3 символов.'
                                }
                             }
                         },
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
