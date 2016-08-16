@extends('body')
@section('centerbox')

  <!-- mobile-menu-area end -->
        <div class="top-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="p-none">
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a class="current" href="{{route('get-contacts')}}">{{ trans('common.contacts') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="top-map-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-area">
                            <div class="contact-map">
                                <div id="hastech"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">
                            <h2>{{ trans('common.contacts') }}</h2>
                            <h3>{{ trans('common.our-adres') }}</h3>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <address> {{ trans('common.adres') }}: <br> {{ trans('common.main-adres') }} </address>
                                    </div>
                                    <div class="col-sm-3">
                                        <strong>{{ trans('common.phone') }}:</strong>
                                        <br>
                                        {{ trans('common.main-phone') }}
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ trans('common.contact-form') }}</h3>
                            </div>

                            <form data-toggle="validator__"  id="contact-form" class="cendo fv-form fv-form-bootstrap" novalidate="novalidate" role="form" method="post" action="{{ route('send-feedback') }}">

                                {!! Form::token() !!}

                                <div class="form-group">
                                    <label class="col-md-2 control-label">{{ trans('common.your-name') }}</label>
                                    <div class="col-md-10"><input class="form-control" type="text" value="" name="name"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">{{ trans('common.email') }}</label>
                                    <div class="col-md-10"><input class="form-control" type="email" value="" name="email"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">{{ trans('common.your-message') }}</label>
                                    <div class="col-md-10"><textarea class="form-control" type="text" rows="10" name="message"></textarea></div>
                                </div>

                                <div class="col-md-12">
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <input class="btn btn-primary" type="submit" value="{{ trans('common.send') }}">
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="icon-slider-area">
            <div class="container">
                <div class="row">          
                    <div class="col-md-12">
                        <div class="item_all indicator-style3">
                            <a href="#"><img src="img/logo-slider/brand1-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand2-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand3-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand4-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand5-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand1-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand2-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand3-175x72.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->
@stop

@section('contactGmap_validation')
        <!-- google map api
        ============================================ -->
    
    <script src="js/formValidation.min.js"></script>
    <script src="js/validate_bootstrap.js"></script>
     <script>
        $('#contact-form') //инициализируем валидатор форм
                .formValidation({
                    fields: {
                        name: {
                             validators: {
                                notEmpty: {
                                    message: 'Введите имя.'
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

                        email: {
                            validators: {
                                notEmpty: {
                                   message: 'Введите Адрес электронной почты.'
                                },
                                emailAddress: {
                                   message: 'Адрес электронной почты был введен неправильно.'
                                }
                            }
                        },
                        
                        message: {
                            validators: {
                                notEmpty: {
                                    message: 'Введите ваше сообщение.'
                                },
                                stringLength: {
                                 min: 5,
                                 max: 20,
                                 message: 'Ваше сообщение должен содержать не меньше 5 символов.'
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
                                alert('{{ trans('common.sended') }}');
                            }   
                        });

                });
    </script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFvnaQ4d5-UsONtpw9s5zPHPdVQ4Ee20k&callback=initMap" type="text/javascript"></script>
 <script>
            var myCenter=new google.maps.LatLng(47.014659, 28.8556382);
            function initialize()
            {
                var mapProp = {
                  center:myCenter,
                  scrollwheel: false,
                  zoom:17,
                  mapTypeId:google.maps.MapTypeId.ROADMAP
                  };
                var map=new google.maps.Map(document.getElementById("hastech"),mapProp);
                var marker=new google.maps.Marker({
                  position:myCenter,
                    animation:google.maps.Animation.BOUNCE,
                  icon:'img/map-marker.png',
                    map: map,
                  });

                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
 </script>
@stop