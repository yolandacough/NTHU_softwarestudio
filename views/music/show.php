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

		<div class="wrap-index p-t-60 p-b-30">
			<form class="login100-form validate-form" id="signupform" method="post">
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-t-40 p-b-40">
					Musicaction
				</a>

				<span class="login100-form-title p-b-40">
					Music Library
				</span>

				<table class="table">
				  <tr class="tr">
				  	<th class="th">Music ID</th>
				  	<th class="th">Music Name</th>
				    <th class="th">Music Mode</th>
				  </tr>
				<?php foreach (Music::show() as $row) {
					echo '
					<tr class="tr">
					    <td class="td">'.$row->getMID().'</td>
					    <td class="td">'.$row->getMname().'</td>
					    <td class="td">'.$row->getMode().'</td>
					</tr>';
				}
				?>
				</table>

		        <div class="text-center p-t-57 p-b-20">
		          <span class="txt1">
		            * Mode: 1-easy 2-moderate 3-hard.
		          </span>
		        </div>

				<div class="flex-c p-t-60 p-b-50">
				<div class="container-login100-form-btn">
					<a href="?controller=music&action=add"  class="login100-form-btn">
						Add Music
					</a> 
				</div>

				<div class="container-login100-form-btn">
					<a href="?controller=music&action=addBeat"  class="login100-form-btn">
						Add Beat
					</a> 
				</div>

				<div class="container-login100-form-btn">
					<a href="?controller=music&action=delete" class="login100-form-btn">
						Delete Music
					</a> 
				</div>
				</div>

			</form>
		</div>
</div>