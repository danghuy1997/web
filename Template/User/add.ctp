<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="<?= $this->Url->build('/product/index', true);?>">Trang chủ ></a>
                    <span class="breadcrumb-item active">Đăng kí tài khoản</span>
                </nav>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div>
<div class="user form large-9 medium-8 columns content">
    <!-- <form method="post" accept-charset="utf-8" action="/vidu1/user/add"> -->
        <?= $this->Form->create()?>
            <fieldset>
            <div class="input text required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="<?php $this->Form->control('name'); ?>">Name</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="name" required="required" maxlength="30" id="name">
            </div>
            <div class="input text required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="user-name">User Name</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="user_name" required="required" maxlength="100" id="user-name">
            </div>
            <div class="input password required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="password">Password</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="password" name="password" required="required" id="password">
            </div>
            <div class="input email required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="email">Email</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="email" name="email" required="required" maxlength="30" id="email">
            </div>
            <div class="input text required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="address">Address</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="address" required="required" maxlength="255" id="address">
            </div>
            <div class="input number required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="tell">Tell</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="number" name="tell" required="required" id="tell">
            </div>
            <div class="input text required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="sex">Sex</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="text" name="sex" required="required" maxlength="3" id="sex">
            </div>
            <div class="input number required" style="background: #fff;color: #222;cursor: auto;font-family: "Helvetica Neue" ,Helvetica,Roboto,Arial,sans-serif;font-style: normal;font-weight: normal;line-height: 1.5;">
                <label style="font-weight: bold;color: #4d4d4d;cursor: pointer;display: block;font-size: 0.875rem;font-weight: normal;line-height: 1.5;margin-bottom: 0;" for="status">Status</label>
                <input style="-webkit-appearance: none;-moz-appearance: none;border-radius: 0;background-color: #fff;border-style: solid;border-width: 1px;border-color: #ccc;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);color: rgba(0,0,0,0.75);display: block;font-family: inherit;font-size: 0.875rem;height: 2.3125rem;margin: 0 0 1rem 0;padding: 0.5rem;width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;-webkit-transition: border-color 0.15s linear,background 0.15s linear;-moz-transition: border-color 0.15s linear,background 0.15s linear;-ms-transition: border-color 0.15s linear,background 0.15s linear;-o-transition: border-color 0.15s linear,background 0.15s linear;transition: border-color 0.15s linear,background 0.15s linear;
                }" type="number" name="status" required="required" id="status">
            </div>
        </fieldset>
        <button style="float: right;text-transform: uppercase;box-shadow: none;background: #966600;width: 115px;height: 53px;" type="submit">Submit</button>    
    <!-- </form> -->
    <?= $this->Form->end() ?>
</div>