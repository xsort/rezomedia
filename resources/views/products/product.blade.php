@extends('body')
@section('centerbox')
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
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
                                        <th class="item-nom">&nbsp;</th>
                                        
                                        <!-- <th class="item-thumb">&nbsp;</th> -->
                                        <th class="item-name">Продукт</th>
                                        
                                        <th class="item-quantity">Количество</th>
                                        <th class="item-subtotal">Всего</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr class="item-row">
                                        <td class="item-nom">
                                            1 <input type="checkbox" disabled checked>
                                        </td>

                                        <!-- <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://iconspot.ru/image.php?width=512&height=512&crop=none&id=17227">
                                            </a>
                                        </td> -->

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Кассовый аппарат</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding">3000 лей</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-nom">
                                            2 <input type="checkbox" disabled checked>
                                        </td>

                                        <!-- <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/15905-200.png">
                                            </a>
                                        </td> -->

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Технический журнал</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding">200 лей</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-nom">
                                            3 <input type="checkbox" disabled checked>
                                        </td>

                                        <!-- <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://www.plomba.ru/images/1-0906.png">
                                            </a>
                                        </td> -->

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Пломба</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding">50 лей</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-nom">
                                            4 <input type="checkbox" checked>
                                        </td>

                                        <!-- <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="http://iconspot.ru/files/175155.png">
                                            </a>
                                        </td> -->

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Журнал кассира</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding">100 лей</span> 
                                        </td>

                                    </tr>

                                    <tr class="item-row">
                                        <td class="item-nom">
                                            5 <input type="checkbox" checked>
                                        </td>

                                       <!--  <td class="item-thumb">
                                            <a href="javascript:void(0)">
                                                <img src="https://cdn4.iconfinder.com/data/icons/books-booklets-and-manuals/400/manualrbook-512.png">
                                            </a>
                                        </td> -->

                                        <td class="item-name">
                                            <a href="javascript:void(0)">Ввод в эксплуатацию</a> 
                                        </td>

                                        <td class="item-quantity">
                                            <div class="quantity">
                                                <input min="1" type="number" ng-model="value" ng-init="value='1'" value="1" class="ng-pristine ng-valid ng-touched">
                                            </div>
                                        </td>

                                        <td class="item-subtotal">
                                            <span class="amount ng-binding">50 лей</span> 
                                        </td>

                                    </tr>
                                    </div>

                                    
                                </tbody>
                            </table>    
                        </div>
                                    <div class="modal-down">
                                        
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
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li class="p-none si-no">
                                <a href="/shop">Кассовые аппараты</a>
                            </li>
                            <li>
                                <a class="current" href="javascript:void(0)">Кассовый Аппарат ККМ ОКА-МК</a>
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
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg" href="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg">
                                        <img src="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-2">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="http://spb-kassa.ru/images/%D1%8D%D0%BA%D1%80_2102_%D0%BC%D0%BA/%D1%8D%D0%BA%D1%80_2102%D0%BC%D0%BA.jpg" href="http://spb-kassa.ru/images/%D1%8D%D0%BA%D1%80_2102_%D0%BC%D0%BA/%D1%8D%D0%BA%D1%80_2102%D0%BC%D0%BA.jpg">
                                        <img src="http://spb-kassa.ru/images/%D1%8D%D0%BA%D1%80_2102_%D0%BC%D0%BA/%D1%8D%D0%BA%D1%80_2102%D0%BC%D0%BA.jpg" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-3">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image="http://www.dial-union.ru/images/stories/virtuemart/product/kkm_mercury-115k.jpg" href="http://www.dial-union.ru/images/stories/virtuemart/product/kkm_mercury-115k.jpg">
                                        <img src="http://www.dial-union.ru/images/stories/virtuemart/product/kkm_mercury-115k.jpg" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane" id="image-4">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lightbox="roadtrip" data-lens-image=http://spb-kassa.ru/images/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA.jpg href="ihttp://spb-kassa.ru/images/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA.jpg">
                                        <img src="http://spb-kassa.ru/images/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA.jpg" alt="" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="pro-img-tab-slider indicator-style2 product_img_min">
                            <div class="item">
                                <a href="#image-1" data-toggle="tab">
                                    <img src="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item"><a href="#image-2" data-toggle="tab"><img src="http://spb-kassa.ru/images/%D1%8D%D0%BA%D1%80_2102_%D0%BC%D0%BA/%D1%8D%D0%BA%D1%80_2102%D0%BC%D0%BA.jpg" alt="" /></a></div>
                            <div class="item"><a href="#image-3" data-toggle="tab"><img src="http://www.dial-union.ru/images/stories/virtuemart/product/kkm_mercury-115k.jpg" alt="" /></a></div>
                            <div class="item"><a href="#image-4" data-toggle="tab"><img src="http://spb-kassa.ru/images/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA/%D0%BE%D0%BA%D0%B0_%D0%BC%D0%BA.jpg" alt="" /></a></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="cras">
                            <div class="product-name">
                                <h2>Кассовый аппарат ККМ ОКА-МК</h2>
                            </div>
