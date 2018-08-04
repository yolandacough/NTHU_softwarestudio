<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" id="signupform" method="post" action="/controllers/accounts_controller.php">
				<a href="index.php" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

				<span class="login100-form-title p-b-37">
					Sign Up
				</span>

				<div class="warning p-b-20">
					<?php
		             //show formation warning from the session in cotroller: signupWarning;
		                if(isset($_SESSION['signupWarning'])) {
		                    echo $_SESSION['signupWarning'];
		                    unset($_SESSION['signupWarning']);
		                }
		                if(isset($_SESSION['result'])) {
						echo $_SESSION['result'];
						unset($_SESSION['result']);
					}
		            ?>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="text" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
					<input class="input100" type="password" name="confirm" placeholder="confirm">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" id="submit" type="submit" formaction="?controller=accounts&action=signup" value="Sign Up"
					>
				</div>
			</form>
		</div>
</div>