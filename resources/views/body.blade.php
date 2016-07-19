<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" ng-app> 
<head>
    <base href="{{ URL::to('/') }}"/>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Cendo | Home 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        
        <!-- Google Fonts
        ============================================ -->        
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
       
        <!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- font-awesome CSS
        ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- ui CSS
        ============================================ -->
        <link href="css/jquery-ui.css" rel="stylesheet">
        <!-- Image Zoom CSS
        ============================================ -->
        <link rel="stylesheet" href="css/img-zoom/jquery.simpleLens.css">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
        ============================================ -->        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=.5, user-scalable=no">
    
   
</head>
<body>
    


    
            
        @include('partials.header')
        
            @yield('centerbox') 

    @include('partials.footer')

            
        <!-- start scrollUp
        ============================================ -->
        <div id="toTop">
            <i class="fa fa-chevron-up"></i>
        </div>
        <!-- end scrollUp
        ============================================ -->
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
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img class="secondary-image" alt="" src="img/product/8-539x761.jpg">
                                    </div>
                                </div><!-- .product-images -->

                                <div class="cras">
                                    <div class="product-name">
                                        <h1>Ut wisi enim</h1>
                                    </div>
                                    <div class="pro-rating cendo-pro">
                                        <div class="pro_one">
                                            <img src="img/icon/stars-1.png" alt="">
                                        </div>
                                        <p class="rating-links quick2">
                                            <a href="#">1 Reviews</a>
                                        </p>
                                    </div>
                                    <p class="availability in-stock">
                                        Product Code: Product 3
                                    </p>
                                    <p class="availability in-stock2">
                                        Availability:In stock
                                    </p>
                                    <div class="short-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio...</p>
                                    </div>
                                    <div class="pre-box quick2">
                                        <span class="special-price">$155.00</span>
                                    </div>
                                    <div class="add-to-box1">
                                        <div class="add-to-box add-to-box2">
                                            <div class="add-to-cart">
                                                <div class="input-content">
                                                    <label for="qty">Quantity:</label>
                                                    <input id="qty" class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                                </div>
                                                <div class="product-icon quick2">
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
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- END QUICKVIEW PRODUCT -->

        <!-- jquery
        ============================================ -->        
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->        
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
        ============================================ -->        
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
        ============================================ -->        
        <script src="js/jquery-price-slider.js"></script>
        <!-- Img Zoom js -->
        <script src="js/img-zoom/jquery.simpleLens.min.js"></script>            
        <!-- meanmenu JS
        ============================================ -->        
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
        ============================================ -->        
        <script src="js/owl.carousel.min.js"></script>
        <!-- jquery.ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- scrollUp JS
        ============================================ -->        
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Nivo slider js
        ============================================ -->        
        <script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/home.js" type="text/javascript"></script>
        <!-- plugins JS
        ============================================ -->  

        <script src="js/plugins.js"></script>
        @yield('contactGmap')
        <!-- main JS
        ============================================ -->        
        <script src="js/main.js"></script>


</body>
</html>