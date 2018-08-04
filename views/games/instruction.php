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
          Game Instruction
        </span>

	<div class="text-center p-b-40">
		<!--<center><a href="play.htm"><button class="button button2" style="vertical-align: middle;"><span>New game</span></button></a></center>-->
<h2 class="txt4">
Q:What type of game it is?
</h2>
<br>

<h2 class="txt3">
A:  It is a Music Rhythm game.You are going to choose your favorite music, and find the exciting rhythm inside!
</h2>
<br>

<br>

<h2 class="txt4">
Q:How to play?
</h2>
<br>

<h2 class="txt3">
A:  Focus on the arrows that are falling down from the top,
when they arrive at the bottom line,
hit the corresponding "↑↓←→" on your keyboard!
</h2>
<br>

<br>

<h2 class="txt4">
Q:How to score?
</h2>
<br>
<h2 class="txt3">
A:  The time you hit the key will be recorded and then compared with the precise time point.
The more closer they are, the higher scores you will get!
</h2>
</div>




	<div class="container-login100-form-btn p-t-40 p-b-25">
		<input class="login100-form-btn" type="submit" name="start" value="Start Game" formaction="?controller=game&action=settings"
		/>
	</div>
</form>
</div>
</div>
