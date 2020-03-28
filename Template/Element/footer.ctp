<div class="footer">
<script src="/app/services/moduleServices.js"></script>
<script src="/app/controllers/moduleController.js"></script>
    <footer id="footer">
        <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="<?= $this->Url->build('/product/index', true);?>"><img src="../img/logo1.png" alt="logo" /></a>
                        <div id="address-list">
                            <div class="tit-name">Địa chỉ:</div>
                            <div class="tit-contain">TPHCM</div>
                            <div class="tit-name">Điện thoại:</div>
                            <div class="tit-contain">12456789</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">kietdev1997@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="introduce-title">Về ch&#250;ng t&#244;i</div>
                                    <ul class="introduce-list">
                                                        <li class="item">
                                                            <a href="/gioi-thieu.html">
                                                                Giới thiệu
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="/content/giao-hang-doi-tra.html">
                                                                Giao h&#224;ng - Đổi trả
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="/content/chinh-sach-bao-mat.html">
                                                                Ch&#237;nh s&#225;ch bảo mật
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="/lien-he.html">
                                                                Li&#234;n hệ
                                                            </a>
                                                        </li>
                                    </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="introduce-title">Trợ gi&#250;p</div>
                                    <ul class="introduce-list">
                                                        <li class="item">
                                                            <a href="/content/huong-dan-mua-hang.html">
                                                                Hướng dẫn mua h&#224;ng
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="/content/huong-dan-thanh-toan.html">
                                                                Hướng dẫn thanh to&#225;n
                                                            </a>
                                                        </li>
                                                        <li class="item">
                                                            <a href="/content/tai-khoan-giao-dich.html">
                                                                T&#224;i khoản giao dịch
                                                            </a>
                                                        </li>
                                    </ul>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box" ng-controller="moduleController" ng-init="initController()">
                        <div class="introduce-title">Đăng ký nhận tin</div>
                        <form ng-submit="registerNewsletter()" class='contact-form'>
                            <div class="input-group" id="mail-box">
                                <input ng-model="newsletter.Email" type="email" placeholder="Đăng ký email" required="required" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Gửi</button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <div class="introduce-title">Liên kết</div>
                        <div class="social-link">
                            <a><i class="fa fa-facebook"></i></a>
                            <a><i class="fa fa-youtube"></i></a>
                            <a><i class="fa fa-twitter"></i></a>
                            <a><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div><!-- /#introduce-box -->
            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Phương thức thanh toán</li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-1.jpg" alt="Phương thức thanh toán 1"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-2.jpg" alt="Phương thức thanh toán 2"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-3.jpg" alt="Phương thức thanh toán 3"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-4.jpg" alt="Phương thức thanh toán 4"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-5.jpg" alt="Phương thức thanh toán 5"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-6.jpg" alt="Phương thức thanh toán 6"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-2.jpg" alt="Phương thức thanh toán 7"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-4.jpg" alt="Phương thức thanh toán 8"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-6.jpg" alt="Phương thức thanh toán 9"></a></li>
                        <li><a href="javascript:;"><img src="../img/icons/payment-1.jpg" alt="Phương thức thanh toán 10"></a></li>
                    </ul>
                </div>
            </div> <!-- /#trademark-box -->
            <p class="cpr text-center">
                &copy; Bản quyền thuộc về <a href="http://tuankiet.vn/" style="color: #0f9ed8" target="_blank">SIEUTHI.VN</a>
            </p>
        </div>
    </footer>
        </div>