<!--                             <div class="pro-rating cendo-pro">
                                <div class="pro_one">
                                    <img src="img/icon/stars-1.png" alt="">
                                </div>
                                <p class="rating-links">
                                    <a href="#">1 Reviews</a>
                                </p>
                            </div> -->
<!--                             <p class="availability in-stock">
                                Product Code: Product 3
                            </p> -->
<!--                             <p class="availability in-stock2">
                                Есть в наличии
                            </p> -->
                            <div class="short-description">
                                <p>Незаменима при выездной торговле. Имеет влагостойкую клавиатуру, светодиодный индикатор, калькулятор, работает от встроенного аккумулятора (с подзарядкой от сети переменного тока 220 В) или от любого внешнего источника тока напряжением 12-16 В. Элементная база К-МОП, процессор Winbond.  
Потребляемая мощность при средней эксплуатационной нагрузке - не более 6 Вт.</p>
                            </div>
                            <div class="pre-box">
                                <span class="special-price">3000 лей</span>
                            </div>
                            <div class="add-to-box1">
                                <div class="add-to-box add-to-box2">
                                    <div class="add-to-cart">
                                        <div class="input-content">
                                            <label for="qty">Количество:</label>
                                            <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                        </div>
                                        <div class="product-icon product-icon-buy">
                                            <a href="#productModal" data-toggle="modal" data-original-title="Quick View">
                                                Счет на оплату
                                            </a>
                                            <!-- <a href="#">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-retweet"></i>
                                            </a> -->
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
<!--                     <div class="col-md-3 col-sm-12">
                        <div class="related-title s-title">
                            <h2>
                                <span>Related</span>
                            </h2>
                        </div>
                        <div class="slider7 s-slider7 indicator-style2">
                            <div class="ma-box-content-all">
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/10-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">quis nostrud</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$155.00</span>
                                            <span class="old-price">$170.00 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/16-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">rutrum at</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$699.00</span>
                                            <span class="old-price">$800.00 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/4-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">sed diam </a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$88.00</span>
                                            <span class="old-price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/9-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">Ut wisi enim</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$99.00</span>
                                            <span class="old-price">$111.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ma-box-content-all">
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/10-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">quis nostrud</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$155.00</span>
                                            <span class="old-price">$170.00 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/16-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">rutrum at</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$699.00</span>
                                            <span class="old-price">$800.00 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/4-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">sed diam </a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$88.00</span>
                                            <span class="old-price">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="ma-box-content">
                                    <div class="product-img-right">
                                        <a href="#">
                                            <img class="primary-image" alt="" src="img/product/9-539x761.jpg">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name">
                                            <a href="#">Ut wisi enim</a>
                                        </h2>
                                        <div class="pro-rating">
                                            <div class="pro_one">
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fa fa-star-half-o"></i>
                                                </a>
                                            </div>
                                            <div class="pro_two">
                                                <a href="#">
                                                    <i class="fa fa-star-o"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="price-box h2">
                                            <span class="special-price">$99.00</span>
                                            <span class="old-price">$111.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Описание товара</a>
                                </li>
                                <li role="presentation">
                                    <a href="#characteristic" aria-controls="profile" role="tab" data-toggle="tab">Характеристики товара</a>
                                </li>
                                <li role="presentation">
                                    <a href="#instructions" aria-controls="profile" role="tab" data-toggle="tab">Инструкции</a>
                                </li>
                                <li role="presentation">
                                    <a href="#software" aria-controls="profile" role="tab" data-toggle="tab">Софт</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    Tremol M-KL самый модифицированный кассовый аппарат в TREMOL, который просматривается в новой версии всей линейки MCC Tremol M.
