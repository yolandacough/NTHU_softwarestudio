<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" id="signinform" method="post" action="index.php">
				<a href="index.php" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="text-center">
					<div class="txt2">
					<?php echo $reslut;?>
					<br>
					Jumping to the account home page... ...
					</div>
					<a href="?controller=accounts&action=home" class="txt2 hov1">
						Click here to jump if auto-jump failed.
					</a>
				</div>
			</form>			
		</div>
	</div>

<script type="text/javascript">
	//automatic jump after waiting for 3 seconds
	setTimeout(window.location.href='?controller=accounts&action=home',3);
</script>
<script>
    var title1 = document.getElementsByTagName("title")[0];
    title1.innerHTML = "Musicaction - Jumping...";
</script>