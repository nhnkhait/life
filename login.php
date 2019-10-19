<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Đăng Nhập</h3>
        <form method="post" action="https://haintheme.com/demo/html/bustter/login.php">
        	<div class="row">
        		 <label for="username">
                    Tài Khoản:
                    <input type="text" name="username" id="username" placeholder="Tên đăng nhập" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Mật Khẩu:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Nhớ mật khẩu</span>
					</div>
            		<a href="#">Quên mật khẩu ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Đăng Nhập</button>
           </div>
        </form>
        <div class="row">
        	<p>Hoặc đăng nhập bằng</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>