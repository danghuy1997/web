<div id="nav-top-menu" class="nav-top-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" id="box-vertical-megamenus">
                <div class="box-vertical-megamenus menu-quick-select">
                 <h4 class="title click-menu active">
                    <span class="title-menu">Danh mục sản phẩm</span>
                    <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                            <?php  while($result = $catalogies->fetch('assoc'))
                                {
                            ?>
                            <li class="has-child level0">
                                <a class="dropdown-toggle has-category parent" href="<?php echo $result["link"]?>">
                                    <span><?php echo $result["catalog_name"]?></span>
                                </a>
                                <ul class="level1 drop-menu">
                                    <?php  while($result = $catalogiessmall->fetch('assoc'))
                                        {
                                    ?>
                                    <li class="level1">
                                        <a class="" href="/san-pham/ao-so-mi-40422">
                                            <span><?php echo $result["catalogli_name"]?></span>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
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
                        <ul class='menu t-menu nav' style="margin-left: 280px; width: 100%;">
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/khuyenmai', true);?>"><i class="fa fa-percent"></i><span>Khuyến mãi</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/sanphamnoibat', true);?>"><i class="glyphicon glyphicon-asterisk"></i><span>Nổi bật</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/sanphambanchay', true);?>"><i class="fa fa-flash"></i><span>Bán chạy</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/xuhuong', true);?>"><i class="glyphicon glyphicon-star-empty"></i><span>Xu hướng</span></a></li>
                            <li class="level0"><a class='' href="<?= $this->Url->build('/product/blog', true);?>"><i class=""></i><span>Tin tức</span></a></li>
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
<!--Begin slide-->
<div class="slideshow">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
        <div class="col-md-9 ">
            <div id="home-slider">
                <div class="header-top-right">
                    <div class="homeslider">
                        <div class="bx-wrapper" style="max-width: 100%;">
                            <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 450px;">
                                <ul id="contenhomeslider" style="width: 515%; position: relative; transition-duration: 0.5s; transform: translate3d(-2700px, 0px, 0px);">
                                    <?php  while($result = $slide->fetch('assoc'))
                                        {
                                    ?>
                                    <li style="float: left; list-style: none; position: relative; width: 900px;" class="bx-clone">
                                        <a href="#">
                                            <img class="img-responsive" alt="<?php echo $result["queuen"]?>" <?= $this->Html->image($result["image"]);?>>
                                        </a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Begin-->
            <!--End-->
        </div>
    </div>
</div>
</div>
<!--End-->  
<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="#">
					<img class="img-responsive" alt="01" src="../img/baner/banner6.jpg">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="content-page">
    <div class="container"> 
            <div class="category-featured featured1">
        <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="/san-pham/thoi-trang-40412"><i class="fa fa-flash"></i>FLASH SALE</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse">
                            <?php  while($result = $timeflash->fetch('assoc'))
                                {
                            ?>
                            <span class="toggle-menu"></span>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a data-toggle="tab" href="#tab_2">KẾT THÚC TRONG</a></li>
                                    </ul>
                                     <div class="counter-wrapper days-3 clock-day-142502">
                                        <div class="days">
                                            <div class="number-wrapper">
                                                <span class="number">0</span>
                                            </div>
                                            <div class="ref-wrapper">Ngày</div>
                                        </div>
                                        <div class="hours">
                                            <div class="number-wrapper">
                                                <span class="number">00</span>
                                            </div>
                                            <div class="ref-wrapper">Giờ</div>
                                        </div>
                                        <div class="minutes">
                                            <div class="number-wrapper">
                                                <span class="number">00</span>
                                            </div>
                                            <div class="ref-wrapper">Phút</div>
                                        </div>
                                        <div class="seconds">
                                            <div class="number-wrapper">
                                                <span class="number">00</span>
                                            </div>
                                            <div class="ref-wrapper">Giây</div>
                                        </div>
                                    </div>
                                    <input id="deal_day_142502" value="<?php echo $result["day_end"]?>" type="hidden">
                                    <script>
                                    var time_deal = $('#deal_day_142502').val();
                                    var array_time = time_deal.split('_');
                                    var endDate = array_time[1];
                                    $('.clock-day-142502').countdown({
                                        date: endDate,
                                        render: function (data) {
                                            $(this.el).html
                                            ("<div class='days'><div class='number-wrapper'><span class='number'>" + this.leadingZeros(data.days, 0) + "</span></div><div class='ref-wrapper'>Ngày</div></div><div class='hours'><div class='number-wrapper'><span class='number'>" + this.leadingZeros(data.hours, 2) + "</span></div><div class='ref-wrapper'>Giờ</div></div><div class='minutes'><div class='number-wrapper'><span class='number'>" + this.leadingZeros(data.min, 2) + "</span></div><div class='ref-wrapper'>Phút</div></div><div class='seconds'><div class='number-wrapper'><span class='number'>" + this.leadingZeros(data.sec, 2) + "</span></div><div class='ref-wrapper'>Giây</div></div>");
                                            }
                                        });
                                    </script>
                                </div>
                                <?php
                            }
                            ?>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="product-featured clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-right-tab">
                            <div class="product-featured-tab-content">
                                <div class="tab-container">
                                    <div class="tab-panel active" id="tab_1">
                                        <div class="box-left">
                                            <?php  while($result = $avataflash->fetch('assoc'))
                                                {
                                            ?>
                                            <div class="banner-img">
                                                <?= $this->Html->image($result["avata"]);?>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        <div class="box-right">
                                            <ul class="product-list row">
                                                <?php  while($result = $productsale->fetch('assoc'))
                                                    {
                                                ?>
                                                    <li class="col-sm-4">
                                                        <div class="left-block">
                                                            <div class="label-product label-sale"><?= $this->Html->image($result["avata"]);?></div>
                                                            <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?= $this->Html->image($result["image"]);?></a>
                                                            <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Xem chi tiết" class="compare" href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"></a>
                                                                <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/dam-body-ca-tinh-voi-nhieu-mau-sac-hien-dai-tre-trung.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                                                <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                                                <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                                                <input type="hidden" value="<?php echo($result["pricesale"])?>" name="gia">
                                                                <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                                                <input type="hidden" value="<?php echo $result["trademark_id"];?>" name="th">
                                                                <button class="add-to-car" type="submit" name="btn_cart" onclick="return confirm('Sản phẩm đã được thêm vào giỏ hàng')">Thêm vào giỏ</button>
                                                                <?= $this->Form->end()?>
                                                            </div>
                                                            <div class="price-percent-reduction2 ng-binding">
                                                                <div class="name" style="margin-top: 8px;">SALE</div>
                                                            </div>
                                                        </div>
                                                         <h4 class="product-name"><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"]?>&trademark_id=<?php echo $result["trademark_id"]?>"><?php echo $result["product_name"]?></a></h4>
                                                            <p class="product-price">
                                                                <span class="price-new-price"><?= number_format($result["pricesale"],0 ,'.','.'). ' VNĐ'?></span>
                                                                <span class="price old-price"><?=number_format($result["price"],0 ,'.','.'). ' VNĐ' ?></span>
                                                            </p>
                                                        <div class="card-jfy-footer">    
                                                            <div class="card-jfy-ratings">
                                                              <div class="card-jfy-rating-layer top-layer checked" style="width: 45px;">
                                                                <?= $this->Html->image($result["imgs"]);?>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="tab-panel" id="tab_1_0">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_1">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_2">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_3">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_4">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_5">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_6">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_1_7">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/thoi-trang-40412"><img src="/Uploads/shop2198/images/banner/banner-product1.jpg" alt="Thời trang"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" style="margin-top: 3px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img class="img-responsive" alt="01" src="../img/baner/banner9.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<div class="blog-list news-home">
    <h2 class="page-heading">
        <nav class="navbar nav-menu show-brand">
            <div class="container">
                <div class="navbar-brand" style="width: 231px;">
                    <a href="/san-pham/the-thao-40397"><i class="fa fa-home"></i>   DANH MỤC CỬA HÀNG</a>
                </div>
                <span class="toggle-menu"></span>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a data-toggle="tab" href="#tab_2">Tất cả cửa hàng</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </h2>
    <div class="blog-list-wapper">
        <ul class="owl-carousel" style="margin-left: -19px;" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
            <?php  while($result = $stores->fetch('assoc'))
                {
            ?>
            <li class="col-sm-4" style="width: 288px;">
            <div class="left-block">
                <a href="<?php echo $result["link"]?>?store_id=<?php echo $result["store_id"] ?>"><?= $this->Html->image($result["avata"]);?></a>
                <br>
                <div class="card-jfy-footer">
                <h4 class="product-name" style="text-align: center;"><a href="<?php echo $result["link"]?>?store_id=<?php echo $result["store_id"] ?>"><?php echo $result["store_name"]?></a></h4>
            </div>
        </li>
           <?php
                }
           ?> 
        </ul>
    </div>
</div>
<div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img class="img-responsive" alt="01" src="../img/baner/banner14.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-featured featured3">
                <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="/san-pham/trang-suc-40416"><i class="fa fa-align-center" aria-hidden="true"></i>Danh Mục</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="product-featured clearfix">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="product-featured-tab-content">
                                <div class="tab-container">
                                    <div class="tab-panel active" id="tab_3">
                                        <div class="box-content">
                                            <ul class="product-list row">
                                                <?php  while($result = $catalogs->fetch('assoc'))
                                                    {
                                                ?>
                                                    <li class="col-sm-3">
                                                        <div class="right-block">
                                                            <h2 class="product-name"><a href="<?php echo $result["link"]?>?catalog_id=<?php echo $result["catalog_id"] ?>"><?php echo $result["catalog_name"]?></a></h2>
                                                        </div>
                                                        <div class="left-block">
                                                            <a href="<?php echo $result["link"]?>?catalog_id=<?php echo $result["catalog_id"] ?>"><?= $this->Html->image($result["avata"]);?></a>
                                                        </div>
                                                    </li>
                                                      <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img class="img-responsive" alt="01" src="../img/baner/0.jpg">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-featured featured4" style="margin-top: -20px;">
                <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand" style="width: 310px;"><a href="<?= $this->Url->build('/product/sanphamnoibat', true);?>"><i class="fa fa-snowflake-o"></i>Sản Phẩm Nổi Bật</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="product-featured clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-right-tab">
                            <div class="product-featured-tab-content">
                                <div class="tab-container">
                                    <div class="tab-panel active" id="tab_2">
                                        <div class="box-left">
                                            <div class="banner-img">
                                                <a href="/san-pham/the-thao-40397"><img src="../img/baner/5.jpg" alt="Thể thao"></a>
                                            </div>
                                        </div>
                                        <div class="box-right">
                                            <ul class="product-list row">
                                                 <?php  while($result = $featured->fetch('assoc'))
	                                                    {
	                                                ?>
                                                    <li class="col-sm-4">
                                                        <div class="right-block">
                                                            <h5 class="product-name">
                                                                <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?php echo $result["product_name"]?></a>
                                                            </h5>
                                                            <div class="content_price">
                                                                <span class="price product-price"><?=number_format($result["price1"]). ' VNĐ'?></span>
                                                                <span class="price old-price"><?=number_format($result["price"]). ' VNĐ'?></span>
                                                            </div>
                                                            <div class="card-jfy-footer">    
                                                                <div class="card-jfy-ratings">
                                                                  <div class="card-jfy-rating-layer top-layer checked" style="width: 45px;">
                                                                    <?= $this->Html->image($result["imgs"]);?>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="left-block">
                                                            <div class="label-product label-sale"><?= $this->Html->image($result["avata"]);?></div>
                                                            <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?= $this->Html->image($result["image"]);?></a>
                                                            <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Xem chi tiết" class="compare" href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"></a>
                                                                <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/noi-com-dien-tu-philips-hd3130.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                                                <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                                                <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                                                <input type="hidden" value="<?php echo($result["price1"])?>" name="gia">
                                                                <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                                                <button class="add-to-car" type="submit" name="btn_cart" onclick="return confirm('Sản phẩm đã được thêm vào giỏ hàng')">Thêm vào giỏ</button>
                                                                <?= $this->Form->end()?>
                                                            </div>
                                                            <div class="price-percent-reduction2 ng-binding">
                                                                <div class="name" style="margin-top: 8px;">HOT</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                     <?php
                                                            }
                                                        ?>
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="tab-panel" id="tab_4_0">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_4_1">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_4_2">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_4_3">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_4_4">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_4_5">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/dien-lanh-40418"><img src="/Uploads/shop2198/images/banner/banner-product5.jpg" alt="Điện lạnh"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" style="margin-top: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <img class="img-responsive" alt="01" src="../img/baner/banner5.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category-featured featured5" style="margin-top: -20px;">
                <nav class="navbar nav-menu show-brand">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-brand"><a href="<?= $this->Url->build('/product/sanphambanchay', true);?>">Sản phẩm bán chạy</a></div>
                        <span class="toggle-menu"></span>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="product-featured clearfix">
                    <div class="row">
                        <div class="col-sm-12 col-right-tab">
                            <div class="product-featured-tab-content">
                                <div class="tab-container">
                                   <div class="tab-panel active" id="tab_2">
                                        <div class="box-left">
                                            <div class="banner-img">
                                                <a href="/san-pham/the-thao-40397"><img src="../img/baner/6.jpg" alt="Thể thao"></a>
                                            </div>
                                        </div>
                                    <div class="box-right">
                                            <ul class="product-list row">
                                                    <?php  while($result = $selling->fetch('assoc'))
		                                                {
		                                            ?>
                                                    <li class="col-sm-4">
                                                        <div class="right-block">
                                                            <h5 class="product-name"><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?php echo $result["product_name"]?></a></a></h5>
                                                            <div class="content_price">
                                                                <span class="price product-price"><?=number_format($result["price1"]). ' VNĐ'?></span>
                                                                <span class="price old-price"><?=number_format($result["price"]). ' VNĐ'?></span>
                                                            </div>
                                                            <div class="card-jfy-footer">    
                                                                <div class="card-jfy-ratings">
                                                                  <div class="card-jfy-rating-layer top-layer checked" style="width: 45px;">
                                                                    <?= $this->Html->image($result["imgs"]);?>
                                                                  </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="left-block">
                                                            <div class="label-product label-sale"><?= $this->Html->image($result["avata"]);?></div>
                                                            <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"><?= $this->Html->image($result["image"]);?></a>
                                                            <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Xem chi tiết" class="compare" href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $result["product_id"] ?>&trademark_id=<?php echo $result["trademark_id"]?>"></a>
                                                                <a href="javascript:void(0);" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="/san-pham/noi-com-dien-tu-philips-hd3130.html"></a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                                                <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                                                <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                                                <input type="hidden" value="<?php echo($result["price"])?>" name="gia">
                                                                <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                                                <button class="add-to-car" type="submit" name="btn_cart" onclick="return confirm('Sản phẩm đã được thêm vào giỏ hàng')">Thêm vào giỏ</button>
                                                                <?= $this->Form->end()?>
                                                            </div>
                                                                <div class="price-percent-reduction2 ng-binding">
                                                                <div class="name" style="margin-top: 8px;">SELNING</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                     <?php
                                                        }
                                                    ?>
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="tab-panel" id="tab_5_0">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_5_1">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_5_2">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_5_3">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_5_4">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                        <div class="tab-panel" id="tab_5_5">
                                            <div class="box-left">
                                                <div class="banner-img">
                                                    <a href="/san-pham/noi-that-40419"><img src="/Uploads/shop2198/images/banner/banner-product9.jpg" alt="Nội thất"></a>
                                                </div>
                                            </div>
                                            <div class="box-right">
                                                <div class="loading" style="display:none;text-align:center;padding:20px;"><img src="/assets/100002/img/ajax-loader.gif" /></div>
                                                <ul class="product-list row"></ul>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".category-featured .navbar-nav a.sub").click(function () {
            var tabId = $(this).attr("href");
            var code = $(this).attr("data-code");
            $(".loading").show();
            var query = '/option/productgroup';
            $.ajax({
                url: query + '?code=' + code,
                success: function (data) {
                    $(".loading").hide();
                    $(tabId + " .product-list").html(data);
                    $(window).resize();
                }
            });
        });
    });
</script>                    </div>
            </div>
        </div>
    </div>

    
            <div class="partner" style="margin-top: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

<!-- blog list -->
<div class="blog-list news-home">
    <h2 class="page-heading">
        <span class="page-heading-title">TIN TỨC</span>
    </h2>
    <div class="blog-list-wapper">
        <ul class="owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
            <?php while($result = $blog->fetch('assoc')) 
                {
            ?>
            <li>
                <div class="post-thumb image-hover2">
                    <a href="<?= $this->Url->build('/product/blogdetail', true); ?>?id=<?php echo $result["blog_id"] ?>"><?= $this->Html->image($result["avata"]);?></a>
                </div>
                <div class="post-desc">
                    <h5 class="post-title">
                        <a href="<?= $this->Url->build('/product/blogdetail', true); ?>?id=<?php echo $result["blog_id"] ?>"><?php echo $result["blog_name"]?></a>
                    </h5>
                    <div class="post-meta">
                        <span class="date">
                            <?php echo $result["date"]?>
                        </span>
                        <span class="comment">0<span> Bình luận</span></span>
                    </div>
                    <div class="readmore">
                        <a href="<?= $this->Url->build('/product/blogdetail', true); ?>?id=<?php echo $result["blog_id"] ?>">Xem thêm</a>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>
<!-- ./blog list -->
    <!--Begin-->
    <div class="row banner-bottom">
        <div class="col-sm-6 item-left">
            <div class="banner-boder-zoom">
                <a href="1"><img alt="ads" class="img-responsive" src="../img/baner/20.jpg"/></a>
            </div>
        </div>
        <div class="col-sm-6 item-right">
            <div class="banner-boder-zoom">
                <a href="2"><img alt="ads" class="img-responsive" src="../img/baner/21.jpg" /></a>
            </div>
        </div>
    </div>
    <!--End-->
    <!--Begin-->
    <div class="services2">
        <ul>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s1.png" alt="service">
                            </div>
                            <h3 class="title"><a href="1">Giá trị lớn</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Chúng tôi cung cấp giá cả cạnh tranh nhất trên từng sản phẩm, phù hợp với mọi túi tiền.
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s2.png" alt="service" alt="service">
                            </div>
                            <h3 class="title"><a href="3">Giao hàng</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Giao hàng tận nơi, sản phẩm sẽ có mặt tại nhà bạn từ 3 đến 5 ngày làm việc.
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s3.png" alt="service" alt="service">
                            </div>
                            <h3 class="title"><a href="5">Sản phẩm</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Sản phẩm chính hãng, bảo hành trên toàn quốc.
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s4.png" alt="service" alt="service">
                            </div>
                            <h3 class="title"><a href="2">Hổ trợ</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Hổ trợ 24/7. <br>Phone: +84 965 821 354.<br>Emal: kietdev@gmail.com
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s5.png" alt="service" alt="service">
                            </div>
                            <h3 class="title"><a href="4">Ứng dụng</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Cài đặt ứng dụng khi mua hàng sẽ được giảm giá đặc biệt từ 5 đến 10%.
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-xs-12 col-sm-6 col-md-4 services2-item">
                <div class="service-wapper">
                    <div class="row">
                        <div class="col-sm-6 image">
                            <div class="icon">
                                <img src="../img/icon/icon-s6.png" alt="service" alt="service">
                            </div>
                            <h3 class="title"><a href="6">Thanh toán</a></h3>
                        </div>
                        <div class="col-sm-6 text">
                            Thanh toán khi nhận hàng. <br>Phương thức thanh toán đa dạng
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
                        </div>
                    </div>
                </div>
            </div>
