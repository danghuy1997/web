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
                                <li><a href="<?= $this->Url->build('/user/dangki', true); ?>"><i class="fa fa-key"></i> Đăng ký</a></li>
                                <li><a href="<?= $this->Url->build('/product/quenmatkhau', true); ?>"><i class="fa fa-key"></i> Quên mật khẩu</a></li>
                            </ul>
                        </div>
                    </div>
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
                            <div class="user form large-9 medium-8 columns content">
    <!-- <form method="post" accept-charset="utf-8" action="/vidu1/user/add"> -->
        <?= $this->Form->create()?>
            <fieldset>
            <div class="input text required" style="color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;margin: 0;padding: 0;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('name'); ?>">Họ Tên</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="name" required="required" maxlength="30" id="name">
            </div>
            <div class="input text required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('user_name'); ?>">Tài Khoản</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="user_name" required="required" maxlength="100" id="user-name">
            </div>
            <div class="input password required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('password'); ?>">Mật Khẩu</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="password" name="password" required="required" id="password">
            </div>
            <div class="input email required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('email'); ?>">Email</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="email" name="email" required="required" maxlength="30" id="email">
            </div>
            <div class="input text required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('address'); ?>">Địa Chỉ</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="address" required="required" maxlength="255" id="address">
            </div>
            <div class="input number required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('tell'); ?>">Tell</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="number" name="tell" required="required" id="tell">
            </div>
            <div class="input text required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('sex'); ?>">Giới Tính</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="sex" required="required" maxlength="3" id="sex">
            </div>
            <div class="input number required" style="margin-top: 5px;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('status'); ?>">Trạng Thái</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="number" name="status" required="required" id="status">
            </div>
        </fieldset>
        <button style="float: right;text-transform: uppercase;box-shadow: none;background: #966600;width: 115px;height: 53px;" type="submit">ĐĂNG KÍ</button>    
    <!-- </form> -->
    <?= $this->Form->end() ?>
</div>
                    </div>
            </div>
        </div>
    </div>
