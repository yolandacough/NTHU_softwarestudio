
<div id="animation">
<style type="text/css">
h1{font-family:sans-serif;font-size:16pt;color:black}
h2{font-family:sans-serif;font-size:16pt;color:black}
p{font-family:sans-serif;font-size:16pt;color:black}
table, td, th
  {
  font-family:fantasy;
  border:1px solid green;
  color:black;
  }

th
  {
  font-family:fantasy;
  background-color:green;
  color:black;
  }
<?php
for($i=0;$i<count($_SESSION['Pleft']);$i++){
if(@$_SESSION['Pleft'][$i]<=3000){
echo "div#left".($i+1).'
{
width:80px;
height:80px;
background-image:url("images/left.png");
position:absolute;
animation-name:left'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:left'.($i+1).';
-webkit-animation-name:left'.($i+1).';
-o-animation-name:left'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"left'.($i+1).'"
{
0%   {left:1100px; top:0px;}
'.(@$_SESSION['Pleft'][$i]*4/930).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-moz-keyframes"left'.($i+1).'" /* Firefox */
{
0%   {left:1100px; top:0px;}
'.(@$_SESSION['Pleft'][$i]*4/930).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-webkit-keyframes"left'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1100px; top:0px;}
'.(@$_SESSION['Pleft'][$i]*4/930).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-o-keyframes"left'.($i+1).'" /* Opera */
{
0%   {left:1100px; top:0px;}
'.(@$_SESSION['Pleft'][$i]*4/930)."%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}";
}else{
echo'
div#left'.($i+1).'
{
width:80px;
height:80px;
background-image:url("images/left.png");
position:absolute;
animation-name:left'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:left'.($i+1).';
-webkit-animation-name:left'.($i+1).';
-o-animation-name:left'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"left'.($i+1).'"
{
0%   {left:1100px; top:0px;}
'.((@$_SESSION['Pleft'][$i]-3000)/310)."%   {left:1100px; top:0px;}
".((@$_SESSION['Pleft'][$i]+1000)/310).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-moz-keyframes"left'.($i+1).'" /* Firefox */
{
0%   {left:1100px; top:0px;}
'.((@$_SESSION['Pleft'][$i]-3000)/310)."%   {left:1100px; top:0px;}
".((@$_SESSION['Pleft'][$i]+1000)/310).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-webkit-keyframes"left'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1100px; top:0px;}
'.((@$_SESSION['Pleft'][$i]-3000)/310)."%   {left:1100px; top:0px;}
".((@$_SESSION['Pleft'][$i]+1000)/310).'%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}

@-o-keyframes"left'.($i+1).'" /* Opera */
{
0%   {left:1100px; top:0px;}
'.((@$_SESSION['Pleft'][$i]-3000)/310)."%   {left:1100px; top:0px;}
".((@$_SESSION['Pleft'][$i]+1000)/310)."%  {left:1100px; top:680px;}
100%   {left:1100px; top:680px;}
}";
}
}
for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
if(@$_SESSION['Pdown'][$i]<=3000){
echo "div#down".($i+1).'
{
width:80px;
height:80px;
background-image:url("images/down.png");
position:absolute;
animation-name:down'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:down'.($i+1).';
-webkit-animation-name:down'.($i+1).';
-o-animation-name:down'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"down'.($i+1).'"
{
0%   {left:1400px; top:0px;}
'.(@$_SESSION['Pdown'][$i]*4/930).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-moz-keyframes"down'.($i+1).'" /* Firefox */
{
0%   {left:1400px; top:0px;}
'.(@$_SESSION['Pdown'][$i]*4/930).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-webkit-keyframes"down'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1400px; top:0px;}
'.(@$_SESSION['Pdown'][$i]*4/930).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-o-keyframes"down'.($i+1).'" /* Opera */
{
0%   {left:1400px; top:0px;}
'.(@$_SESSION['Pdown'][$i]*4/930)."%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}";
}else{
echo'
div#down'.($i+1).'
{
width:80px;
height:80px;
background-image:url("images/down.png");
position:absolute;
animation-name:down'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:down'.($i+1).';
-webkit-animation-name:down'.($i+1).';
-o-animation-name:down'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"down'.($i+1).'"
{
0%   {left:1400px; top:0px;}
'.((@$_SESSION['Pdown'][$i]-3000)/310)."%   {left:1400px; top:0px;}
".((@$_SESSION['Pdown'][$i]+1000)/310).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-moz-keyframes"down'.($i+1).'" /* Firefox */
{
0%   {left:1400px; top:0px;}
'.((@$_SESSION['Pdown'][$i]-3000)/310)."%   {left:1400px; top:0px;}
".((@$_SESSION['Pdown'][$i]+1000)/310).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-webkit-keyframes"down'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1400px; top:0px;}
'.((@$_SESSION['Pdown'][$i]-3000)/310)."%   {left:1400px; top:0px;}
".((@$_SESSION['Pdown'][$i]+1000)/310).'%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}

@-o-keyframes"down'.($i+1).'" /* Opera */
{
0%   {left:1400px; top:0px;}
'.((@$_SESSION['Pdown'][$i]-3000)/310)."%   {left:1400px; top:0px;}
".((@$_SESSION['Pdown'][$i]+1000)/310)."%  {left:1400px; top:680px;}
100%   {left:1400px; top:680px;}
}";
}
}
for($i=0;$i<count(@$_SESSION['Pright']);$i++){
if(@$_SESSION['Pright'][$i]<=3000){
echo "div#right".($i+1).'
{
width:80px;
height:80px;
background-image:url("images/right.png");
position:absolute;
animation-name:right'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:right'.($i+1).';
-webkit-animation-name:right'.($i+1).';
-o-animation-name:right'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"right'.($i+1).'"
{
0%   {left:1200px; top:0px;}
'.(@$_SESSION['Pright'][$i]*4/930).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-moz-keyframes"right'.($i+1).'" /* Firefox */
{
0%   {left:1200px; top:0px;}
'.(@$_SESSION['Pright'][$i]*4/930).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-webkit-keyframes"right'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1200px; top:0px;}
'.(@$_SESSION['Pright'][$i]*4/930).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-o-keyframes"right'.($i+1).'" /* Opera */
{
0%   {left:1200px; top:0px;}
'.(@$_SESSION['Pright'][$i]*4/930)."%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}";
}else{
echo'
div#right'.($i+1).'
{
width:80px;
height:80px;
background-image:url("images/right.png");
position:absolute;
animation-name:right'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:right'.($i+1).';
-webkit-animation-name:right'.($i+1).';
-o-animation-name:right'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"right'.($i+1).'"
{
0%   {left:1200px; top:0px;}
'.((@$_SESSION['Pright'][$i]-3000)/310)."%   {left:1200px; top:0px;}
".((@$_SESSION['Pright'][$i]+1000)/310).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-moz-keyframes"right'.($i+1).'" /* Firefox */
{
0%   {left:1200px; top:0px;}
'.((@$_SESSION['Pright'][$i]-3000)/310)."%   {left:1200px; top:0px;}
".((@$_SESSION['Pright'][$i]+1000)/310).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-webkit-keyframes"right'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1200px; top:0px;}
'.((@$_SESSION['Pright'][$i]-3000)/310)."%   {left:1200px; top:0px;}
".((@$_SESSION['Pright'][$i]+1000)/310).'%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}

@-o-keyframes"right'.($i+1).'" /* Opera */
{
0%   {left:1200px; top:0px;}
'.((@$_SESSION['Pright'][$i]-3000)/310)."%   {left:1200px; top:0px;}
".((@$_SESSION['Pright'][$i]+1000)/310)."%  {left:1200px; top:680px;}
100%   {left:1200px; top:680px;}
}";	
}
}
for($i=0;$i<count(@$_SESSION['Pup']);$i++){
if(@$_SESSION['Pup'][$i]<=3000){
echo "div#up".($i+1).'
{
width:80px;
height:80px;
background-image:url("images/up.png");
position:absolute;
animation-name:up'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:up'.($i+1).';
-webkit-animation-name:up'.($i+1).';
-o-animation-name:up'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"up'.($i+1).'"
{
0%   {left:1300px; top:0px;}
'.(@$_SESSION['Pup'][$i]*4/930).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-moz-keyframes"up'.($i+1).'" /* Firefox */
{
0%   {left:1300px; top:0px;}
'.(@$_SESSION['Pup'][$i]*4/930).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-webkit-keyframes"up'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1300px; top:0px;}
'.(@$_SESSION['Pup'][$i]*4/930).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-o-keyframes"up'.($i+1).'" /* Opera */
{
0%   {left:1300px; top:0px;}
'.(@$_SESSION['Pup'][$i]*4/930)."%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}";
}else{
echo'
div#up'.($i+1).'
{
width:80px;
height:80px;
background-image:url("images/up.png");
position:absolute;
animation-name:up'.($i+1).';
animation-duration:31s;
animation-iteration-count:1;
animation-timing-function:linear;
animation-fill-mode:forwards;
animation-play-state:paused;
-moz-animation-name:up'.($i+1).';
-webkit-animation-name:up'.($i+1).';
-o-animation-name:up'.($i+1).';
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"up'.($i+1).'"
{
0%   {left:1300px; top:0px;}
'.((@$_SESSION['Pup'][$i]-3000)/310)."%   {left:1300px; top:0px;}
".((@$_SESSION['Pup'][$i]+1000)/310).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-moz-keyframes"up'.($i+1).'" /* Firefox */
{
0%   {left:1300px; top:0px;}
'.((@$_SESSION['Pup'][$i]-3000)/310)."%   {left:1300px; top:0px;}
".((@$_SESSION['Pup'][$i]+1000)/310).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-webkit-keyframes"up'.($i+1).'" /* Safari and Chrome */
{
0%   {left:1300px; top:0px;}
'.((@$_SESSION['Pup'][$i]-3000)/310)."%   {left:1300px; top:0px;}
".((@$_SESSION['Pup'][$i]+1000)/310).'%  {left:1300px; top:680px;}
100%   {left:1300px; top:680px;}
}

@-o-keyframes"up'.($i+1).'" /* Opera */
{
0%   {left:1300px; top:0px;}
'.((@$_SESSION['Pup'][$i]-3000)/310)."%   {left:1300px; top:0px;}
".((@$_SESSION['Pup'][$i]+1000)/310)."%  {left:1300px; top:680px;}
100%   {up:1300px; top:680px;}
}";
}
}
?>
div#left
{
width:80px;
height:80px;
background-image:url("images/left_empty.png");
position:absolute;
animation-name:left;
animation-duration:31s;
animation-iteration-count:infinite;
animation-timing-function:linear;
animation-play-state:paused;
-moz-animation-name:left;
-webkit-animation-name:left;
-o-animation-name:left;
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"left"
{
0%   {left:1100px; top:510px;}
100%  {left:1100px; top:510px;}
}

@-moz-keyframes"left" /* Firefox */
{
0%   {left:1100px; top:510px;}
100%  {left:1100px; top:510px;}
}

@-webkit-keyframes"left" /* Safari and Chrome */
{
0%   {left:1100px; top:510px;}
100%  {left:1100px; top:510px;}
}

@-o-keyframes"left" /* Opera */
{
0%   {left:1100px; top:510px;}
100%  {left:1100px; top:510px;}
}
div#right
{
width:80px;
height:80px;
background-image:url("images/right_empty.png");
position:absolute;
animation-name:right;
animation-duration:31s;
animation-iteration-count:infinite;
animation-timing-function:linear;
animation-play-state:paused;
-moz-animation-name:right;
-webkit-animation-name:right;
-o-animation-name:right;
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}


@keyframes"right"
{
0%   {left:1200px; top:510px;}
100%  {left:1200px; top:510px;}
}

@-moz-keyframes"right" /* Firefox */
{
0%   {left:1200px; top:510px;}
100%  {left:1200px; top:510px;}
}

@-webkit-keyframes"right" /* Safari and Chrome */
{
0%   {left:1200px; top:510px;}
100%  {left:1200px; top:510px;}
}

@-o-keyframes"right" /* Opera */
{
0%   {left:1200px; top:510px;}
100%  {left:1200px; top:510px;}
}
div#up
{
width:80px;
height:80px;
background-image:url("images/up_empty.png");
position:absolute;
animation-name:up;
animation-duration:31s;
animation-iteration-count:infinite;
animation-timing-function:linear;
animation-play-state:paused;
-moz-animation-name:up;
-webkit-animation-name:up;
-o-animation-name:up;
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"up"
{
0%   {left:1300px; top:510px;}
100%  {left:1300px; top:510px;}
}

@-moz-keyframes"up" /* Firefox */
{
0%   {left:1300px; top:510px;}
100%  {left:1300px; top:510px;}
}

@-webkit-keyframes"up" /* Safari and Chrome */
{
0%   {left:1300px; top:510px;}
100%  {left:1300px; top:510px;}
}

@-o-keyframes"up" /* Opera */
{
0%   {left:1300px; top:510px;}
100%  {left:1300px; top:510px;}
}
div#down
{
width:80px;
height:80px;
background-image:url("images/down_empty.png");
position:absolute;
animation-name:down;
animation-duration:31s;
animation-iteration-count:infinite;
animation-timing-function:linear;
animation-play-state:paused;
-moz-animation-name:down;
-webkit-animation-name:down;
-o-animation-name:down;
-moz-animation-duration:31s;
-webkit-animation-duration:31s;
-o-animation-duration:31s;
}
@keyframes"down"
{
0%   {left:1400px; top:510px;}
100%  {left:1400px; top:510px;}
}

@-moz-keyframes"down" /* Firefox */
{
0%   {left:1400px; top:510px;}
100%  {left:1400px; top:510px;}
}

@-webkit-keyframes"down" /* Safari and Chrome */
{
0%   {left:1400px; top:510px;}
100%  {left:1400px; top:510px;}
}

@-o-keyframes"down" /* Opera */
{
0%   {left:1400px; top:510px;}
100%  {left:1400px; top:510px;}
}
</style>
</div>
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
<?php
/*@$_SESSION['Pup']=$_SESSION['Pup'];
@$_SESSION['Pdown']=$_SESSION['Pdown'];
@$_SESSION['Pleft']=$_SESSION['Pleft'];
@$_SESSION['Pright']=$_SESSION['Pright'];*/
?>

<div id="left"></div>
<div id="right"></div>
<div id="up"></div>
<div id="down"></div>
<?php
	for($i=0;$i<count($_SESSION['Pup']);$i++){
		echo '<div id="up'.($i+1).'"></div>';
	}
	for($i=0;$i<count($_SESSION['Pdown']);$i++){
		echo '<div id="down'.($i+1).'"></div>';
	}
	for($i=0;$i<count($_SESSION['Pleft']);$i++){
		echo '<div id="left'.($i+1).'"></div>';
	}
	for($i=0;$i<count($_SESSION['Pright']);$i++){
		echo '<div id="right'.($i+1).'"></div>';
	}
?>
<?php
$Language = 1;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if($_POST['action'] == 'Change Language'){
		if ($Language==1){
			$Language = 2;
		}else if($Language==2){
			$Language = 1;
		}
	}elseif ($_POST['action'] == '显示中文') {
		if ($Language==1){
			$Language = 2;
		}else if($Language==2){
			$Language = 1;
		}
	}
}else{
		if ($Language==1){
			$Language = 2;
		}else if($Language==2){
			$Language = 1;
		}
	
}

 if ($Language==1){
  echo 
  '
  <div class="wrap-index p-l-55 p-r-55 p-t-30 p-b-30">
	<p class="txt4 p-b-25">
  	Click Start to start the game,click ↑↓←→ to hit the rhyme.</p>
    <p class="txt3 p-b-25" id="remind">If the music is not right,press F5 and play again.</P>
  	<p class="txt3 p-b-25" id="status">Status: Ready</P>
	<p class="txt3 p-b-25" id="volume1">volume now:</p>
	<p class="txt3 p-b-25" id="volume">1</p>
	
<table class="table">

	<tr class="tr">
	<th class="th">great</th>
	<th class="th">good</th>
	<th class="th">miss</th>
	</tr>

	<tr class="tr">
   	<td class="td" id="great">0</td>
   	<td class="td" id="good">0</td>
   	<td class="td" id="miss">0</td>
	</tr>

</table>

<p class="txt3" id="totalscore">Total score</p>
<p class="txt3" id="pause">Pause: Space</p>
<p class="txt3" id="this_beat_status">Great, good or missing for this beat.</p>


<form method = "POST">
<div class="container-login100-form-btn">
<div class="container-login100-form-btn p-t-40 p-b-25">
<input type = "submit" name = "action" value = "显示中文" class="login100-form-btn">
</div>
</div>
</form>

</div>
  ';
 }else if ($Language==2){
 	echo 
  '
  <div class="wrap-index p-l-55 p-r-55 p-t-30 p-b-30">
  <p class="txt4 p-b-25">按空格开始游戏，用↑↓←→来击打节奏</p>
  <p class="txt3 p-b-25" id="remind">若音樂沒更新,煩請按F5刷新頁面.</P>
  <p class="txt4 p-b-25" id="status">游戏状态：准备完成</p>
  <p class="txt3 p-b-25" id="volume1">音量:</p>
  <p class="txt3 p-b-25" id="volume">1</p>
<table class="table">

	<tr class="tr">
	<th class="th">超棒</th>
	<th class="th">不错哦</th>
	<th class="th">没打中</th>
	</tr>

	<tr class="tr">
   	<td class="td" id="great">0</td>
   	<td class="td" id="good">0</td>
   	<td class="td" id="miss">0</td>
	</tr>

</table>

<p class="txt3" id="totalscore">总分</p>
<p class="txt3" id="pause">暂停：空格</p>
<p class="txt3" id="this_beat_status">超棒、不错哦、没打中</p>

<form method = "POST">
<div class="container-login100-form-btn">
<div class="container-login100-form-btn p-t-40 p-b-25">
<input type = "submit" name = "action" value = "Choose English" class="login100-form-btn">
</div>
</div>
</form>

</div>
  ';
};
?>



<script>
var audio = new Audio("<?php echo @$_SESSION['Plink'] ?>");
var starttime=0;
var pausetime=0;
var restarttime=0;
var deleted_total_time=0;
var time_passed=0;
var pause=0;
var timenow
var timecalculated
var totalscore = 0;
var example_array_left = [<?php echo join(",",@$_SESSION['Pleft']);?>];
var real_left = 0;
var example_array_right = [<?php echo join(",",@$_SESSION['Pright']);?>];
var real_right = 0;
var example_array_up = [<?php echo join(",",@$_SESSION['Pup']);?>];
var real_up = 0;
var example_array_down = [<?php echo join(",",@$_SESSION['Pdown']);?>];
var real_down = 0;
var index1_up = 0;
var index1_down = 0;
var index1_right = 0;
var index1_left = 0;
var great_amount=0;
var good_amount=0;
var miss_amount=0;
var timer1;
var timer2;
var timer3;
var timer4;
var timer5;
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "var timer".($i+1)."_up;\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "var timer".($i+1)."_down;\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "var timer".($i+1)."_left;\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "var timer".($i+1)."_right;\n";
	}
?>
var stop_id = 0;
document.captureEvents(Event.keydown);
document.onkeydown=keyFunction;
function keyFunction() {
	if (event.keyCode==38) {//up
     hit_up();
	}
	else if (event.keyCode==37) {//left
     hit_left();
	}
	else if (event.keyCode==39) {//right
     hit_right();
	}
	else if (event.keyCode==40) {//down
     hit_down();
	}
	else if (event.keyCode==32) {//space
     start_pause();
	 document.getElementById("volume").innerHTML = audio.volume ;
	}else if (event.keyCode==27) {//esc
     window.close();
	}else if (event.keyCode==83) {//s for stop
     stop_playing();
	}else if (event.keyCode==90) {//z for lighter
					if(audio.volume>=0.1)
					{audio.volume = audio.volume - 0.1;}
					document.getElementById("volume").innerHTML = audio.volume ;
					}
					else if (event.keyCode==88) {//x for louder
					if(audio.volume<=0.9)
					{audio.volume = audio.volume + 0.1;}
					document.getElementById("volume").innerHTML = audio.volume ;
					}
}
function start_pause() {
var d=new Date();
if(((d.getTime()-starttime- deleted_total_time>=32000)&&(pause==0))||(stop_id == 1)){
audio.currentTime = 0;
audio.play();
starttime=d.getTime();
<?php
for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo 'left'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo 'right'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo 'up'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo 'down'.($i+1).'.style.animationPlayState="running";';
}
?>
timenow = 0;
timecalculated = 0;
totalscore = 0;
great_amount=0;
good_amount=0;
miss_amount=0;
pausetime=0;
restarttime=0;
time_passed = 0;
deleted_total_time=0;
stop_id = 0;
document.getElementById("status").innerHTML = "Status: Playing";
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
document.getElementById("pause").innerHTML = "Pause: space";
document.getElementById("this_beat_status").innerHTML = "no status";
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("miss").innerHTML = miss_amount ;
index1_up = 0;
index1_down = 0;
index1_right = 0;
index1_left = 0;
timer1 = setTimeout(myTimeout1, 10000);
timer2 = setTimeout(myTimeout2, 20000);
timer3 = setTimeout(myTimeout3, 30005);
timer4 = setTimeout(myTimeout4, 31000);
timer5 = setTimeout(myTimeout5, 32000);
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "timer".($i+1)."_up = setTimeout(myTimeout".($i+1)."_up, example_array_up[".$i."]+200);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "timer".($i+1)."_down = setTimeout(myTimeout".($i+1)."_down, example_array_down[".$i."]+200);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "timer".($i+1)."_left = setTimeout(myTimeout".($i+1)."_left, example_array_left[".$i."]+200);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "timer".($i+1)."_right = setTimeout(myTimeout".($i+1)."_right, example_array_right[".$i."]+200);\n";
	}
?>
}else if(pause==0){
audio.pause();
pausetime=d.getTime();
pause=1;
<?php
for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo 'left'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo 'right'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo 'up'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo 'down'.($i+1).'.style.animationPlayState="paused";';
}
?>
if(restarttime==0){time_passed = time_passed + pausetime - starttime}
else{time_passed = time_passed + pausetime - restarttime}
clearTimeout(timer1);
clearTimeout(timer2);
clearTimeout(timer3);
clearTimeout(timer4);
clearTimeout(timer5);
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "clearTimeout(timer".($i+1)."_up);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "clearTimeout(timer".($i+1)."_down);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "clearTimeout(timer".($i+1)."_left);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "clearTimeout(timer".($i+1)."_right);\n";
	}
?>
document.getElementById("pause").innerHTML = "Now pausing" ;
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("miss").innerHTML = miss_amount ;
}else if(pause==1){
audio.play();
restarttime=d.getTime();
deleted_total_time = deleted_total_time + restarttime - pausetime;
<?php
for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo 'left'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo 'right'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo 'up'.($i+1).'.style.animationPlayState="running";';
}
for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo 'down'.($i+1).'.style.animationPlayState="running";';
}
?>
pause=0;
document.getElementById("pause").innerHTML = "no pause" ;
if((10000-time_passed)>=0){timer1 = setTimeout(myTimeout1, 10000-time_passed);}
if((20000-time_passed)>=0){timer2 = setTimeout(myTimeout2, 20000-time_passed);}
if((30005-time_passed)>=0){timer3 = setTimeout(myTimeout3, 30005-time_passed);}
if((31000-time_passed)>=0){timer4 = setTimeout(myTimeout4, 31000-time_passed);}
if((32000-time_passed)>=0){timer5 = setTimeout(myTimeout5, 32000-time_passed);}
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "if((example_array_up[".$i."]-time_passed)>=0){timer".($i+1)."_up = setTimeout(myTimeout".($i+1)."_up, example_array_up[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "if((example_array_down[".$i."]-time_passed)>=0){timer".($i+1)."_down = setTimeout(myTimeout".($i+1)."_down, example_array_down[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "if((example_array_left[".$i."]-time_passed)>=0){timer".($i+1)."_left = setTimeout(myTimeout".($i+1)."_left, example_array_left[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "if((example_array_right[".$i."]-time_passed)>=0){timer".($i+1)."_right = setTimeout(myTimeout".($i+1)."_right, example_array_right[".$i."]+200-time_passed);}\n";
	}
?>
}
}
function stop_playing() {
stop_id = 1;
pause=0;
audio.pause();
<?php
for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo 'left'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo 'right'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo 'up'.($i+1).'.style.animationPlayState="paused";';
}
for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo 'down'.($i+1).'.style.animationPlayState="paused";';
}
?>
clearTimeout(timer1);
clearTimeout(timer2);
clearTimeout(timer3);
clearTimeout(timer4);
clearTimeout(timer5);
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "clearTimeout(timer".($i+1)."_up);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "clearTimeout(timer".($i+1)."_down);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "clearTimeout(timer".($i+1)."_left);\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "clearTimeout(timer".($i+1)."_right);\n";
	}
?>
document.getElementById("status").innerHTML = "ready to start.";
}
function hit_up() {
var d=new Date();
timenow=d.getTime();
timecalculated = timenow - starttime - deleted_total_time;
if((timecalculated <= 30005)&&(pause==0)&&(stop_id==0)){
real_up = timecalculated;
if(index1_up<=example_array_up.length-1){
if(real_up<=(example_array_up[index1_up]-200)){
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_up<=(example_array_up[index1_up]+200))&&(real_up>=(example_array_up[index1_up]-200))){
if((real_up<=(example_array_up[index1_up]+100))&&(real_up>=(example_array_up[index1_up]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_up++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
}
function hit_down() {
var d=new Date();
timenow=d.getTime();
timecalculated = timenow - starttime - deleted_total_time;
if((timecalculated <= 30005)&&(pause==0)&&(stop_id==0)){
real_down = timecalculated;
if(index1_down<=example_array_down.length-1){
if(real_down<=(example_array_down[index1_down]-200)){
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_down<=(example_array_down[index1_down]+200))&&(real_down>=(example_array_down[index1_down]-200))){
if((real_down<=(example_array_down[index1_down]+100))&&(real_down>=(example_array_down[index1_down]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_down++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
}
function hit_right() {
var d=new Date();
timenow=d.getTime();
timecalculated = timenow - starttime - deleted_total_time;
if((timecalculated <= 30005)&&(pause==0)&&(stop_id==0)){
real_right = timecalculated;
if(index1_right<=example_array_right.length-1){
if(real_right<=(example_array_right[index1_right]-200)){
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_right<=(example_array_right[index1_right]+200))&&(real_right>=(example_array_right[index1_right]-200))){
if((real_right<=(example_array_right[index1_right]+100))&&(real_right>=(example_array_right[index1_right]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_right++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
}
function hit_left() {
var d=new Date();
timenow=d.getTime();
timecalculated = timenow - starttime - deleted_total_time;
if((timecalculated <= 30005)&&(pause==0)&&(stop_id==0)){
real_left = timecalculated;
if(index1_left<=example_array_left.length-1){
if(real_left<=(example_array_left[index1_left]-200)){
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_left<=(example_array_left[index1_left]+200))&&(real_left>=(example_array_left[index1_left]-200))){
if((real_left<=(example_array_left[index1_left]+100))&&(real_left>=(example_array_left[index1_left]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_left++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "Last hit: miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
}
function myTimeout1() {
    document.getElementById("status").innerHTML = "cheer up!";
}
function myTimeout2() {
    document.getElementById("status").innerHTML = "almost finished!";
}
function myTimeout3() {
    document.getElementById("status").innerHTML = "finish!";
	//up part
}
function myTimeout4() {
    document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
    document.getElementById("great").innerHTML = great_amount ;
    document.getElementById("good").innerHTML = good_amount ;
    document.getElementById("miss").innerHTML = miss_amount ;
	document.myForm.totalscore.value = totalscore;
	document.myForm.submit();
}
function myTimeout5() {
    document.getElementById("status").innerHTML = "if you want to play again, press start";
}
<?php
	for($i=0;$i<count(@$_SESSION['Pup']);$i++){
		echo "function myTimeout".($i+1)."_up() {\n";
		echo "if(index1_up<=".$i."){\n";
		echo 'document.getElementById("this_beat_status").innerHTML = "miss";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_up++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pdown']);$i++){
		echo "function myTimeout".($i+1)."_down() {\n";
		echo "if(index1_down<=".$i."){\n";
		echo 'document.getElementById("this_beat_status").innerHTML = "miss";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_down++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pleft']);$i++){
		echo "function myTimeout".($i+1)."_left() {\n";
		echo "if(index1_left<=".$i."){\n";
		echo 'document.getElementById("this_beat_status").innerHTML = "miss";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_left++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count(@$_SESSION['Pright']);$i++){
		echo "function myTimeout".($i+1)."_right() {\n";
		echo "if(index1_right<=".$i."){\n";
		echo 'document.getElementById("this_beat_status").innerHTML = "miss";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_right++;\n";
		echo "}\n";
		echo "}\n";
	}
	?>
</script>

<form name="myForm" action="?controller=game&action=transfer" method="post">
<input type="hidden" name="totalscore" value="">
</form>

</div>