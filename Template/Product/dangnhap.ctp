<div class="main" style="background-color: white;">
        <div class="container">
            <div class="row">
                    <div class="col-md-3">
<div class="menu-account">
    <h3 style="background-color: black;">
        <span>
            Tài khoản
        </span>
    </h3>
    <ul>
        <li><a href="<?= $this->Url->build('/product/dangnhap', true);?>"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
        <li><a href="<?= $this->Url->build('/product/dangki', true);?>"><i class="fa fa-key"></i> Đăng ký</a></li>
        <li><a href="/thay-doi-mat-khau.html"><i class="fa fa-key"></i> Quên mật khẩu</a></li>
    </ul>
</div>                    </div>
                    <div class="col-md-9">

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                    <span class="breadcrumb-item active">Đăng nhập ></span>
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
<div class="login-content clearfix ng-scope" ng-controller="accountController" ng-init="initController()">
    <h1 class="page-heading"><span>Đăng nhập hệ thống</span></h1>
    <div class="col-md-6 col-md-offset-3 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
        <?=$this->Form->create(__('dangnhap'),['class' => 'form-horizontal ng-pristine ng-valid-email ng-invalid ng-invalid-required'])?>
            <div class="form-group">
                <label for="Email" class="col-sm-4 control-label">Tài khoản</label>
                <div class="col-sm-8">
                    <input name="username" type="username" class="form-control ng-pristine ng-untouched ng-valid-email ng-invalid ng-invalid-required" ng-model="Email" ng-required="true" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="Password" class="col-sm-4 control-label">Mật khẩu</label>
                <div class="col-sm-8">
                    <input name="password" type="password" class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" ng-model="Password" ng-required="true" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <!-- <input type="submit" name="dangnhap"> -->
                    <button type="submit" name="dangnhap" class="btn btn-primary">Đăng nhập</button>
                    <a href="/quen-mat-khau.html">Quên mật khẩu?</a>
                </div>
            </div>
            <?=$this->Form->end()?>
    </div>

      </div>
     </div>
   </div>
</div>
</div>