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
<div id="product" style="background-color: white;">
    <div class="main" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="breadcrumb-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <nav class="breadcrumb">
                                        <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                                        <span class="breadcrumb-item active">Chi tiết sản phẩm</span>
                                    </nav>
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div>
                    <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                    </script>
                    <link href="/Scripts/smoothproducts/smoothproducts.css" rel="stylesheet" type="text/css">
                    <script src="/Scripts/smoothproducts/smoothproducts.js" type="text/javascript"></script>
                    <script src="/app/services/productServices.js"></script>
                    <script src="/app/controllers/productController.js"></script>
                    <div class="product-detail clearfix relative ng-scope" ng-controller="productController" ng-init="initController(137101)">
                        <span us-spinner="{radius:5, width:3, length: 3}" class="ng-scope ng-hide">
                            <div class="spinner" role="progressbar" style="position: absolute; width: 0px; z-index: 2000000000; left: 50%; top: 50%;">
                                <div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-0-12;">
                                    <div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(0deg) translate(5px, 0px); border-radius: 1px;"></div>
                                </div>
                                <div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-1-12;">
                                    <div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(30deg) translate(5px, 0px); border-radius: 1px;"></div>
                                </div>
                                <div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-2-12;">
                                    <div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(60deg) translate(5px, 0px); border-radius: 1px;"></div>
                                </div>
                                <div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-3-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(90deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-4-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(120deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-5-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(150deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-6-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(180deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-7-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(210deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-8-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(240deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-9-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(270deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-10-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(300deg) translate(5px, 0px); border-radius: 1px;"></div></div><div style="position: absolute; top: -1px; opacity: 0.25; animation: 1s linear 0s infinite normal none running opacity-100-25-11-12;"><div style="position: absolute; width: 6px; height: 3px; background: rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 1px; transform-origin: left center; transform: rotate(330deg) translate(5px, 0px); border-radius: 1px;"></div></div></div></span>
                        <!--Begin-->
                        <div class="product-block clearfix">
                            <div class="row">
                                <?php  while($result = $single->fetch('assoc'))
                                    {
                                ?>
                                <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
                                    <?= $this->Html->image($result["image"]);?>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 clearfix">
                                    <h2 class="ng-binding"><?php echo $result["product_name"]?></h2>
                                    <div class="card-jfy-footer">    
                                        <div class="card-jfy-ratings">
                                          <div class="card-jfy-rating-layer top-layer checked" style="width: 100px;">
                                            <?= $this->Html->image($result["imgs"]);?>
                                          </div>
                                        </div>
                                    </div>
                                    <!-- ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) --><div class="price ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                        <!-- ngIf: IsPromotion==true --><div ng-if="IsPromotion==true" class="ng-scope">
                                            <span class="price-new ng-binding"><?=number_format($result["price1"]). ' VNĐ'?></span>
                                            <span class="price-old ng-binding"><?=number_format($result["price"]). ' VNĐ'?></span>
                                        </div><!-- end ngIf: IsPromotion==true -->
                                        <!-- ngIf: IsPromotion==false -->
                                        <span class="product-code ng-binding">Mã sản phẩm : <?php echo $result["product_id"]?></span>
                                    </div><!-- end ngIf: IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&&AllowPurchaseWhenSoldOut==false&&Quantity>0) -->
                                    <!-- ngIf: IsTrackingInventory==true&&AllowPurchaseWhenSoldOut==false&&Quantity<=0 -->
                                    <div class="des ng-binding" ng-bind-html="Summary|unsafe"><p><?php echo $result["describe"]?></p>
                                    </div>
                                    <div class="social">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style">
                                            <a class="addthis_button_facebook_like at300b" fb:like:layout="button_count">
                                                <div class="fb-like fb_iframe_widget" data-layout="button_count" data-show_faces="false" data-share="true" data-action="like" data-width="90" data-height="25" data-font="arial" data-href="http://kiet.runtime.vn/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html" data-send="false" style="height: 25px;" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=227481454296289&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fkiet.runtime.vn%2Fsan-pham%2Fdam-maxi-du-tiec-hoa-hong-nh028.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f126fc0684ba44" width="90px" height="25px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=227481454296289&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df1fcd599a84bb94%26domain%3Dkiet.runtime.vn%26origin%3Dhttp%253A%252F%252Fkiet.runtime.vn%252Ff2c99a6fd7afd5%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=http%3A%2F%2Fkiet.runtime.vn%2Fsan-pham%2Fdam-maxi-du-tiec-hoa-hong-nh028.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;share=true&amp;show_faces=false&amp;width=90" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div></a>

                                            <a class="addthis_button_google_plusone at300b" g:plusone:size="medium"><div class="google_plusone_iframe_widget" style="width: 90px; height: 25px;"><span><div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1559276927137" name="I0_1559276927137" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fkiet.runtime.vn&amp;url=http%3A%2F%2Fkiet.runtime.vn%2Fsan-pham%2Fdam-maxi-du-tiec-hoa-hong-nh028.html&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.qR4pPSSMk9M.O%2Fam%3DwQE%2Fd%3D1%2Frs%3DAGLTcCNNEK7rVIr4VFoH4mIg2pxfYX6bfw%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh&amp;id=I0_1559276927137&amp;_gfid=I0_1559276927137&amp;parent=http%3A%2F%2Fkiet.runtime.vn&amp;pfname=&amp;rpctoken=56295093" data-gapiattached="true"></iframe></div><g:plusone size="medium" lang="null" href="http://kiet.runtime.vn/san-pham/dam-maxi-du-tiec-hoa-hong-nh028.html" callback="_at_plusonecallback" data-gapiscan="true" data-onload="true" data-gapistub="true"></g:plusone></span></div></a>

                                            <a class="addthis_counter addthis_pill_style " href="#" style="display: inline-block;"><a class="atc_s addthis_button_compact">Share<span></span></a><a class="addthis_button_expanded" target="_blank" title="More" href="#"></a></a>
                                            <div class="atclear"></div></div>
                                            <script type="text/javascript" src="/scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                                            <!-- AddThis Button END -->
                                        </div>
                                        <!-- ngRepeat: item in ProductOptions -->
                                        <div class="quantity clearfix">
                                            <label>Số lượng</label>
                                            <div class="quantity-input">
                                                <input type="number" value="1" class="text ng-pristine ng-untouched ng-valid" ng-model="InputQuantity" ng-init="InputQuantity=1">
                                            </div>
                                        </div>
                                        <!-- <div class="action-cart ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                            <a href="<?= $this->Url->build('/product/cart', true); ?>?acction=add&id=<?php echo $result["product_id"] ?>
                                                "javascript:void(0)ng-click="addToCard()" class="btn btn-default"><i class="glyphicon glyphicon-shopping-cart"></i> Thêm giỏ hàng</a>
                                            <a href="javascript:void(0)" ng-click="addToCardBuy()" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Mua ngay</a>
                                        </div> -->
                                        <div class="action-cart ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                            <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                            <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                            <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                            <input type="hidden" value="<?php echo($result["price1"])?>" name="gia">
                                            <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                            <button class="btn btn-default" type="submit" name="btn_cart">Thêm vào giỏ</button>
                                            <?= $this->Form->end()?>
                                        </div>
                                        <div class="action-cart ng-scope" ng-if="IsTrackingInventory==false||AllowPurchaseWhenSoldOut==true || (IsTrackingInventory&amp;&amp;AllowPurchaseWhenSoldOut==false&amp;&amp;Quantity>0)">
                                            <?= $this->Form->create(__('checkout'),['action' => '/checkout'])?>
                                            <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                            <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                            <input type="hidden" value="<?php echo($result["price1"])?>" name="gia">
                                            <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                            <button class="btn btn-primary" type="submit" name="btn_check">Mua ngay</button>
                                            <?= $this->Form->end()?>
                                        </div>
                                        <div class="call">
                                            <p class="title">Để lại số điện thoại, chúng tôi sẽ tư vấn ngay sau từ 5 › 10 phút</p>
                                            <div class="input">
                                                <div class="input-group">
                                                    <input class="form-control ng-pristine ng-untouched ng-valid" ng-model="CustomerPhone" onblur="if(this.value=='')this.value='Nhập số điện thoại...'" onfocus="if(this.value=='Nhập số điện thoại...')this.value=''" value="Nhập số điện thoại..." type="text">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="button" ng-click="callMe()"><i class="fa fa-phone"></i> Gọi lại cho tôi</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="product-tabs">
                                <ul class="nav nav-tabs">
                                    <!-- ngRepeat: item in ProductTabs --><li role="presentation" ng-class="{'active':$index==0}" ng-repeat="item in ProductTabs" class="ng-scope active">
                                        <a data-toggle="tab" href="#tab1" class="ng-binding">Thông Số Kỹ Thuật</a>
                                    </li><!-- end ngRepeat: item in ProductTabs -->
                                </ul>
                                <div class="tab-content">
                                    <?php  while($result = $detail->fetch('assoc'))
                                        {
                                    ?>
                                     <div class="des ng-binding">
                                        <?= $this->Form->create(__('compare'),['action' => '/compare'])?>
                                        <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                        <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                        <input type="hidden" value="<?php echo $result["image"]?>" name="img">
                                        <input type="hidden" value="<?php echo $result["price1"]?>" name="gia">
                                        <input type="hidden" value="<?php echo $result["trademark_name"];?>" name="th">
                                        <input type="hidden" value="<?php echo $result["name_baohanh"];?>" name="bh">
                                        <input type="hidden" value="<?php echo $result["name_matso"];?>" name="ms">
                                        <input type="hidden" value="<?php echo $result["name_chongnuoc"];?>" name="cn">
                                        <input type="hidden" value="<?php echo $result["name_chucnang"];?>" name="chucnang">
                                        <input type="hidden" value="<?php echo $result["name_dang"];?>" name="dang">
                                        <input type="hidden" value="<?php echo $result["name_daydeo"];?>" name="day">
                                        <input type="hidden" value="<?php echo $result["name_gioitinh"];?>" name="gioitinh">
                                        <input type="hidden" value="<?php echo $result["name_kichthuoc"];?>" name="kichthuoc">
                                        <input type="hidden" value="<?php echo $result["name_kinh"];?>" name="kinh">
                                        <input type="hidden" value="<?php echo $result["name_may"];?>" name="may">
                                        <input type="hidden" value="<?php echo $result["name_matso"];?>" name="maso">
                                        <input type="hidden" value="<?php echo $result["name_xuatxu"];?>" name="xuatxu">
                                        <button class="btn btn-primary" type="submit" name="btn_check">So sánh</button>
                                        <?= $this->Form->end()?>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-8">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <p>
                                                </p>
                                                <table border="0" width="699" cellspacing="0" cellpadding="0">
                                                    <colgroup> </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <td style="height: 19px;width: 180px;background-color: #efeff1">
                                                                <div><strong>Thương Hiệu</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 180px;height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["trademark_name"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Bảo Hành</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 519px">
                                                                <div><?php echo $result["name_baohanh"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Bề Mặt</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_matso"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Chống Nước</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 519px">
                                                                <div><?php echo $result["name_chongnuoc"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Chức Năng</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_chucnang"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Dáng</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 519px">
                                                                <div><?php echo $result["name_dang"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Dây Đeo</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_daydeo"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Giới Tính</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;">
                                                                <div><?php echo $result["name_gioitinh"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Kích Thước</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_kichthuoc"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Kính</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 519px"><?php echo $result["name_kinh"]?></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Loại Máy</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_may"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px" height="19">
                                                                <div><strong>Mặt Số</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="width: 519px">
                                                                <div><?php echo $result["name_matso"]?></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><strong>Xuất Xứ</strong></div>
                                                            </td>
                                                            <td style="width: 1px">&nbsp;</td>
                                                            <td style="height: 19px;background-color: #efeff1">
                                                                <div><?php echo $result["name_xuatxu"]?></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="tab-pane fade in ng-scope active" ng-class="{'active':$index==0}" id="tab1" ng-repeat="item in ProductTabs">
                                        <div ng-bind-html="item.Content|unsafe" class="ng-binding">
                                            <textarea rows="15" cols="100" disabled="disabled">
                                            Thương hiệu :                   <?php echo $result["trademark_name"]?>

                                            Bảo hành :                         <?php echo $result["name_baohanh"]?>

                                            Bề mặt :                             <?php echo $result["name_bemat"]?>

                                            Chống nước :                     <?php echo $result["name_chongnuoc"]?>

                                            Chức năng :                       <?php echo $result["name_chucnang"]?>

                                            Dáng :                                <?php echo $result["name_dang"]?>

                                            Dây đeo :                           <?php echo $result["name_daydeo"]?>

                                            Giới tính :                           <?php echo $result["name_gioitinh"]?>

                                            Kích thước :                       <?php echo $result["name_kichthuoc"]?>

                                            Kính  :                                <?php echo $result["name_kinh"]?>

                                            Loại máy :                          <?php echo $result["name_may"]?>

                                            Mặt số :                             <?php echo $result["name_matso"]?>

                                            Xuất xứ:                            <?php echo $result["name_xuatxu"]?>
                                            </textarea>
                                        </div>
                                    </div> --><!-- end ngRepeat: item in ProductTabs -->
                                    <?php
                                        }
                                    ?> 
                                </div>
                                
                            </div>
                                <!--End-->
                                <div class="modal fade" id="modalMyCart" tabindex="-1" role="dialog" aria-labelledby="modalMyCartLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                    ×
                                                </button>
                                                <h4 class="modal-title ng-binding" id="modalMyCartLabel">Bạn có  sản phẩm trong giỏ hàng.</h4>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Tên sản phẩm</th>
                                                            <th>Số lượng</th>
                                                            <th>Giá tiền</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- ngRepeat: item in OrderDetails -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="total-price-modal">
                                                            Tổng cộng : <span class="item-total ng-binding">₫</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="row margin-top-10">
                                                <div class="col-lg-6">
                                                    <div class="comeback text-left"><a href="/san-pham.html">
                                                            <i class="fa fa-chevron-circle-left "></i> Tiếp tục mua hàng
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-right">
                                                    <div class="buttons btn-modal-cart">
                                                        <a class="btn btn-default" href="/thanh-toan.html">
                                                            Đặt hàng
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modalCallMe" tabindex="-1" role="dialog" aria-labelledby="modalCallMeLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h2>Cám ơn Qúy Khách đã liên hệ đặt hàng</h2>
                                            <p>Shop sẽ gọi lại để tư vấn cho Quý khách hàng trong thời gian sớm nhất</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                OK
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.menu-product li.child .open-close').on('click', function () {
                                $(this).removeAttr('href');
                                var element = $(this).parent('li');
                                if (element.hasClass('open')) {
                                    element.removeClass('open');
                                    element.children('ul').slideUp();
                                }
                                else {
                                    element.addClass('open');
                                    element.children('ul').slideDown();
                                }
                            });
                        });
                    </script>
                    <script src="/app/services/moduleServices.js"></script>
                    <script src="/app/controllers/moduleController.js"></script>
                    <!--Begin-->
                    <div class="box-sale-policy ng-scope" ng-controller="moduleController" ng-init="initSalePolicyController('Shop')">
                        <h3><span>Chính sách bán hàng</span></h3>
                        <div class="sale-policy-block">
                            <ul>
                                <li>Giao hàng TOÀN QUỐC</li>
                                <li>Thanh toán khi nhận hàng</li>
                                <li>Đổi trả trong <span>15 ngày</span></li>
                                <li>Hoàn ngay tiền mặt</li>
                                <li>Chất lượng đảm bảo</li>
                                <li>Miễn phí vận chuyển:<span>Đơn hàng từ 3 món trở lên</span></li>
                            </ul>
                        </div>
                        <br>
                        <h3><span>CỬA HÀNG</span></h3>
                        <div class="sale-policy-block">
                            <?php  while($result = $tostore->fetch('assoc'))
                                {
                            ?>
                            <div id="module_seller_info" class="pdp-block module">
                                <div class="seller-container" data-spm="seller">
                                    <div class="seller-name">
                                        <div class="seller-name__wrapper" data-spm-anchor-id="a2o4n.pdp.seller.i2.31555ae0o7vOCc">
                                            <div class="seller-name__title">Được bán bởi</div>
                                            <div class="seller-name__detail" data-spm="seller">
                                                <a class="pdp-link pdp-link_size_l pdp-link_theme_black seller-name__detail-name" target="_self" href="<?php echo $result["link"]?>"><?php echo $result["store_name"]?></a>
                                            </div>
                                        </div>
                                        <div class="seller-im-wrapper">
                                            <span class="seller-im-content">
                                                <span class="seller-im-icon">
                                                    <span class="lazada lazada-sis-tray-2 lazada-icon undefined"></span>
                                                </span>
                                                <span>Chat</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pdp-seller-info-pc">
                                        <div class="info-content">
                                            <div class="seller-info-title">Đánh giá tích cực</div>
                                            <div class="seller-info-value rating-positive ">77%</div>
                                        </div>
                                        <div class="info-content" data-spm-anchor-id="a2o4n.pdp.seller.i1.31555ae0o7vOCc">
                                            <div class="seller-info-title" data-spm-anchor-id="a2o4n.pdp.seller.i0.31555ae0o7vOCc">Giao đúng hạn</div>
                                            <div style="color:" class="seller-info-value ">99%</div>
                                        </div>
                                        <div class="info-content">
                                            <div class="seller-info-title">Tỷ lệ phản hồi</div>
                                            <div style="color:" class="seller-info-value ">99%</div>
                                        </div>
                                    </div>
                                    <div class="seller-link" data-spm="seller">
                                        <a class="pdp-link pdp-link_size_xs pdp-link_theme_blue" target="_self" href="<?php echo $result["link"]?>">ĐẾN GIAN HÀNG</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <br>
                        <div class="buy-guide">
                            <h3>Hướng Dẫn Mua Hàng</h3>
                            <ul>
                                <li>
                                    Mua hàng trực tiếp tại website
                                    <b class="ng-binding"> http://www.runtime.vn</b>
                                </li>
                                <li>
                                    Gọi điện thoại <strong class="ng-binding">
                                        12456789
                                    </strong> để mua hàng
                                </li>
                                <li>
                                    Mua tại Trung tâm CSKH:<br>
                                    <strong class="ng-binding">asasa</strong>
                                    <a href="/ban-do.html" rel="nofollow" target="_blank">Xem Bản Đồ</a>
                                </li>
                                <li>
                                    Mua sỉ/buôn xin gọi <strong class="ng-binding">
                                        12456789
                                    </strong> để được
                                    hỗ trợ.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End-->
                    <script type="text/javascript">
                    window.Shop = {"Name":"Web_banhang","Email":"kietdev1997@gmail.com","Phone":"12456789","Logo":"/Uploads/shop2198/images/logo2.png","Fax":"(08) 66 85 85 38","Website":"http://www.runtime.vn","Hotline":"12456789","Address":"asasa","Fanpage":null,"Google":null,"Facebook":null,"Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
                </script>
                <div id="left_column">
                    <div class="block left-module">
                        <p class="title_block">Sản phẩm tương tự</p>
                        <div class="block_content">
                            <?php  while($result = $relatest->fetch('assoc'))
                                {
                            ?>
                            <ul class="products-block best-sell">
                                <li class="clearfix">
                                    <div class="products-block-left">
                                        <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?= $this->Html->image($result["image"]);?></a>
                                    </div>
                                    <div class="products-block-right">
                                        <p class="product-name">
                                            <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?php echo $result["product_name"]?></a>
                                        </p>
                                        <p class="product-price">
                                            <span class=""><?=number_format($result["price1"]). 'VNĐ'?></span>
                                            <span class="price old-price"><?=number_format($result["price"]). 'VNĐ'?></span>
                                        </p>
                                        <p class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </p>
                                    </div>

                                </li>
                            </ul>
                            <?php 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="comments" class="comments-area" style="margin-top: 60px; box-sizing: border-box; font-family: "Poppins", sans-serif;line-height: 20px;color: #000;font-weight: 400;background: #fff;">
        <h3 style="text-transform: initial; font-size: 20px">ĐÁNH GIÁ SẢN PHẨM</h3>
        <ol class="comment-list list-unstyled" style="padding-left: 0; list-style: none; margin-bottom: 10px; margin-top: 0; box-sizing: border-box; display: block;list-style-type: decimal;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;padding-inline-start: 40px; font-family: "Poppins", sans-serif;line-height: 20px;color: #000;font-weight: 400;">
            <?php  while($result = $comment->fetch('assoc'))
                {
            ?>
            <li class="comment-single media" style="margin-top: 30px; display: flex; align-items: flex-start; box-sizing: border-box; text-align: -webkit-match-parent; list-style: none; ">
                <div class="comment-author-thumb mr-3 mr-sm-4" style="margin-right: 1.5rem!important; box-sizing: border-box; display: block; text-align: -webkit-match-parent; list-style: none; ">
                    <?= $this->Html->image($result["avata_username"]);?> 
                </div>
                <div class="comment-content media-body" style="background-color: #f7f7f7; ">
                    <div class="comment-meta d-flex justify-content-between align-items-top" style="justify-content: space-between!important; display: flex!important; ">
                        <div class="comment-title" style="box-sizing: border-box;">
                            <h6 style="font-size: 15px;margin-bottom: 5px;text-transform: capitalize; color: #292929; line-height: 1;margin-top: 0;font-family: "Poppins", sans-serif;font-weight: 500;"><?php echo $result["username"]?></h6>
                            <span style="color: #333;"><span style="color: #333;" class="comment-date"><?php echo $result["day"]?></span> at <span style="color: #333;" class="comment-time"><?php echo $result["time"]?></span></span>
                        </div>
                        <div class="comment-reply" style="font-size: 12px;font-weight: 600;text-transform: capitalize; color: #292929;">
                            <a href="#"><span>Reply</span></a>
                        </div>
                    </div>
                    <p style="margin-top: 10px; margin-bottom: 0; font-size: 14px;line-height: 25px; margin-left: 0;margin-right: 0;"><?php echo $result["detail_comment"]?></p>
                </div>
            </li>
            <br>
            <?php
                }
            ?>
        </ol> <!-- end of comment-list -->
        <a href="<?= $this->Url->build('/comment/add', true); ?>"> Viết đánh giá</a>
    </div>
</div>