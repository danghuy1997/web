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
<div id="article">
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
                                            <span class="breadcrumb-item active">Tin tức ></span>
                                            <span class="breadcrumb-item active">Chi tiết tin tức</span>
                                        </nav>
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of container -->
                        </div>
                        <script type="text/javascript">
                            $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                        </script>
                        <div class="news-detail">
                            <?php while($result = $blogdetail->fetch('assoc')) 
                                {
                            ?>
                            <h1 class="page-heading">
                                <span class="page-heading-title2"><?php echo $result["blog_name"]?></span>
                            </h1>
                            <article class="entry-detail">
                                <div class="entry-meta-data">
                                    <span class="date"><i class="fa fa-calendar"></i> <?php echo $result["date"]?> lúc <?php echo $result["time"]?></span>
                                </div>
                                <div class="body-content content-text clearfix">
                                    <p><?php echo $result["detail1"]?></p>
                                    <div style="box-sizing: border-box; text-rendering: geometricPrecision; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; float: left; width: 560px; position: relative; font-family: 'Noto Serif', serif; color: rgb(34, 34, 34); line-height: 26px; -webkit-font-smoothing: antialiased; background: transparent;">
                                        <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); float:none; font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:0px 0px 14px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                            <tbody>
                                                <tr>
                                                    <td style="vertical-align:baseline"><?= $this->Html->image($result["image1"]);?></td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:baseline">
                                                        <p><?php echo $result["detail2"]?></p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image2"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail3"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image3"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail4"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image4"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail5"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image5"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail6"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image6"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail7"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table align="center" class="picture" style="-webkit-font-smoothing:antialiased; background:transparent; border-collapse:collapse; border-spacing:0px; border:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:arial,helvetica neue,helvetica,sans-serif; font-size:14px; line-height:20px; margin:14px 0px; outline:0px; padding:0px; text-rendering:geometricPrecision; vertical-align:baseline; width:560px">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:baseline"><?= $this->Html->image($result["image7"]);?></td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:baseline">
                                                    <p><?php echo $result["detail8"]?></p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="social-group">
                                <!-- AddThis Button BEGIN -->
                                <script type="text/javascript" src="/scripts/addthis/addthis_widget.js#pubid=ra-5334d6387b03b532"></script>
                                <!-- AddThis Button END -->
                            </div>
                        </article>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="col-md-3">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>