<link rel="stylesheet" href="../css/account/acount.css">
<div class="container banner">
    <div class="main-body">
        <h2 class="title">Đăng ký tài khoản</h2>
        <div class="form-sign-up">
            <form onsubmit="return false" class="form-value-sign-up" method='post' action="./index?page=login">
                <div class="group-input">
                    <input type="text" name="userName" placeholder="Họ Tên" class="user-name input-signup">
                    <span class="erorr"></span>
                    <div class="line"></div>
                </div>
                <div class="group-input">
                    <input type="mail" name="mail" placeholder="Email" class="mail input-signup">
                    <span class="erorr"></span>
                    <div class="line"></div>
                </div>
                <div class="group-input">
                    <input type="text" name="phone" placeholder="Số điện thoại" class="phone input-signup">
                    <span class="erorr"></span>
                    <div class="line"></div>
                </div>
                <div class="group-input">
                    <input type="password" name="password" placeholder="Mật khẩu" class="password input-signup">
                    <span class="erorr"></span>
                    <div class="line"></div>
                </div>
                <div class="group-input">
                    <input type="password" name="pwConfirm" placeholder="Nhập lại mật khẩu" class="pw-confirm input-signup">
                    <span class="erorr"></span>
                    <div class="line"></div>
                </div>

                <div class="remember note">
                    <input type="checkbox"><span>Tôi đồng ý với các điều khoản và điều kiện, chính sách bảo mật và chính sách cookie</span>
                </div>
                <div class="confirm">
                    <a href="#" class="forget"></a>
                    <input type="submit" class="confirm-sign-up" value="Đăng ký">
                </div>
            </form>
        </div>
    </div>
</div>
<script src='../js/account/Validate.js'></script>
<script src='../js/account/sign_up.js'></script>