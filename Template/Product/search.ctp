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
<div id="collection">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <nav class="breadcrumb">
                                        <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                                        <span class="breadcrumb-item active">Tìm kiếm</span>
                                    </nav>
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div>
                    <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                    </script>
                    <div class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">Kết quả tìm kiếm với '<?php $ten=$_POST["tensp"]; echo $ten ?>'</span>
                        </h2>
                        <!-- PRODUCT LIST -->
                        <ul class="row product-list grid filter">
                        <?php while($result = $search->fetch('assoc'))
                            {
                        ?>
                            <li class="col-md-3 col-sm-6 col-xs-12">
                                <div class="product-container product-resize fixheight" style="height: 298px;">
                                    <div class="left-block image-resize" style="height: 221px;">
                                        <div class="label-product label-sale" style="margin-right: 209px; margin-top: 4px;"><?= $this->Html->image($result["avata"]);?></div>
                                        <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?= $this->Html->image($result["image"]);?></a>
                                        <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Xem chi tiết" class="compare" href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"></a>
                                            <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/noi-com-dien-panasonic-sr-ga721wra.html"></a>
                                        </div>
                                    <div class="add-to-cart">
                                        <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                        <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                        <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                        <input type="hidden" value="<?php echo($result["price1"])?>" name="gia">
                                        <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                        <button class="add-to-car" type="submit" name="btn_cart" onclick="return confirm('San pham da duoc them vao gio hang')">Thêm vào giỏ</button>
                                        <?= $this->Form->end()?>
                                    </div>
                                    <!-- <div class="price-percent-reduction2 ng-binding">
                                        <div class="name" style="margin-top: 8px;"><?php echo $result["species_name"]?></div>
                                    </div> -->
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"]?>&trademark_id=<?php echo $result["trademark_id"]?>"><?php echo $result["product_name"]?></a></h5>
                                        <div class="content_price">
                                            <span class="price product-price"><?=number_format($result["price1"]). ' VNĐ'?></span>
                                            <span class="price old-price"><?=number_format($result["price"]). ' VNĐ'?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                </div>
        </div>
    </div>
</div>                    
</div>