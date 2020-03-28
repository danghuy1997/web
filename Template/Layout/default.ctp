<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Siêu Thị Đồng Hồ</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= $this->Html->script('jquery-1.11.3.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('theme-script') ?>
    <?= $this->Html->script('option_selection.min') ?>
    <?= $this->Html->script('theme-script') ?>
    <?= $this->Html->script('select2.min.js') ?>
    <?= $this->Html->script('jquery.bxslider.min.js')?>
    <?= $this->Html->script('owl.carousel.min.js')?>
    <?= $this->Html->script('modernizr.min.js')?>
    <?= $this->Html->script('jquery.cookie.js')?>
    <?= $this->Html->script('jquery.countdown.min.js')?>
    <?= $this->Html->script('jquery.fancybox.js')?>
    <?= $this->Html->script('jquery.flexslider-min.js')?>
    <?= $this->Html->script('jquery.plugin.js')?>
    <?= $this->Html->script('jquery.actual.min.js')?>
    <?= $this->Html->script('jquery-ui.min.js')?>
    <?= $this->Html->script('html5shiv.js')?>
    <?= $this->Html->script('jquery-migrate-1.2.0.min.js')?>
    <?= $this->Html->script('jquery.touchSwipe.min.js')?>
    <?= $this->Html->script('fixheightproductv2.js')?>
    <?= $this->Html->script('mycard.js')?>
    <?= $this->Html->script('jquery.lazyload.min.js')?>
    <?= $this->Html->script('angular.min.js')?>
    <?= $this->Html->script('angular-sanitize.min.js')?>
    <?= $this->Html->script('spin.min.js')?>
    <?= $this->Html->script('angular-spinner.min.js')?>
    <?= $this->Html->script('angular-loading-spinner.js')?>
    <?= $this->Html->script('appMain.js')?>
    <?= $this->Html->script('directive.js')?>
    <?= $this->Html->script('angular-summernote.js')?>
    <!-- <?= $this->Html->script('paging.js')?> -->
    <?= $this->Html->script('ajaxServices.js')?>
    <?= $this->Html->script('alertsServices.js')?>
    <?= $this->Html->script('theme-script.js')?>
    <?= $this->Html->script('login.js')?>
    <?= $this->Html->script('productServices.js')?>
    <?= $this->Html->script('productController.js')?>
    <?= $this->Html->script('moduleController.js')?>
    <?= $this->Html->script('moduleServices.js')?>
    <!-- <script src="/assets/100002/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/100002/js/bootstrap/js/bootstrap.min.js"></script> -->
     <!--<script src="/assets/100002/js/option_selection.min.js"></script>-->
    <!--<script src="/assets/100002/js/api.jquery.min.js"></script>-->
    <!-- <script src='/assets/100002/js/select2.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery.bxslider.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/owl.carousel/owl.carousel.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/modernizr.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery.cookie.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery.countdown.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/fancybox/jquery.fancybox.js?v=42' type='text/javascript'></script> -->
    <!--<script src='img/jquery.lazyload.js?v=42' type='text/javascript'></script> -->
    <!-- <script src='/assets/100002/js/jquery.flexslider-min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery.plugin.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery.actual.min.js?v=42' type='text/javascript'></script>
    <script src='/assets/100002/js/jquery-ui/jquery-ui.min.js?v=42' type='text/javascript'></script>

    <script src="/assets/100002/js/html5shiv.js"></script>
    <script src="/assets/100002/js/jquery-migrate-1.2.0.min.js"></script>
    <script src='/assets/100002/js/jquery.touchSwipe.min.js' type='text/javascript'></script> -->
    <!--<script src="/assets/100002/js/haravan.plugin.1.0.min.js"></script>-->
   <!--  <script async="" defer="defer" data-target=".product-resize" data-parent=".products-resize" data-img-box=".image-resize" src="/assets/100002/js/fixheightproductv2.js?v=42"></script> -->
    <!--------------CSS----------->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('reset.css') ?>
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('font-awesome.min') ?> 
    <?= $this->Html->css('jquery-ui.css') ?> 
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('jquery.bxslider.css') ?>
    <?= $this->Html->css('jquery.fancybox.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('select2.min.css') ?>
    <?= $this->Html->css('responsive.css') ?>
    <!-- <?= $this->Html->css('base.css') ?> -->
    <!-- <link href="/assets/100002/js/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/100002/fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet" /> -->
    <!-- <link href='/assets/100002/css/reset.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/css/flexslider.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/css/animate.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/css/jquery.bxslider.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/js/fancybox/jquery.fancybox.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/js/jquery-ui/jquery-ui.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/js/owl.carousel/owl.carousel.css?v=42' rel='stylesheet' type='text/css' media='all' />
    <link href='/assets/100002/css/select2.min.css?v=42' rel='stylesheet' type='text/css' media='all' />

    <script src="/Scripts/common/mycard.js" type="text/javascript"></script>
    <script src="/Scripts/lazyLoad/jquery.lazyload.min.js" type="text/javascript"></script>

    <script src="/Scripts/angularJS/angular.min.js"></script>
    <script src="/Scripts/angularJS/angular-sanitize.min.js"></script>
    <script type="text/javascript" src="/Scripts/angular-loading-spinner/spin.min.js"></script>
   <script type="text/javascript" src="/Scripts/angular-loading-spinner/angular-spinner.min.js"></script>
   <script type="text/javascript" src="/Scripts/angular-loading-spinner/angular-loading-spinner.js"></script>
    <script src="/app/appMain.js"></script>
    <script src="/app/directives/directive.js"></script>
    <script src="/app/directives/angular-summernote.js"></script>
    <script src="/app/directives/paging.js"></script>
    <script src="/app/services/ajaxServices.js"></script>
    <script src="/app/services/alertsServices.js"></script>
 -->
   <!--  <script src='/assets/100002/js/theme-script.js?v=42' type='text/javascript'></script> -->
    <!-- <link href="http://static.runtime.vn/App_Themes/RUN002/style.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="http://static.runtime.vn/App_Themes/RUN002/responsive.css" rel="stylesheet" type="text/css" /> -->
</head>
<body ng-app="appMain" style="" class="home option2">
<div id="fb-root"></div>
    <!--Begin header-->
    <?= $this->element('header') ?>
        <!-- END header -->
    <!--Begin menu-->
        <!-- END menu -->
        <!-- <div id="divAdLeft" style="position: fixed; top: 150px; left:10%;">
            <a href="http://casio-bello.com/" target=""><img alt="float - left" src="../img/baner/2.png" width="150"></a>
            </div>
            <div id="divAdRight" style="position: fixed; top: 150px; right:10%;">
            <a href="http://casio-bello.com/" target=""><img alt="float - right" src="../img/baner/2.png" width="150"></a>
            </div> -->
    <!--begin content-->
    <?= $this->fetch('content')?>
        <!-- END content -->
     <!--begin footer-->
    <?= $this->element('footer')?>
        <!-- END footer -->
    <div style="display: none;" id="loading-mask">
        <div id="loading_mask_loader" class="loader">
            <img alt="Loading..." src="/Images/ajax-loader-main.gif" />
            <div>
                Please wait...
            </div>
        </div>
    </div>
    <a href="#" class="scroll_top" title="Scroll to Top" style="display: none;">Scroll</a>  
</body>
</html>
