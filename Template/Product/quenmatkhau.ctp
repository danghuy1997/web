<div id="nav-top-menu" class="nav-top-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="box-vertical-megamenus">
                <div class="box-vertical-megamenus menu-quick-select">
                 <h4 class="title click-menu active">
                    <span class="title-menu">Danh mục sản phẩm</span>
                    <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home no-home">
                        <?php  while($result = $catalogies->fetch('assoc'))
                            {
                        ?>
                        <ul class='vertical-menu-list'>
                            <li class="has-child level0">
                                <a class='dropdown-toggle has-category parent' href='<?php echo $result["link"]?>'>
                                    <span><?php echo $result["catalog_name"]?></span>
                                </a>
                            </li>
                        </ul class='vertical-menu-list'>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        <div id="main-menu-new" class="col-sm-12 col-md-9 main-menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#new-menu" aria-expanded="false" aria-controls="navbar">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#">MENU</a>
                    </div>
                    <div id="new-menu" class="navbar-collapse collapse">
                        <ul class='menu t-menu nav'>
                            <?php  while($result = $menu->fetch('assoc'))
                                {
                            ?>
                            <li class="level0"><a class='' href='<?php echo $result["link"]?>'><i class="<?php echo $result["icon"]?>"></i><span><?php echo $result["menu_name"]?></span></a></li>
                            <?php
                                }
                            ?>
                        </ul class='menu t-menu nav'>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
    </div>
    <!-- userinfo on top-->
    <div id="form-search-opntop">
        
    </div>
    <!-- userinfo on top-->
    <!-- CART ICON ON MMENU -->
    <div id="shopping-cart-box-ontop">
        <a href="/gio-hang.html"></a>
        <span class="icon-cart-ontop"></span>
        <span class="cart-items-count">0</span>
        <span class="text">Giỏ hàng</span>
        <div class="shopping-cart-box-ontop-content">
            
        </div>
    </div>
</div>
</div>
</div>
<div class="main">
        <div class="container">
            <div class="row">
                    <div class="col-md-3">
<div class="menu-account">
    <h3>
        <span>
            Tài khoản
        </span>
    </h3>
    <ul>
        <li><a href="<?= $this->Url->build('/product/dangnhap', true); ?>"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
        <li><a href="<?= $this->Url->build('/product/dangki', true); ?>"><i class="fa fa-key"></i> Đăng ký</a></li>
        <li><a href="<?= $this->Url->build('/product/quenmatkhau', true); ?>"><i class="fa fa-key"></i> Quên mật khẩu</a></li>
    </ul>
</div>                    </div>
                    <div class="col-md-9">

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                    <span class="breadcrumb-item active">Quên mật khẩu</span>
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<script type="text/javascript">
    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
</script>
<script src="/app/services/accountServices.js"></script>
<script src="/app/controllers/accountController.js"></script>
<div class="foget-password-content clearfix ng-scope" ng-controller="accountController" ng-init="initController()">
    <h1 class="page-heading"><span>Quên mật khẩu</span></h1>
    <!-- ngIf: IsError -->
    <!-- ngIf: IsSuccess -->
    <!-- ngIf: InValid -->

    <div class="alert alert-info fade in">
        <button data-dismiss="alert" class="close"></button>
        <i class="fa-fw fa fa-check"></i>
        Điền vào email của bạn để yêu cầu một mật khẩu mới. Một Email sẽ được gửi đến địa chỉ này để xác minh địa chỉ Email của bạn.
    </div>

    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
        <form class="form-horizontal ng-pristine ng-valid-email ng-invalid ng-invalid-required" ng-submit="forgetPassword()">
            <div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" ng-model="Email" ng-required="true" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Mã xác nhận</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Captcha" ng-required="true" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <img class="img-captcha" id="imgCaptcha" alt="captcha" src="/Captcha.ashx?t=1">
                    <a class="refresh-captcha" id="btnRefreshCapcha" href="javascript:void(0);">
                        <i class="glyphicon glyphicon-refresh"></i>
                    </a>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">Gửi mật khẩu</button>
                    <a href="<?= $this->Url->build('/product/dangnhap', true); ?>">Quay lại đăng nhập</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#btnRefreshCapcha").click(function () {
            GetImageCaptcha();
        });
    });
    function GetImageCaptcha() {
        var date = new Date();
        var t = date.getTime();
        $("#imgCaptcha").attr("src", "/Captcha.ashx?t=" + t);
    }
</script>
                    </div>
            </div>
        </div>
    </div>