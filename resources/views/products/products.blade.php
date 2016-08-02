@extends('body')
@section('centerbox')
        <!-- mobile-menu-area end -->
        <div class="top-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb"> 
                            <li class="p-none">
                                <a href="/">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a class="current" href="javascript:void(0);">Кассовые аппараты</a>
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
<!--                                <div class="block-title">
                                    <h2>Price</h2>
                                </div>
                                <div class="widget shop-filter">
                                    <div class="info_widget">
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="amount" name="price"  />

                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                                <div class="filter-attribute-container">
                                    <div class="block-title">
                                        <h2>Price</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Calvin Klein (9)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Diesel (8)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Polo (1)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Tommy Hilfiger (1)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
<!--                                 <div class="filter-attribute-container">
                                    <div class="block-title">
                                        <h2>Color</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">red (8)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">green (2)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">blue (2)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">black (2)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="filter-attribute-container ">
                                    <div class="block-title">
                                        <h2>Категории товаров</h2>
                                    </div>
                                    <div class="layered-content no_cb">
                                        <div class="cen-shop">
                                            <ul>
                                                <li >
                                                    <a class="a-filter add-filter" href="#">Кассовые аппараты (10)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Купюросчетные машинки (9)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Детекторы валют (3)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Сканеры (1)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Весы (1)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Денежные ящики (1)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Чековая лента (1)</a>
                                                </li>
                                                <li>
                                                    <a class="a-filter add-filter" href="#">Все в одном( ПК+Монитор) (1)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div></div></div>

                                    <div class="shop-around margin-b-20">
                                        <div class="all-shop2-area">
                                            <div class="filter-attribute-container">

                                    <div class="block-title">
                                        <h2>Ширина ленты</h2>
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
                                        <h2>Тип аппарата</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">Портативный</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">Стационарный</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">Фискальный</a>
                                                </li>
                                                <li class="item_filter">
                                                    <a class="a-filter add-filter" href="javascript:void(0);">Регистратор</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>Питание</h2>
                                    </div>
                                    <div class="layered-content">
                                        <div class="cen-shop">
                                            <ul>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">С аккумулятором</a></li>
                                                <li class="item_filter"><a class="a-filter add-filter" href="javascript:void(0);">Без аккумулятора</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-title">
                                        <h2>Интефейс</h2>
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
                                        <h2>Бренд</h2>
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
                          <!--  <div class="save-up shop2-up">
                                <a href="#">
                                    <img src="img/banners/banner_left.jpg" alt="">
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="features-tab fe-again">
                                  <!-- Nav tabs -->
<!--                                     <div class="shop-all-tab top-shop-n">
                                        <div class="two-part an-tw">
                                            <ul class="nav tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i> Grid</a></li>
                                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-align-justify"></i> List</a></li>
                                            </ul>
                                            <div class="shop5">
                                                <label>Show</label>
                                                <select>
                                                    <option value="">12</option>
                                                    <option value="">24</option>
                                                    <option value="">36</option>
                                                </select>
                                                 per page        
                                            </div>
                                        </div>
                                        <div class="sort-by an-short">
                                            <div class="shop6">
                                                <label>Sort By</label>
                                                <select>
                                                    <option value="">Position</option> 
                                                    <option value="">Name</option>
                                                    <option value="">Price</option>
                                                </select>
                                                <a href="#"><i class="fa fa-long-arrow-up"></i></a> 
                                            </div>
                                        </div>
                                    </div> -->
                                  <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                            <div class="row">
                                                <div class="shop-tab">
                                                    <!-- single-product start -->
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price">
                                                                        <span class="price-new new2">150 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="http://spb-kassa.ru/images/%D0%90%D0%BB%D1%8C%D1%84%D0%B0%20400/%D0%B0%D0%BB%D1%8C%D1%84%D0%B0_400%D0%BA.jpg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">Кассовые аппараты</a>
                                                                    </h2>
<!--                                                                     <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price non">
                                                                        <span class="price-new">70 лей</span>
                                                                        <span class="price-old">100 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="http://www.wmsteh.com/detect/image/pro1500ir.jpg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">детектор валют</a>
                                                                    </h2>
<!--                                                                     <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-1.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price">
                                                                        <span class="price-new new2">70 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="http://alkir-service.ru/wp-content/uploads/2013/07/EC-410.jpeg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">Денежные ящики</a>
                                                                    </h2>
                                                                   <!--  <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price non">
                                                                        <span class="price-new">90 лей</span>
                                                                        <span class="price-old">100 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="https://stepprint.ru/files/uploads/PressFoto_131351_StepPrint.jpg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">чековая лента</a>
                                                                    </h2>
                                                                    <!-- <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-1.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price">
                                                                        <span class="price-new new2">170 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="http://axis-ua.com/published/publicdata/WEBASYSTUKDEMO/attachments/SC/products_pictures/157_88.jpg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">купюросчетная машина</a>
                                                                    </h2>
                                                                    <!-- <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div class="slider-one">
                                                            <div class="single-product">
                                                                <div class="products-top">
                                                                    <p class="price special-price">
                                                                        <span class="price-new new2">110 лей</span>
                                                                    </p>
                                                                    <div class="product-img">
                                                                        <a href="/product">
                                                                            <img class="primary-image" alt="" src="http://www.1kkt.ru/file/UtZiKRjJ2Q/iA9YXN5VPu.jpg">
                                                                        </a>
                                                                    </div>
