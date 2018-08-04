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
			<form class="login100-form validate-form" method="post" enctype="multipart/form-data">
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

		        <span class="login100-form-title p-b-15">
		          Upload Music
		        </span>

				<div class="warning">
					<?php
		             //show formation warning from the session in cotroller: uploadWarning;
		                if(isset($_SESSION['uploadWarning'])) {
		                    echo $_SESSION['uploadWarning'];
		                    unset($_SESSION['uploadWarning']);
		                }
		            ?>
				</div>

				<div class="text-center p-t-5 p-b-20">
					<span class="txt1">
						<p class="txt1">You can upload a new piece of music here.</p>
					</span>
				</div>

				<div class="wrap-input100 m-b-20">
					<input class="input100" type="text" name="Mname"
						placeholder="[singer name]-[music name]">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 m-b-25">
					<input type="file" name="audio_file" accept="audio/*">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" id="submit" type="submit" formaction="?controller=music&action=add" value="Add"
					/>
				</div>
			</form>
		</div>
</div>
