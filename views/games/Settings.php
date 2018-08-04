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
  <div class="wrap-index p-l-55 p-r-55 p-t-30 p-b-30">
		<form class="login100-form validate-form" id="signupform" method="post">
        <a href="index.php" class="login100-form-bigtitle p-b-37">
          Musicaction
        </a>

        <span class="login100-form-title p-b-37">
          Game Settings
        </span>

	<div class="text-center p-b-40">
		<!--<center><a href="play.htm"><button class="button button2" style="vertical-align: middle;"><span>New game</span></button></a></center>-->
    <p class="txt1 p-b-10">Select one piece of music and enjoy the game!</p>
    <h2 class="txt1">Listen to the fantastic music, and click the right botton when the notes decline and hit the bottom.</h2>
  </div>

	<table class="table">
		<tr class="tr">
			<th class="th">Select</th>
			<th class="th">Music Name</th>
			<th class="th">Music Mode</th>
		</tr>
	<?php foreach (Game::show() as $row) {
		echo '
		<tr class="tr">
				<td class="td"><input type="checkbox" name="del[]" value="'.$row->getMID().'"></td>
				<td class="td">'.$row->getMname().'</td>
				<td class="td">'.$row->getMode().'</td>
		</tr>';
	}
	?>
	</table>

  <div class="text-center p-t-40">
    <span class="txt3 p-b-20">
          Language Setting
        </span>
    <input type = "radio" name = "action" value = "显示中文"><div class="txt6"> 显示中文</div>
    <input type = "radio" name = "action" value = "Choose English"><div class="txt6"> Choose English</div>
  </div>

					<div class="flex-c p-t-30 p-b-50">

          <div class="container-login100-form-btn">
            <div class="container-login100-form-btn p-t-40 p-b-25">
              <input class="login100-form-btn" type="submit" name="instruction"
               value="Read instruction" formaction="?controller=game&action=showInstruction"
              />
            </div>
          </div>

          <div class="container-login100-form-btn">
            <div class="container-login100-form-btn p-t-40 p-b-25">
              <input class="login100-form-btn" type="submit" name="board"
               value="Score Board" formaction="?controller=game&action=board"
              />
            </div>
          </div>

					<div class="container-login100-form-btn">
            <div class="container-login100-form-btn p-t-40 p-b-25">
              <input class="login100-form-btn" type="submit" name="set"
              value="PLAY" formaction="?controller=game&action=play"
              />
            </div>
					</div>
				</div>
				</form>


</div>

</div>
