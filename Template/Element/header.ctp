<?php
    $session = $this->getRequest()->getSession(); 
    $cart =  $session->read('giohang');
    $session->write('giohang', $cart);

    $username = $session->read('username');
?>
<div class="wrapper page-home">
    <div id="header" class="header">
        <section class="top-link clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav navbar-nav topmenu-contact pull-left">
                        <li><i class="fa fa-phone"></i> <span>Hotline:12456789</span></li>
                    </ul>
                        <ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">
                            <li class="order-check"><a href="/kiem-tra-don-hang.html"><i class="fa fa-pencil-square-o"></i> Bán hàng với Market</a></li>
                            <li class="order-check"><a href="<?= $this->Url->build('/product/hoantat', true);?>"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                            <li class="order-cart"><a href="<?= $this->Url->build('/product/cart', true);?>"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <li class="account-login"><a href="<?= $this->Url->build('/product/dangnhap', true);?>"><i class="fa fa-sign-in"></i> Đăng nhập </a></li>
                            <li class="account-register"><a href="<?= $this->Url->build('/product/dangki', true);?>"><i class="fa fa-key"></i> Đăng ký </a></li>
                            <?php
                                if($session->check('username') && $session->read('username')){
                            ?>
                            <li class="account-info">
                                <a href="" style="color: black;"><?php echo $username ?></a>
                                <a class="account-logout"><a href="<?= $this->Url->build('/product/dangxuat', true);?>">Thoát</a>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    <div class="show-mobile hidden-lg hidden-md">
                        <div class="quick-user">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="inner-toggle">
                                    <ul class="login links">
                                        <li>
                                            <a href="<?= $this->Url->build('/product/dangki', true);?>"><i class="fa fa-sign-in"></i> Đăng ký</a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build('/product/dangnhap', true);?>"><i class="fa fa-key"></i> Đăng nhập</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="quick-access">
                            <div class="quickaccess-toggle">
                                <i class="fa fa-list"></i>
                            </div>
                            <div class="inner-toggle">
                                <ul class="links">
                                    <li><a id="mobile-wishlist-total" href="/kiem-tra-don-hang.html" class="wishlist"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>
                                    <li><a href="/gio-hang.html" class="shoppingcart"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        </section>
        <!-- MAIN HEADER -->
        <div class="container main-header">
            <div class="row">
                <div class="col-xs-12 col-sm-3 logo">
                    <a href="<?= $this->Url->build('/product/index', true);?>" class="logo" title="Web_banhang">
                        <img src="../img/logo1.png" alt="Web_banhang" title="Web_banhang" style="margin-left: 69px; margin-top: 2px;">
                    </a>
                    <h1 style="display: none;">
                        Web_banhang
                    </h1>
                </div>
                <div class="col-xs-7 col-sm-7 header-search-box">
                    <div class="search-box">
                        <?= $this->Form->create(__('search'),['class' => 'search form-inline', 'action' => '/search',])?>
                        <!-- <form class="search form-inline" action="<?= $this->Url->build('/product/search', true);?>" method="POST"> -->
                            <div class="form-group input-serach">
                                <input type="text" placeholder="search" name="tensp"/>
                            </div>
                            <button id="btnsearch" class="pull-right btn-search" type="submit" name="search" id="search">
                                <span class="hidden-400">Tìm kiếm</span>
                                <span class="show-400"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                        <!-- </form> -->
                        <?= $this->Form->end()?>
                    </div>
                </div>
            <!-- <div class="col-xs-7 col-sm-7 header-search-box">
                <div class="search-box">
                    <?= $this->Form->create(__('search'),['class' => 'search form-inline'])?>
                        <div class="form-group input-serach">
                            <input type="text" placeholder="Search" name="tensp">
                            <button id="btnsearch" class="pull-right btn-search" type="submit" name="search" id="search">
                                <span class="hidden-400">Tìm kiếm</span>
                                <span class="show-400"><i class="fa fa-search" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <?= $this->Form->end()?>
                </div>
            </div> -->
                <div class="col-xs-5 col-sm-2 group-button-header new-login">
                    <div class="btn-cart" id="cart-block">
                        <a title="My cart" href="<?= $this->Url->build('/product/cart', true); ?>">Giỏ hàng</a>
                        <span class="text-show">Giỏ hàng</span>
                        <span class="notify notify-right"></span>
                        <div class="cart-block">
                            <div class="cart-block-content">
                                <h5 class="cart-title">Bạn hiện có sản phẩm</h5>
                                <div class="cart-block-list">
                                    <?php
                                        $total = 0;
                                        foreach ($cart as $key => $sp) {
                                            $money = $sp["price"] * $sp["sl"];
                                            $total += $money;
                                    ?>
                                    <ul>
                                        <li class="product-info">
                                            <div class="p-left">
                                                <a href="javascript:void(0);" class="remove_link" onclick="RemoveItemCard(137102,0)"></a>
                                                <a href="">
                                                    <?= $this->Html->image($sp["img"]);?>
                                                </a>
                                            </div>
                                            <div class="p-right">
                                                <p class="p-name"><a href="/san-pham/dam-body-lap-the-tay-dai.html"><?=$sp["name"] ?></a></p>
                                                <p class="p-rice"><?= number_format($sp["price"],0 ,'.','.'). ' VNĐ' ?></p>
                                                <p>Số lượng: <?=$sp["sl"] ?></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="toal-cart">
                                    <span>Tổng tiền</span>
                                    <span class="toal-price pull-right"><?= number_format($total,0 ,'.','.'). ' VNĐ'?></span>
                                </div>
                                <div class="cart-buttons">
                                    <a href="<?= $this->Url->build('/product/checkout', true);?>" class="btn-check-out">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>