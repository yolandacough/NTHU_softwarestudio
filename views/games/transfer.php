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

		<div class="wrap-table p-l-200 p-r-205 p-t-60 p-b-30">
			<form class="login100-form validate-form" id="signupform" method="post">
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-t-40 p-b-37">
					Musicaction
				</a>

				<span class="txt4 p-b-20">
					Click "space" to replay the game,click "musicaction" to quit the game.
				</span>
		<?php
			$_SESSION['totalScore']=$_POST['totalscore'];
			$value = $_SESSION['totalScore'];
			$username = $_SESSION['account']->getUsername();
			$id = $_SESSION['account']->getID();
			// 发送一个简单的 cookie
			setcookie("score",$value);
			setcookie("username",$username);
			setcookie("id",$id);
			setcookie("cookie[three]","cookiethree");
			setcookie("cookie[two]","cookietwo");
			setcookie("cookie[one]","cookieone");
		?>
	<div class="container-login100-form-btn">
            <div class="container-login100-form-btn p-t-40 p-b-25">
            	<a href="?controller=game&action=insert" class="login100-form-btn">
              	Update Score!
              </a>
            </div>
	</div>

</div>

<script>
//var totalscore =  <?php echo $_SESSION['totalScore']; ?>
//var username = '<?php echo $_SESSION['UserName']; ?>
//var user_name = "Jordan";
//var total = 0;
document.captureEvents(Event.keydown);
document.onkeydown=keyFunction;
function keyFunction() {
	if (event.keyCode==32) {//space
	document.location.href="?controller=game&action=play";
	}
}
</script>