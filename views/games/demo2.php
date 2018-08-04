<html>
<?php
$up=array(3253,4730,6256,7774,9301,10778,12270,13786);
$down=array(4012,5492,7016,8537,10058,11531,13082,14537);
$left=array(15282,16816,18332,19835,21359,22857,24374,25875);
$right=array(16072,17562,19078,20589,22140,23603,25145,26645);
?>
<head>
<style type="text/css">
body{font-size:16pt;color:red;background:white}
</style>
</head>
<body>
<p>Click "start" to start the game,click "hit" to hit the rhyme.</p>
<p id="starttime">start time.</p>
<p id="timenow">time now.</p>
<p id="timecalculated">time being calculated.</p>
<p id="arraywegetnowleft">left arrow we get now.</p>
<p id="arraywegetnowright">right arrow we get now.</p>
<p id="arraywegetnowup">up arrow we get now.</p>
<p id="arraywegetnowdown">down arrow we get now.</p>
<p id="status">ready to start.</p>
<p id="great">number of great beats.</p>
<p id="good">number of good beats.</p>
<p id="miss">number of miss beats.</p>
<p id="totalscore">total score.</p>
<p id="pause">pause now?</p>
<p id="this_beat_status">great, good or missing for this beat.</p>
<script>
var audio = new Audio("Genius_part2.mp3");
var starttime=0;
var pausetime=0;
var restarttime=0;
var deleted_total_time=0;
var time_passed=0;
var pause=0;
var timenow
var timecalculated
var totalscore = 0;
var example_array_left = [<?php echo join(",",$left);?>];
var real_left = 0;
var example_array_right = [<?php echo join(",",$right);?>];
var real_right = 0;
var example_array_up = [<?php echo join(",",$up);?>];
var real_up = 0;
var example_array_down = [<?php echo join(",",$down);?>];
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
	for($i=0;$i<count($up);$i++){
		echo "var timer".($i+1)."_up;\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "var timer".($i+1)."_down;\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "var timer".($i+1)."_left;\n";
	}
	for($i=0;$i<count($right);$i++){
		echo "var timer".($i+1)."_right;\n";
	}
