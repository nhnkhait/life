<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Đăng Ký</h3>
        <form method="post" action="https://haintheme.com/demo/html/bustter/signup.php">
            <div class="row">
                 <label for="username-2">
                    Tài Khoản:
                    <input type="text" name="username" id="username-2" placeholder="Tên Đăng Nhập" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    Email:
                    <input type="password" name="email" id="email-2" placeholder="youremail@domain" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Mật Khẩu:
                    <input type="password" name="password" id="password-2" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    Nhập lại mật khẩu:
                    <input type="password" name="password" id="repassword-2" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">Đăng Ký</button>
           </div>
        </form>
    </div>
</div>