Большой удобный дисплей позволяет с легкостью пользоваться аппаратом. Быстрый запуск любого меню, большее разрешение, и хорошая зарядная батарея – вот основные характеристики топового кассового аппарата. Все фискальные устройства с Bluetooth имеют функцию запроса операционной системы Android, что позволяют клиенту контролировать устройства прямо с телефона или планшета.
                                </div>
                                <div role="tabpanel" class="tab-pane" id="characteristic">

                                    <table class="table table-bordered table_carac">
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Ширина ленты</td>
                                                <td>57 мм</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Тип аппарата</td>
                                                <td>стационарный </td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Питание</td>
                                                <td>аккумулятор 7.4V, 2200mA Li-Ion, от сети (220В)</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Интерфейсы подключения</td>
                                                <td>USB, RS232 (COM), Bluetooth, GSM/GPRS (опционально)</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <tr>
                                                <td style="width: 35%;">Бренд</td>
                                                <td>Tremol</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="instructions">
                                    Инструкции
                                </div>
                                <div role="tabpanel" class="tab-pane" id="software">
                                    Софт
                                </div>
                              <!--   <div role="tabpanel" class="tab-pane" id="profile">
                                    <form class="form-horizontal">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td style="width: 50%;">
                                                        <strong>demo</strong>
                                                    </td>
                                                    <td class="text-right">25/01/2016</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p class="text an-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet sem varius, fringilla erat a, blandit arcu. Cras sit amet justo eu erat imperdiet dictum ac eget nulla. Aliquam erat volutpat.</p>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star-o fa-stack-2x"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="text-right"></div>
                                        </div>
                                        <h2 class="write">Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input id="input-name" class="form-control" type="text" value="" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea id="input-review" class="form-control" rows="5" name="text"></textarea>
                                                <div class="help-block">
                                                    <span class="text-danger">Note:</span>
                                                    HTML is not translated!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label">Rating</label>
                                                    Bad 
                                                <input type="radio" value="1" name="rating">
                                                <input type="radio" value="2" name="rating">
                                                <input type="radio" value="3" name="rating">
                                                <input type="radio" value="4" name="rating">
                                                <input type="radio" value="5" name="rating">
                                                 Good
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-captcha">Enter the code in the box below</label>
                                                <input id="input-captcha" class="form-control" type="text" value="" name="captcha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <img class="table-img" alt="" src="img/icon/index.php.jpg">
                                            </div>
                                        </div>
                                        <div class="buttons si-button">
                                            <div class="pull-right">
                                                <button id="button-review" class="btn btn-primary" data-loading-text="Loading..." type="button">Continue</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mostview-area mostview-area2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-group-parent grp-three">
                            <div class="featured-slider-title title-group">
                                <h2>Мы рекомендуем</h2>
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
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price">
                                            <span class="price-new new2">$70.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg">
                                            </a>
                                        </div>
                                        <!-- <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">Кассовые аппараты</a>
                                        </h2>
                                        <!-- <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price">
                                            <span class="price-new new2">$90.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="http://www.wmsteh.com/detect/image/pro1500ir.jpg">
                                            </a>
                                        </div>
                                        <!-- <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">детектор валют</a>
                                        </h2>
                                        <!-- <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price non">
                                            <span class="price-new">$70.00</span>
                                            <span class="price-old">$100.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="http://alkir-service.ru/wp-content/uploads/2013/07/EC-410.jpeg">
                                            </a>
                                        </div>
                                       <!--  <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">денежные ящики</a>
                                        </h2>
                                        <!-- <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-1.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price non">
                                            <span class="price-new">$90.00</span>
                                            <span class="price-old">$100.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="https://stepprint.ru/files/uploads/PressFoto_131351_StepPrint.jpg">
                                            </a>
                                        </div>
                                       <!--  <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">чековая лента</a>
                                        </h2>
                                        <!-- <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-5.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price">
                                            <span class="price-new new2">$110.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="http://axis-ua.com/published/publicdata/WEBASYSTUKDEMO/attachments/SC/products_pictures/157_88.jpg">
                                            </a>
                                        </div>
                                        <!-- <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">купюросчетная машина</a>
                                        </h2>
                                        <!-- <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="slider-one">
                                <div class="single-product">
                                    <div class="products-top">
                                        <p class="price special-price non">
                                            <span class="price-new">$60.00</span>
                                            <span class="price-old">$70.00</span>
                                        </p>
                                        <div class="product-img">
                                            <a href="#">
                                                <img class="primary-image" alt="" src="http://www.1kkt.ru/file/UtZiKRjJ2Q/iA9YXN5VPu.jpg">
                                            </a>
                                        </div>
                                        <!-- <div class="ratings reload">
                                            <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                            <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                           <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                            <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                        </div> -->
                                    </div>
                                    <div class="content-box again">
                                        <h2 class="name">
                                            <a href="#">Кассовые аппараты </a>
                                        </h2>
                                       <!--  <div class="price-box">
                                            <a href="#"><img alt="" src="img/icon/stars-5.png"></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--         <div class="icon-slider-area">
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
        </div> -->

@stop