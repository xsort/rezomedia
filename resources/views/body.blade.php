<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" ng-app="myApp"> 
<head>
    <base href="{{ URL::to('/') }}"/>
        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rezomedia - Integrarea sistemelor de casa si control</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=.5, user-scalable=no">
        @yield('product_share')

        <!-- favicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        
        <!-- Google Fonts
        ============================================ -->        
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
       
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
        <link rel="stylesheet" href="css/style.css?ver=1">

        <link rel="stylesheet" href="css/custom.css?ver=1">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="css/responsive.css?ver=1">
        <!-- modernizr JS
        ============================================ -->        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
   
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7&appId=1786619678226339";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    


    
            
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
        
        @yield('contactGmap_validation')
        @yield('productValidation_angular')
        <!-- main JS
        ============================================ -->        
        <script src="js/main.js"></script>
        <!-- Chatra {literal} -->
        <script>
            ChatraID = 'gKtuMXLajPCx3JzNa';
            (function(d, w, c) {
                var n = d.getElementsByTagName('script')[0],
                    s = d.createElement('script');
                w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                s.async = true;
                s.src = (d.location.protocol === 'https:' ? 'https:': 'http:')
                    + '//call.chatra.io/chatra.js';
                n.parentNode.insertBefore(s, n);
            })(document, window, 'Chatra');
        </script>
        <!-- /Chatra {/literal} -->

        @yield('scripts')
</body>
</html>