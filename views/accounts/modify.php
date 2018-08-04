<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
	<ul class="wrap-ul">
      <li class="li"><a class="li-a-active" href="?controller=accounts&action=home">Home</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=logout">Log out</a></li>
      <li class="li-r"><a class="li-a" href="?controller=accounts&action=modify">Modify</a></li>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li-r"><a class="li-a" href="?controller=accounts&action=manage">Manage</a></li>'?>
      <?php
        if($_SESSION['account']->getID()==1) echo '<li class="li"><a class="li-a" href="?controller=music&action=show">Music</a></li>'?>
    </ul>
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" id="signupform" method="post">
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

				<span class="login100-form-title p-b-15">
					Modify
				</span>

				<div class="warning">
					<?php
		             //show formation warning from the session in cotroller: updateWarning;
		                if(isset($_SESSION['updateWarning'])) {
		                    echo $_SESSION['updateWarning'];
		                    unset($_SESSION['updateWarning']);
		                }

		                $account = $_SESSION['account'];

		                if(isset($_SESSION['del'])) {
		                	$account = Account::getinfobyid($_SESSION['del']);
		                	unset($_SESSION['del']);
		                }
		            ?>
				</div>

				<div class="text-center p-t-5 p-b-20">
					<span class="txt1">
						*You may at least change one piece of information below.
					</span>
				</div>

				<input class="input100" type="hidden" name="id" 
					value="<?php echo $account->getID() ?>">

				<div class="wrap-input100 m-b-20">
					<input class="input100" type="text" name="username"
						placeholder="<?php echo $account->getUsername() ?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-20">
					<input class="input100" type="text" name="email" 
						placeholder="<?php echo $account->getEmail() ?>">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="old_password" placeholder="old password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="password" placeholder="new password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 m-b-25">
					<input class="input100" type="password" name="confirm" placeholder="confirm">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" id="submit" type="submit" formaction="?controller=accounts&action=modify" value="Update"
					/>
				</div>
			</form>
		</div>
</div>