<!--                                                                     <div class="ratings">
                                                                        <a class="add" href="" data-toggle="tooltip" title="add to Cart"> <i class="fa fa-shopping-cart"></i></a>   
                                                                        <a href="" class="wishlist" data-toggle="tooltip" title="add to wish List"><i class="fa fa-heart"></i></a>
                                                                       <a href="" class="wishlist" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-retweet"></i></a>
                                                                        <a href="#productModal" class="search2" title="Quick View" data-toggle="modal"><i class="fa fa-search"></i></a>
                                                                    </div> -->
                                                                </div>
                                                                <div class="content-box again">
                                                                    <h2 class="name">
                                                                        <a href="/product">Кассовые аппараты</a>
                                                                    </h2>
                                                                    <!-- <div class="price-box">
                                                                        <a href="#"><img alt="" src="img/icon/stars-2.png"></a>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!--                                         <div role="tabpanel" class="tab-pane" id="profile">
                                            <div class="row sho">
                                                <div class="li-item">
                                                    <div class="col-md-4 col-sm-4 col-xs-12 col-shop">
                                                        <div class="single-product shop6">
                                                            <div class="products-top shop7">
                                                                <p class="price special-price">
                                                                    <span class="price-new new2">150 лей</span>
                                                                </p>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-image" alt="" src="img/product/10-539x761.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-12 col-shop">
                                                        <div class="f-fix">
                                                            <div class="content-box pro2">
                                                                <h2 class="product-name feil">
                                                                    <a href="#">Fusce aliquam</a>
                                                                </h2>
                                                                <div class="shop-next">
                                                                    <a href="#">
                                                                        <img class="#" src="img/icon/stars-1.png" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="desc">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
                                                            <div class="p-box">
                                                                <span class="special-price">$200</span>
                                                            </div>
                                                            <div class="product-icon">
                                                                <a href="#">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="li-item">
                                                    <div class="col-md-4 col-sm-4 col-xs-12 col-shop">
                                                        <div class="single-product shop6">
                                                            <div class="products-top shop7">
                                                                <p class="price special-price">
                                                                    <span class="price-new new2">70 лей</span>
                                                                </p>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-image" alt="" src="img/product/8-539x761.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-12 col-shop">
                                                        <div class="f-fix">
                                                            <div class="content-box pro2">
                                                                <h2 class="product-name feil">
                                                                    <a href="#">exerci tation</a>
                                                                </h2>
                                                                <div class="shop-next">
                                                                    <a href="#">
                                                                        <img class="#" src="img/icon/stars-1.png" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="desc">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
                                                            <div class="p-box">
                                                                <span class="special-price">$200</span>
                                                            </div>
                                                            <div class="product-icon">
                                                                <a href="#">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="li-item">
                                                    <div class="col-md-4 col-sm-4 col-xs-12 col-shop">
                                                        <div class="single-product shop6">
                                                            <div class="products-top shop7">
                                                                <p class="price special-price">
                                                                    <span class="price-new new2">$140</span>
                                                                </p>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-image" alt="" src="img/product/15-539x761.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-12 col-shop">
                                                        <div class="f-fix">
                                                            <div class="content-box pro2">
                                                                <h2 class="product-name feil">
                                                                    <a href="#">facilisis</a>
                                                                </h2>
                                                                <div class="shop-next">
                                                                    <a href="#">
                                                                        <img class="#" src="img/icon/stars-1.png" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="desc">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
                                                            <div class="p-box">
                                                                <span class="special-price">$200</span>
                                                            </div>
                                                            <div class="product-icon">
                                                                <a href="#">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="li-item">
                                                    <div class="col-md-4 col-sm-4 col-xs-12 col-shop">
                                                        <div class="single-product shop6">
                                                            <div class="products-top shop7">
                                                                <p class="price special-price">
                                                                    <span class="price-new new2">$130</span>
                                                                </p>
                                                                <div class="product-img">
                                                                    <a href="#">
                                                                        <img class="primary-image" alt="" src="img/product/1-539x761.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8 col-xs-12 col-shop">
                                                        <div class="f-fix">
                                                            <div class="content-box pro2">
                                                                <h2 class="product-name feil">
                                                                    <a href="#">Lorem ipsum</a>
                                                                </h2>
                                                                <div class="shop-next">
                                                                    <a href="#">
                                                                        <img class="#" src="img/icon/stars-1.png" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="desc">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
                                                            <div class="p-box">
                                                                <span class="special-price">$200</span>
                                                            </div>
                                                            <div class="product-icon">
                                                                <a href="#">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#">
                                                                    <i class="fa fa-retweet"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div> -->
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
                                        <!-- <div class="col-sm-6 text-right">Showing 1 to 6 of 18 (3 Pages)</div> -->
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