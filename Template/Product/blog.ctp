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
<div id="blog-template">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="breadcrumb-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <nav class="breadcrumb">
                                        <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                                        <span class="breadcrumb-item active">Tin tức</span>
                                    </nav>
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div>
                    <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                    </script>
                    <div class="news-content">
                        <h2 class="page-heading">
                            <span class="page-heading-title2">Tất cả bài viết</span>
                        </h2>
                        <!-- Begin: Nội dung blog -->
                        <ul class="blog-posts">
                            <?php while($result = $blog->fetch('assoc')) 
                                {
                            ?>
                            <li class="post-item">
                                <article class="entry">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="entry-thumb image-hover2 text-center">
                                                <a href="<?= $this->Url->build('/product/blogdetail', true); ?>?id=<?php echo $result["blog_id"] ?>">
                                                    <?= $this->Html->image($result["avata"]);?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="entry-ci">
                                                <h3 class="entry-title"><a href=""><?php echo $result["blog_name"]?></a></h3>
                                                <div class="entry-meta-data">
                                                    <span class="date"><i class="fa fa-calendar"></i> <?php echo $result["date"]?> lúc <?php echo $result["time"]?></span>
                                                </div>
                                                <div class="entry-excerpt">
                                                    <p><?php echo $result["detail1"]?></p>
                                                </div>
                                                <div class="entry-more">
                                                    <a href="">Xem thêm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
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