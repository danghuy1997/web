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
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/khuyenmai', true);?>"><i class="fa fa-percent"></i><span>Khuyến mãi</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/sanphamnoibat', true);?>"><i class="glyphicon glyphicon-asterisk"></i><span>Nổi bật</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/sanphambanchay', true);?>"><i class="fa fa-flash"></i><span>Bán chạy</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/xuhuong', true);?>"><i class="glyphicon glyphicon-star-empty"></i><span>Xu hướng</span></a></li>
                            <li class="level0"><a class='' href=''><i class=""></i><span>Tin tức</span></a></li>
                            <li class="level0"><a class='' href=''><i class=""></i><span>Liên hệ</span></a></li>
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
<div class="main" style="background-color: white;">
        <div class="container">
            <div class="row">
                    <div class="col-md-3">
                        <div class="menu-account">
                            <h3 style="background-color: black;">
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
                    <span class="breadcrumb-item active">Đăng kí tài khoản</span>
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
<div class="register-content clearfix ng-scope" ng-controller="accountController" ng-init="initRegisterController()">
    <h1 class="page-heading"><span>Đăng ký tài khoản</span></h1>
    <!-- ngIf: IsError -->
    <!-- ngIf: IsSuccess -->
    <!-- ngIf: InValid -->
    <div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
    	<?=$this->Form->create(__('dangky'),['class' => 'form-horizontal ng-pristine ng-invalid ng-invalid-required ng-valid-email'])?>
            <h2><span>Thông tin tài khoản</span></h2>
            <div class="form-group">
                <label for="Code" class="col-sm-3 control-label">Tài khoản<span class="warning">(*)</span></label>
                <div class="col-sm-9">
                    <input name="username" type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Code" required="true">
                </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-sm-3 control-label">Email<span class="warning">(*)</span></label>
                <div class="col-sm-9">
                    <input name="email" type="email" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" ng-model="Email" required="true">
                </div>
            </div>
            <div class="form-group">
                <label for="Password" class="col-sm-3 control-label">Mật khẩu<span class="warning">(*)</span></label>
                <div class="col-sm-9">
                    <input name="password" type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Password" required="true">
                </div>
            </div>
             <div class="form-group">
                <label for="Password" class="col-sm-3 control-label">Nhập lại mật khẩu<span class="warning">(*)</span></label>
                <div class="col-sm-9">
                    <input name="pass" type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Password" required="true">
                </div>
            </div>
            <h2>Thông tin cá nhân</h2>
            <div class="form-group">
                <label for="Name" class="col-sm-3 control-label">Họ tên<span class="warning">(*)</span></label>
                <div class="col-sm-9">
                    <input name="name" type="text" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Name" required="true">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                <div class="col-sm-9">
                    <input name ="address"type="text" class="form-control ng-pristine ng-untouched ng-valid" ng-model="Phone">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Giới tính</label>
                <div class="col-sm-9">
                    <select name="sex" class="radio" ng-model="GenderId" ng-options="item.Id as item.Name for item in Genders">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Điện thoại</label>
                <div class="col-sm-9">
                    <input name ="tell"type="text" class="form-control ng-pristine ng-untouched ng-valid" ng-model="Phone">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                    <?php $this->Form->button(__("Đăng kí"), array('tyoe' => 'submit', 'class' => 'btn btn-primary'))?>
                </div>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>
                    </div>
            </div>
        </div>
    </div>