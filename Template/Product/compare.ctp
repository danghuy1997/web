<?php 
 $session = $this->getRequest()->getSession(); 
    $compare=[];

    if($session->check('sosanh')){
        $compare =  $session->read('sosanh');
    }
    if(isset($_POST["btn_check"])){
        $ss=['id'=>$_POST["masp"],'name'=>$_POST["tensp"], 'gia'=>$_POST["gia"] ,'thuonghieu'=>$_POST["th"],'img'=>$_POST["img"],'baohanh' =>$_POST["bh"],'matso'=>$_POST["ms"],'chongnuoc'=>$_POST["cn"],'chucnang'=>$_POST["chucnang"],'dang'=>$_POST["dang"],'day'=>$_POST["day"],'gioitinh'=>$_POST["gioitinh"],'kichthuoc'=>$_POST["kichthuoc"],'kinh'=>$_POST["kinh"],'may'=>$_POST["may"],'maso'=>$_POST["maso"],'xuatxu'=>$_POST["xuatxu"]];
        $masp = $_POST["masp"];
        array_push($compare, $ss);
        $session->write('sosanh', $compare);
        echo '<script>alert("'.count($compare).'")</script>';
    }

?>
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
<!-- Start of Breadcrumbs -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="index.html">Trang chủ ></a>
                    <span class="breadcrumb-item active">So sánh sản phẩm</span>
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<!-- End of Breadcrumbs -->
<!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Comparison Wrapper -->
            <div class="comparison-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="comparison">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title left-aligned with-border" style="text-align: center; margin-bottom: 30px;">
                                                <h2>SO SÁNH SẢN PHẨM</h2>
                                            </div>
                                            <form action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" style="text-align: center;">
                                                        <thead>
                                                            <tr>
                                                                <td colspan="3"><strong>CHI TIẾT SẢN PHẨM</strong></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="product-title"  style="vertical-align: middle;">Hình sản phẩm</td>
                                                                <th class="product-title" style="vertical-align: top;">Tên sản phẩm</th>
                                                                <td class="product-title">Giá bán</td>
                                                                <td class="product-title">Thương hiệu</td>
                                                                <td class="product-title">Xuất xứ</td>
                                                                <td class="product-title">Giới tính</td>
                                                                <td class="product-title">Kính</td>
                                                                <td class="product-title">Máy</td>
                                                                <td class="product-title">Bảo hành</td>
                                                                <td class="product-title">Đường kính mặt số</td>
                                                                <td class="product-title">Bề dày mặt số</td>
                                                                <td class="product-title">Niềng</td>
                                                                <td class="product-title">Dây Đeo</td>
                                                                <td class="product-title">Màu Mặt Số</td>
                                                                <td class="product-title">Chống Nước</td>
                                                                <td class="product-title">Chức Năng</td>
                                                                <td class="product-title">Actions</td>
                                                            </tr>
                                                            <?php 
                                                                foreach ($compare as $key => $ss){
                                                            ?>
                                                            <tr>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?= $this->Html->image(__($ss["img"]),['style'=>'width:50px'],['style' => 'height:30px']);?></a></td>
                                                                <td> <a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["name"] ?></a></td>
                                                                <td><?php echo $ss["gia"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["thuonghieu"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["xuatxu"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["gioitinh"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["kinh"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["may"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["baohanh"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["matso"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["kichthuoc"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["dang"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["day"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["maso"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["chucnang"] ?></a></td>
                                                                <td><a href="<?= $this->Url->build('/product/single', true); ?>?id=<?php echo $ss["id"] ?>"><?php echo $ss["chongnuoc"] ?></a></td>
                                                                <?= $this->Form->create(__('cart'),['action' => '/cart'])?>
                                                                <td> 
                                                                    <input type="hidden" value="<?php echo $result["product_id"] ?>"  name="masp">
                                                                    <input type="hidden" value="<?php echo $result["product_name"]?>" name="tensp">
                                                                    <input type="hidden" value="<?php echo($result["pricesale"])?>" name="gia">
                                                                    <input type="hidden" value="<?php echo $result["image"];?>" name="img">
                                                                    <button class="add-to-car" type="submit" name="btn_cart">Thêm vào giỏ</button></td>
                                                                 <?= $this->Form->end()?>
                                                            </tr>
                                                            <?php 
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end of comparison -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Comparison Wrapper -->

            <!-- Start of Newsletter Section -->
        </div>
        <!-- End of Main Content Wrapper -->