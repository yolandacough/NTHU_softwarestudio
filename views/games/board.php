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

				<span class="login100-form-title p-b-20">
					Score Board
				</span>

				<span class="table-title p-b-20">
					Highest Score
				</span>
					<div class="wrap-output">
						<div class="text-center">
						
							<span class="txt5 p-r-30 p-b-15 p-t-7">
								Username:  <?php echo Game::getHighestScore()->getUsername() ?>
							</span> 
					
							<span class="txt5">
								Score:  <?php echo Game::getHighestScore()->getScore() ?>
							</span>
					
						</div>
				</div>

					<span class="table-title p-t-40 p-b-15">
						My TOP 3 Scores
					</span>
					<table class="table">
					  <tr class="tr">
					  	<th class="th">Ranking</th>
					  	<th class="th">Score</th>
					  </tr>
					<?php 
						$i = 1;
						if(Game::getMyScore($_SESSION['account']->getID())){
						foreach (Game::getMyScore($_SESSION['account']->getID()) as $row) {
						echo '
						<tr class="tr">
						    <td class="td">'.$i.'</td>
						    <td class="td">'.$row->getScore().'</td>
						</tr>';
						$i = $i + 1;
						}
					}else echo 'Try to play first.';
					?>
					</table>

					<div class="container-login100-form-btn p-t-30 p-b-15">
						<input class="login100-form-btn" type="submit" name="delete" value="Play Game" formaction="?controller=game&action=settings" 
						/>
					</div>

			</form>
		</div>
</div>