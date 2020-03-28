<?php   
    $session = $this->getRequest()->getSession(); 
    $cart =  $session->read('giohang');
    $session->write('giohang', $cart);
    $username = $session->read('username');
    use Cake\Datasource\ConnectionManager; 
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
                                        <span class="breadcrumb-item active">Thanh toán</span>
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
                        <div class="payment-content ng-scope" ng-controller="orderController" ng-init="initCheckoutController()">
                            <h1 class="page-heading"><span>Thanh toán</span></h1>
                            <div class="steps clearfix">
                                <ul class="clearfix">
                                    <li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0"><span><i class="glyphicon glyphicon-shopping-cart"></i></span><span>Giỏ hàng của tôi</span><span class="step-number"><a>1</a></span></li>
                                    <li class="payment active col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-usd"></i></span><span>Thanh toán</span><span class="step-number"><a>2</a></span></li>
                                    <li class="finish col-md-2 col-xs-12 col-sm-4"><span><i class="glyphicon glyphicon-ok"></i></span><span>Hoàn tất</span><span class="step-number"><a>3</a></span></li>
                                </ul>
                            </div>
                            <?php   
                                $conn = ConnectionManager::get('default');
                                // $orderdetail = $conn->execute("SELECT * FROM orders, orderdetail, product WHERE orders.order_id = orderdetail.order_id AND orderdetail.product_id = product.product_id AND orderdetail.product_name = product.product_name", array(1));
                                // $this->set(compact('orderdetail'));
                                
                                if($session->check('giohang')){
                                    $cart =  $session->read('giohang');
                                    if(isset($_POST["name"]) && ($_POST["tell"]) && ($_POST["email"]) && ($_POST["address"])){
                                    //Lưu giỏ hàng ==> hóa đơn
                                    //Lưu vào bảng hóa đơn bán
                                    $name = $_POST["name"]; 
                                    $tell = $_POST["tell"];
                                    $email = $_POST["email"];
                                    $address = $_POST["address"];

                                        $order = $conn->execute("INSERT INTO orders (name, tell, email, address) values ('$name','$tell','$email','$address')",array(1));
                                        if($this->set(compact('order'))){
                                            // $order_id = $conn->$_insert_id();
                                            // $cart =  $session->read('giohang');
                                            $total = 0;
                                            foreach ($cart  as $key => $sp){
                                                // $order_id = $order_id;
                                                $money = $sp["price"] * $sp["sl"];
                                                $total += $money;
                                                // $sp_order_id = $order_id;
                                                $sp_product_id = $sp["id"];
                                                $sp_product_name = $sp["name"];
                                                $sp_sl = $sp["sl"];
                                                $sp_price = $sp["price"];

                                                $orderdetail = $conn->execute("INSERT INTO orderdetail (product_id, product_name, quantity, price) VALUES('$sp_product_id','$sp_product_name','$sp_sl','$sp_price')");
                                                $this->set(compact('orderdetail'));

                                                $sql =$conn->execute("UPDATE product SET quantity = quantity - $sp_sl WHERE product_id =$sp_product_id");
                                                $this->set(compact('sql'));
                                            }
                                            //Them thanh cong
                                            //Xoa gio hang
                                            $session->delete('giohang');
                                            // $session->destroy('giohang');
                                            echo "<script>alert('Đặt hàng thành công')</script>";
                            ?> 
                                <?php
                                }else{
                                    ?>
                                    <p>Đặt hàng không thành công.</p>
                                    <?php
                                        }                                           
                                    }else{
                                ?>
                            <?= $this->Form->create(__('index'), ['class' => 'payment-block clearfix ng-pristine ng-invalid ng-invalid-required ng-valid-email','action'=>'checkout','method' =>'post']);?>
                                <div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
                                    <h4>1. Địa chỉ thanh toán và giao hàng</h4>
                                    <div class="step-preview clearfix">
                                        <h2 class="title">Thông tin thanh toán</h2>
                                        <!-- ngIf: CustomerId>0 -->
                                        <div class="form-block ng-scope" ng-if="CustomerId<=0">
                                            <div class="user-login"><a href="<?= $this->Url->build('/product/dangki', true); ?>">Đăng ký tài khoản mua hàng</a><a href="<?= $this->Url->build('/product/dangnhap', true); ?>">Đăng nhập</a></div>
                                            <label>Mua hàng không cần tài khoản</label>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('name', array('placeholder' => "Nhập Tên", 'class' => 'form-control ng-pristine ng-invalid ng-invalid-required ng-touched', 'required' =>'','value'=>"")); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('tell', array('placeholder' => "Nhập số điện thoại", 'class' => 'form-control ng-pristine ng-invalid ng-invalid-required ng-touched', 'required' =>'')); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('email', array('placeholder' => "Nhập email", 'class' => 'form-control ng-pristine ng-invalid ng-invalid-required ng-touched', 'required' =>'')); ?>
                                            </div>
                                            <div class="form-group">
                                                <?php echo $this->Form->input('address', array('placeholder' => "Nhập địa chỉ", 'class' => 'form-control ng-pristine ng-invalid ng-invalid-required ng-touched', 'required' =>'')); ?>
                                            </div>
                                            <textarea class="form-control ng-pristine ng-untouched ng-valid" rows="4" placeholder="Ghi chú đơn hàng" ng-model="$parent.Description"></textarea>
                                        </div><!-- end ngIf: CustomerId<=0 -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 payment-step step3">
                                    <h4>2. Thanh toán và vận chuyển</h4>
                                    <div class="step-preview clearfix">
                                        <h2 class="title">Vận chuyển</h2>
                                        <div class="form-group ">
                                            <select class="form-control ng-pristine ng-valid ng-touched" ng-model="ShippingRateId" ng-options="item.Id as item.Name for item in ShippingRates" ng-change="changeShippingRate()">
                                                <option value="?" selected="selected">Vận chuyển miễn phi</option>
                                                <option value="?" selected="selected">Vận chuyển miễn phi</option>
                                            </select>
                                        </div>
                                        <h2 class="title">Thanh toán</h2>
                                        <input type="radio" name="home" value="home"/>Thanh toán tại nhà
                                        <input type="radio" name="card" value="card">Thanh toán qua thẻ
                                        <!-- ngRepeat: item in PaymentMethods -->
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-xs-12 payment-step step1">
                                <h4>3. Thông tin đơn hàng</h4>
                                <div class="step-preview">
                                    <div class="cart-info">
                                        <div class="cart-items">
                                            <div class="cart-item clearfix ng-scope" ng-repeat="item in OrderDetails">
                                            <?php 
                                                if($session->check('giohang'))
                                                {
                                                    $cart =  $session->read('giohang');
                                                    $total = 0;
                                                    foreach ($cart as $key => $sp) {
                                                        $money = $sp["price"] * $sp["sl"];
                                                        $total += $money;
                                            ?>
                                                <span class="image pull-left" style="margin-right:10px;">
                                                    <a href="/san-pham/dam-mac-nha-phoi-no-xinh-xan-twins.html"><?= $this->Html->image($sp["img"]);?></a>
                                                </span>
                                                <div class="product-info pull-left">
                                                    <span class="product-name">
                                                        <a href="" class="ng-binding"><?php echo $sp["name"] ?></a> x <span class="ng-binding"><?php echo $sp["sl"] ?></span>
                                                    </span>
                                                    <!-- ngIf: item.IsVariant==true --><p class="note ng-binding ng-scope" ng-if="item.IsVariant==true"></p><!-- end ngIf: item.IsVariant==true -->
                                                </div>
                                                <span class="price ng-binding"><?= number_format($sp["price"],0 ,'.','.'). ' VNĐ' ?></span>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                            </div><!-- end ngRepeat: item in OrderDetails -->
                                        </div>
                                        <div class="total-price">
                                            Thành tiền  <label class="ng-binding"><?= number_format($total,0 ,'.','.'). ' VNĐ'?></label>
                                        </div>
                                        <div class="shiping-price">
                                            Phí vận chuyển  <label class="ng-binding">0 ₫</label>
                                        </div>
                                        <div class="btn-coupon hidden">
                                            <a href="#" class="btn btn-primary"><span></span>Sử dụng mã giảm giá </a>
                                        </div>
                                        <div class="use-coupon hidden">
                                            <div class="form-group">
                                                <input placeholder="Nhập mã giảm giá" class="coupon-code form-control">
                                                <a class="btn btn-primary">Sử dụng</a>
                                            </div>
                                        </div>
                                        <div class="total-payment">
                                            Thanh toán <span class="ng-binding"><?= number_format($total,0 ,'.','.'). ' VNĐ'?></span>
                                        </div>
                                        <div class="button-submit">
                                            <!-- <button type="submit" name="thanhtoan" id="thanhtoan">Đặt hàng</button> -->
                                            <?php echo $this->Form->button(__('Đặt hàng'), array('type'=>"submit", 'class'=>"btn btn-primary"))?>
                                            <!-- <input class="btn btn-primary" type="submit" value="Thanh Toán"/> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }else{
                            ?>
                            <p>Giỏ hàng không có sản phẩm. Xin mời trở lại trang mua sắm<p>
                            <?php
                                }
                            ?>
                            <?= $this->Form->end()?>
                        </div>
                    </div>
                </div>
            </div>
        </div>