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

		<div class="wrap-table p-t-60 p-b-30">
			<form class="login100-form validate-form" id="signupform" method="post">
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-t-40 p-b-37">
					Musicaction
				</a>

				<span class="login100-form-title p-b-15">
					Management
				</span>

				<div class="warning">
					<?php
		             //show formation warning from the session in cotroller: managerWarning;
		                if(isset($_SESSION['managerWarning'])) {
		                    echo $_SESSION['managerWarning'];
		                    unset($_SESSION['managerWarning']);
		                }
		            ?>
				</div>

				<span class="table-title p-b-15">
					Accounts Information
				</span>
				<table class="table">
				  <tr class="tr">
				  	<th class="th">SELECT</th>
				  	<th class="th">ID</th>
				    <th class="th">Username</th>
				    <th class="th">Email</th>
				    <th class="th">Password</th>
				    <th class="th">Create Date</th>
				  </tr>
				<?php foreach (Account::show() as $row) {
					echo '
					<tr class="tr">
						<td class="td"><input type="checkbox" name="del[]" value="'.$row->getID().'"></td>
					    <td class="td">'.$row->getID().'</td>
					    <td class="td">'.$row->getUsername().'</td>
					    <td class="td">'.$row->getEmail().'</td>
					    <td class="td">'.$row->getPassword().'</td>
					    <td class="td">'.$row->getCreateDate().'</td>
					</tr>';
				}
				?>
				</table>

				<div class="container-login100-form-btn p-t-20 p-b-15">
					<input class="login100-form-btn" type="submit" name="delete" value="Delete" formaction="?controller=accounts&action=manage" 
					/>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Select only one of the accounts to update one account's information at each time.
					</span>
				</div>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" id="submit" type="submit" formaction="?controller=accounts&action=manage" value="Update" name="update"
					/>
				</div>
			</form>
		</div>
</div>