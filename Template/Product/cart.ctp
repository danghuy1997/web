<?php 
    use Cake\Datasource\ConnectionManager;
    $conn = ConnectionManager::get('default');
    $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
    $this->set(compact('catalogies'));

    $conn = ConnectionManager::get('default');
    $menu = $conn->execute('SELECT * FROM menu',array(1));
    $this->set(compact('menu'));

    $conn = ConnectionManager::get('default');
    $catalogies = $conn->execute('SELECT * FROM catalog',array(1));
    $this->set(compact('catalogies'));

    //session_start();
    $session = $this->getRequest()->getSession(); 
    $cart=[];

    if($session->check('giohang')){
        $cart =  $session->read('giohang');
    }
    //thêm giỏ hàng
    if(isset($_POST["btn_cart"]))
    { 
        $masp = $_POST["masp"];
        for($i=0; $i<count($cart);$i++){//kiểm tra giỏ hàng 
            if($cart[$i]["id"] == $masp){
                $cart[$i]["sl"]++;// gh hàng đã tồn tại +1
                $session->write('giohang', $cart);
                break;
            }
        }
        if($i ==count($cart))
        {
            $sp=['id'=>$_POST["masp"],'name'=>$_POST["tensp"],'price'=>$_POST["gia"],'img'=>$_POST["img"]];
            $sp["sl"] = 1;
            array_push($cart, $sp);
            $session->write('giohang', $cart);
            // echo '<script>alert("'.count($cart).'")</script>';
        }     
    }
    if(isset($_POST["btn_delete"])) //Xóa giỏ hàng
    {   //Kiểm tra sản phẩm có trong gh k => xóa
        for($i=0; $i<count($cart); $i++){
            $masp = $_POST["masp"];
            if($cart[$i]["masp"] == $id){
                array_splice($cart, $i, 1); // Hàm xóa
                break;
            }
        }
        $session->write('giohang', $cart);
    }
    //cập nhật giỏ hàng 
    // if(isset($_POST["btn_update"]) && isset($_POST["sl"]) && isset($_POST["id"])){
    //    $ids = $_POST["id"];
    //     $soluongs = $_POST["sl"];
    //     for($i=0; $i<count($cart); $i++){
    //         if($cart[$i]["id"] = $ids){
    //         $cart[$i]["sl"] = $soluongs;
    //         array_push($cart, $sp);
    //          $session->write('giohang', $cart);
    //          print_r($cart);
        
    //     }
    // }
    // }
    if(isset($_POST["update"]) && isset($_POST["sl"])){
        $ids = $_POST["masp"];
        $sls = $_POST["sl"];
        for($i=0; $i<count($cart); $i++){
            if($cart[$i]["masp"]==$ids){
            $cart[$i]["sl"] = $sls;

        } 
             
    }
        $session->write('giohang', $cart);
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
<div id="cart">
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
                                        <span class="breadcrumb-item active">Giỏ hàng</span>
                                    </nav>
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div>
                    <script type="text/javascript">
                        $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
                    </script>
                    <script src="/app/services/orderServices.js"></script>
                    <script src="/app/controllers/orderController.js"></script>
                    <div class="cart-content ng-scope" ng-controller="orderController" ng-init="initOrderCartController()">
                        <h1 class="page-heading"><span>Giỏ hàng của tôi</span></h1>
                        <div class="steps clearfix">
                            <ul class="clearfix">
                                <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                                    <span>
                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                    </span>
                                    <span>Giỏ hàng của tôi</span>
                                    <span class="step-number">
                                        <a>1</a>
                                    </span>
                                </li>
                                <li class="payment col-md-2 col-xs-12 col-sm-4">
                                    <span>
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                    <span>Thanh toán</span>
                                    <span class="step-number">
                                        <a>2</a>
                                    </span>
                                </li>
                                <li class="finish col-md-2 col-xs-12 col-sm-4">
                                    <span>
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                    <span>Hoàn tất</span>
                                    <span class="step-number">
                                        <a>3</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-block-info">
                        
                            <div class="cart-info table-responsive">
                                <table class="table product-list">
                                    <thead>
                                        <tr>
                                            <th>Hình</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $total = 0;
                                            foreach ($cart as $key => $sp) {
                                                $money = $sp["price"] * $sp["sl"];
                                                $total += $money;
                                        ?>
                                          <?= $this->Form->create(__('cart'),['action' => '/cart'])?> 
                                        <!-- ngRepeat: item in OrderDetails -->
                                        <tr ng-repeat="item in OrderDetails" class="ng-scope">
                                            <td class="image">
                                                <?= $this->Html->image($sp["img"]);?>
                                            </td>
                                            <td class="des" style="color: black;">
                                                <?php echo $sp["name"] ?>
                                                <span class="ng-binding"></span>
                                            </td>
                                            <td class="price ng-binding"><?= number_format($sp["price"],0 ,'.','.'). ' VNĐ' ?></td>
                                            <td>
                                                <div class="input-group btn-block">
                                                    <input type="text" name="sl" value="<?=$sp["sl"]?>"  class="form-control">
                                                    <span class="input-group-btn"> 
                                                        <button type="submit" data-toggle="tooltip" data-direction="top" class="btn btn-primary" name = "update" /><i class="fa fa-refresh"></i></button>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="amount ng-binding" name=""><?= number_format($money,0 ,'.','.'). ' VNĐ'?></td>
                                            <!-- <td class="">
                                                <a ng-click="removeItemCart(item)" href="javascript:void(0)">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                </a>
                                            </td> -->
                                            <td>
                                                <button name="btn_delete" type="submit" data-toggle="tooltip" data-direction="top" class="btn btn-danger pull-right" /><i class="fa fa-times-circle"></i></button>
                                            </td>
                                        </tr>
                                        <?= $this->Form->end();?>
                                        <!-- <button name="button" type="button-default">Click Here</button> -->
                                        <!-- </form> -->
                                        <!-- <?= $this->Form->end();?> -->
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="clearfix text-right">
                                <span><b>Tổng thanh toán:</b></span>
                                <span class="pay-price ng-binding"><?= number_format($total,0 ,'.','.'). ' VNĐ'?></span>
                            </div>
                            <div class="text-right">
                                <a class="comeback" href="<?= $this->Url->build('/product/index', true); ?>" onclick="window.history.back()">Tiếp tục mua hàng</a>
                                <a class="button-default" id="checkout" href="<?= $this->Url->build('/product/checkout', true);?>">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>