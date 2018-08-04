<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" id="signinform" method="post" action="controllers/accounts_controller.php">
				<a href="index.php" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="text-center txt2">
				<?php
					if(isset($_SESSION['result'])) {
						echo $_SESSION['result'];
						unset($_SESSION['result']);
					}
				?>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="username" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password(6-32)" required id="pwd">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" name="submit_in"
						value="Sign In" formaction="?controller=accounts&action=signin"
					>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Haven't got an account yet?
					</span>
				</div>

				<div class="text-center">
					<a href="?controller=accounts&action=signup" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>


		</div>
	</div>

<script>
    var title1 = document.getElementsByTagName("title")[0];
    title1.innerHTML = "Musicaction - Sign in";
</script>