?>
var stop_id = 0;
//example_array_up.length
//example_array_down.length
//example_array_right.length
//example_array_left.length
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
	}else if (event.keyCode==27) {//esc
     window.close();
	}else if (event.keyCode==83) {//s for stop
     stop_playing();
	}
}
function start_pause() {
var d=new Date();
if(((d.getTime()-starttime- deleted_total_time>=32000)&&(pause==0))||(stop_id == 1)){
audio.currentTime = 0;
audio.play();
starttime=d.getTime();
animation();
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
document.getElementById("starttime").innerHTML = starttime;
document.getElementById("timenow").innerHTML = timenow;
document.getElementById("timecalculated").innerHTML = timecalculated;
document.getElementById("status").innerHTML = "playing now";
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
document.getElementById("pause").innerHTML = "no pause";
document.getElementById("this_beat_status").innerHTML = "no status";
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
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
	for($i=0;$i<count($up);$i++){
		echo "timer".($i+1)."_up = setTimeout(myTimeout".($i+1)."_up, example_array_up[".$i."]+200);\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "timer".($i+1)."_down = setTimeout(myTimeout".($i+1)."_down, example_array_down[".$i."]+200);\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "timer".($i+1)."_left = setTimeout(myTimeout".($i+1)."_left, example_array_left[".$i."]+200);\n";
	}
	for($i=0;$i<count($right);$i++){
		echo "timer".($i+1)."_right = setTimeout(myTimeout".($i+1)."_right, example_array_right[".$i."]+200);\n";
	}
?>
}else if(pause==0){
audio.pause();
pausetime=d.getTime();
pause=1;
if(restarttime==0){time_passed = time_passed + pausetime - starttime}
else{time_passed = time_passed + pausetime - restarttime}
clearTimeout(timer1);
clearTimeout(timer2);
clearTimeout(timer3);
clearTimeout(timer4);
clearTimeout(timer5);
<?php
	for($i=0;$i<count($up);$i++){
		echo "clearTimeout(timer".($i+1)."_up);\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "clearTimeout(timer".($i+1)."_down);\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "clearTimeout(timer".($i+1)."_left);\n";
	}
	for($i=0;$i<count($right);$i++){
		echo "clearTimeout(timer".($i+1)."_right);\n";
	}
?>
document.getElementById("pause").innerHTML = "pause" ;
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
}else if(pause==1){
audio.play();
restarttime=d.getTime();
deleted_total_time = deleted_total_time + restarttime - pausetime;
pause=0;
document.getElementById("pause").innerHTML = "no pause" ;
if((10000-time_passed)>=0){timer1 = setTimeout(myTimeout1, 10000-time_passed);}
if((20000-time_passed)>=0){timer2 = setTimeout(myTimeout2, 20000-time_passed);}
if((30005-time_passed)>=0){timer3 = setTimeout(myTimeout3, 30005-time_passed);}
if((31000-time_passed)>=0){timer4 = setTimeout(myTimeout4, 31000-time_passed);}
if((32000-time_passed)>=0){timer5 = setTimeout(myTimeout5, 32000-time_passed);}
<?php
	for($i=0;$i<count($up);$i++){
		echo "if((example_array_up[".$i."]-time_passed)>=0){timer".($i+1)."_up = setTimeout(myTimeout".($i+1)."_up, example_array_up[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "if((example_array_down[".$i."]-time_passed)>=0){timer".($i+1)."_down = setTimeout(myTimeout".($i+1)."_down, example_array_down[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "if((example_array_left[".$i."]-time_passed)>=0){timer".($i+1)."_left = setTimeout(myTimeout".($i+1)."_left, example_array_left[".$i."]+200-time_passed);}\n";
	}
	for($i=0;$i<count($right);$i++){
		echo "if((example_array_right[".$i."]-time_passed)>=0){timer".($i+1)."_right = setTimeout(myTimeout".($i+1)."_right, example_array_right[".$i."]+200-time_passed);}\n";
	}
?>
}
}
function stop_playing() {
stop_id = 1;
pause=0;
audio.pause();
clearTimeout(timer1);
clearTimeout(timer2);
clearTimeout(timer3);
clearTimeout(timer4);
clearTimeout(timer5);
<?php
	for($i=0;$i<count($up);$i++){
		echo "clearTimeout(timer".($i+1)."_up);\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "clearTimeout(timer".($i+1)."_down);\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "clearTimeout(timer".($i+1)."_left);\n";
	}
	for($i=0;$i<count($right);$i++){
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
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_up<=(example_array_up[index1_up]+200))&&(real_up>=(example_array_up[index1_up]-200))){
if((real_up<=(example_array_up[index1_up]+100))&&(real_up>=(example_array_up[index1_up]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_up++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("timenow").innerHTML = timenow;
document.getElementById("timecalculated").innerHTML = timecalculated;
document.getElementById("arraywegetnowup").innerHTML = real_up;
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
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_down<=(example_array_down[index1_down]+200))&&(real_down>=(example_array_down[index1_down]-200))){
if((real_down<=(example_array_down[index1_down]+100))&&(real_down>=(example_array_down[index1_down]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_down++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("timenow").innerHTML = timenow;
document.getElementById("timecalculated").innerHTML = timecalculated;
document.getElementById("arraywegetnowdown").innerHTML = real_down;
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
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_right<=(example_array_right[index1_right]+200))&&(real_right>=(example_array_right[index1_right]-200))){
if((real_right<=(example_array_right[index1_right]+100))&&(real_right>=(example_array_right[index1_right]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_right++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("timenow").innerHTML = timenow;
document.getElementById("timecalculated").innerHTML = timecalculated;
document.getElementById("arraywegetnowright").innerHTML = real_right;
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
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
else if((real_left<=(example_array_left[index1_left]+200))&&(real_left>=(example_array_left[index1_left]-200))){
if((real_left<=(example_array_left[index1_left]+100))&&(real_left>=(example_array_left[index1_left]-100))){
great_amount++;
document.getElementById("this_beat_status").innerHTML = "great";
totalscore = totalscore +100;
document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}else{
good_amount++;
document.getElementById("this_beat_status").innerHTML = "good";
totalscore = totalscore + 30;
document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
index1_left++;
}
}else{
miss_amount++;
document.getElementById("this_beat_status").innerHTML = "miss";
totalscore = totalscore -10;
document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;
}
document.getElementById("timenow").innerHTML = timenow;
document.getElementById("timecalculated").innerHTML = timecalculated;
document.getElementById("arraywegetnowleft").innerHTML = real_left;
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
    document.getElementById("great").innerHTML = "number of great beats : " + great_amount ;
    document.getElementById("good").innerHTML = "number of good beats : " + good_amount ;
    document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;
}
function myTimeout5() {
    document.getElementById("status").innerHTML = "if you want to play again, press start";
}
<?php
	for($i=0;$i<count($up);$i++){
		echo "function myTimeout".($i+1)."_up() {\n";
		echo "if(index1_up<=".$i."){\n";
		echo 'document.getElementById("status").innerHTML = "miss!";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_up++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count($down);$i++){
		echo "function myTimeout".($i+1)."_down() {\n";
		echo "if(index1_down<=".$i."){\n";
		echo 'document.getElementById("status").innerHTML = "miss!";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_down++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count($left);$i++){
		echo "function myTimeout".($i+1)."_left() {\n";
		echo "if(index1_left<=".$i."){\n";
		echo 'document.getElementById("status").innerHTML = "miss!";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_left++;\n";
		echo "}\n";
		echo "}\n";
	}
	for($i=0;$i<count($right);$i++){
		echo "function myTimeout".($i+1)."_right() {\n";
		echo "if(index1_right<=".$i."){\n";
		echo 'document.getElementById("status").innerHTML = "miss!";'."\n";
		echo "miss_amount++;\n";
		echo "totalscore = totalscore -10;\n";
		echo 'document.getElementById("miss").innerHTML = "number of miss beats : " + miss_amount ;'."\n";
		echo 'document.getElementById("totalscore").innerHTML = "your score is " + totalscore ;'."\n";
		echo "index1_right++;\n";
		echo "}\n";
		echo "}\n";
	}
?>
function animation(){	
	_up = [];//action movie blocks
	_down = [];
	_left = [];
	_right = [];
	for (var i=0;i<example_array_up.length;i++){
		_up[i] = document.createElement("img");
		_up[i].src = "../../images/up.png";
		_up[i].style.top = -example_array_up[i];
		_up[i].style.position = "absolute";
		document.body.appendChild(_up[i]);
	}
	for (i=0;i<example_array_down.length;i++){
		_down[i] = document.createElement("img");
		_down[i].src = "../../images/down.png";
		_down[i].style.top = -example_array_down[i];
		_down[i].style.position = "absolute";
		_down[i].style.left = "200px";
		document.body.appendChild(_down[i]);
	}
	for (i=0;i<example_array_left.length;i++){
		_left[i] = document.createElement("img");
		_left[i].src = "../../images/left.png";
		_left[i].style.top = -example_array_left[i];
		_left[i].style.position = "absolute";
		_left[i].style.left = "400px";
		document.body.appendChild(_left[i]);
	}
	for (i=0;i<example_array_right.length;i++){
		_right[i] = document.createElement("img");
		_right[i].src = "../../images/right.png";
		_right[i].style.top = -example_array_right[i];
		_right[i].style.position = "absolute";
		_right[i].style.left = "600px";
		document.body.appendChild(_right[i]);
	}
	var min = 0;
	var d = new Date();
	var speed = 0.1;
	var interval = 100;
	var startTime = d.getTime();
	var myFun = setInterval(run,interval);
	var up_place = [];
	var down_place = [];
	var left_place = [];
	var right_place = [];
	function run(){
		var d = new Date();
		//calculate where they are
		for (i=min;i<example_array_up.length;i++){
			up_place[i] = (-example_array_up[i]+(d.getTime()-startTime))*speed;
			if (up_place[i] > 500){
				_up[i].style.display = "none";
				min = i+1;
			}else{
				_up[i].style.top = up_place[i]+"px";
			}
		}
		for (i=min;i<example_array_down.length;i++){
			down_place[i] = (-example_array_down[i]+(d.getTime()-startTime))*speed;
			if (down_place[i] > 500){
				_down[i].style.display = "none";
				min = i+1;
			}else{
				_down[i].style.top = down_place[i]+"px";
			}
		}
		for (i=min;i<example_array_left.length;i++){
			left_place[i] = (-example_array_left[i]+(d.getTime()-startTime))*speed;
			if (left_place[i] > 500){
				_left[i].style.display = "none";
				min = i+1;
			}else{
				_left[i].style.top = left_place[i]+"px";
			}
		}
		for (i=min;i<example_array_right.length;i++){
			right_place[i] = (-example_array_right[i]+(d.getTime()-startTime))*speed;
			if (right_place[i] > 500){
				_right[i].style.display = "none";
				min = i+1;
			}else{
				_right[i].style.top = right_place[i]+"px";
			}
		}
	}
}
</script>
</body>
</html>