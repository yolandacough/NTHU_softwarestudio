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
				<form class="login100-form validate-form" >
				<a href="?controller=accounts&action=home" class="login100-form-bigtitle p-b-37">
					Musicaction
				</a>

		        <span class="login100-form-title p-b-15">
		          Beat Recoder
		        </span>

				<p class="txt2 p-b-15">Tap "space" to start the game, tap "↑ ↓ ← →" to hit the beat, tap "s" to save the beat.tap "z" make the volume smaller.tap "x" make the volume louder.</p>
				<p id="arraywegetnowleft">left array we get now.</p>
				<p id="arraywegetnowright">right array we get now.</p>
				<p id="arraywegetnowup">up array we get now.</p>
				<p id="arraywegetnowdown">down array we get now.</p>
				<p id="status">ready to start.</p>
				<p id="pause">pause now?</p>
				<p id="mode">mode now is 1.</p>
				<p id="volume">volume now .</p>
				<p id="remind">if the music is not refreshed, press F5.</p>
				<p id="caution">you can type "1(for easy),2(for moderate),3(for hard)"now.</p>
				<script>
				var audio = new Audio("Music/<?php echo @$_SESSION['mlink'] ?>");
				var mode=1;
				var starttime=0;
				var pausetime=0;
				var restarttime=0;
				var deleted_total_time=0;
				var time_passed=0;
				var pause=0;
				var timenow;
				var timecalculated;
				var real_array_left = new Array();
				var real_array_right = new Array();
				var real_array_up = new Array();
				var real_array_down = new Array();
				var index = 0;
				var index1 = 0;
				var index2 = 0;
				var great_amount=0;
				var good_amount=0;
				var miss_amount=0;
				var penalty_amount=0;
				var example_array_total_length;
				var real_array_total_length;
				var timer1;
				var timer2;
				var timer3;
				var timer4;
				var timer5;
				var timer6;
				var timer7;
				var timer8;
				var timer9;
				var timer10;
				var timer11;
				var timer12;
				var timer13;
				var timer14;
				var timer15;
				var timer16;
				var timer17;
				var timer18;
				var timer19;
				var timer20;
				var timer21;
				var timer22;
				var timer23;
				var timer24;
				var timer25;
				var timer26;
				var timer27;
				var timer28;
				var timer29;
				var timer30;
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
					 document.getElementById("volume").innerHTML =  "volume now:"+ audio.volume ;
					}else if (event.keyCode==27) {//esc
				     window.close();
					}else if (event.keyCode==49) {//1
				     mode=1;
					 document.getElementById("mode").innerHTML = "mode now is 1";
					}else if (event.keyCode==50) {//2
				     mode=2;
					 document.getElementById("mode").innerHTML = "mode now is 2";
					}else if (event.keyCode==51) {//3
				     mode=3;
					 document.getElementById("mode").innerHTML = "mode now is 3";
					}else if (event.keyCode==83) {//s for stop
                     document.myForm2.left.value = real_array_left;
					 document.myForm2.right.value = real_array_right;
					 document.myForm2.up.value = real_array_up;
					 document.myForm2.down.value = real_array_down;
					 document.myForm2.mode.value = mode;
					 document.myForm2.submit();
					}else if (event.keyCode==90) {//z for lighter
					if(audio.volume>=0.1)
					{audio.volume = audio.volume - 0.1;}
					document.getElementById("volume").innerHTML = "volume now:" + audio.volume ;
					}
					else if (event.keyCode==88) {//x for louder
					if(audio.volume<=0.9)
					{audio.volume = audio.volume + 0.1;}
					document.getElementById("volume").innerHTML = "volume now:" + audio.volume ;
					}
				}
				function start_pause() {
				var d=new Date();
				if((d.getTime()-starttime- deleted_total_time>=32000)&&(pause==0)){
				starttime=d.getTime();
				audio.currentTime = 0;
				audio.play();
				timenow = 0;
				timecalculated = 0;
				real_array_left = [];
				real_array_right = [];
				real_array_up = [];
				real_array_down = [];
				great_amount=0;
				good_amount=0;
				miss_amount=0;
				pausetime=0;
				restarttime=0;
				time_passed = 0;
				deleted_total_time=0;
				penalty_amount=0;
				document.getElementById("status").innerHTML = "playing now";
				document.getElementById("arraywegetnowup").innerHTML = "Up: ";
				document.getElementById("arraywegetnowdown").innerHTML = "Down: ";
				document.getElementById("arraywegetnowright").innerHTML = "Right: ";
				document.getElementById("arraywegetnowleft").innerHTML = "Left: ";
				document.getElementById("pause").innerHTML = "no pause" ;
				index_up = 0 ;
				index_down = 0 ;
				index_right = 0 ;
				index_left = 0 ;
				index1_up = 0;
				index2_up = 0;
				index1_down = 0;
				index2_down = 0;
				index1_right = 0;
				index2_right = 0;
				index1_left = 0;
				index2_left = 0;
				timer1 = setTimeout(myTimeout1, 1000); 
				timer2 = setTimeout(myTimeout2, 2000); 
				timer3 = setTimeout(myTimeout3, 3000);
				timer4 = setTimeout(myTimeout4, 4000);
				timer5 = setTimeout(myTimeout5, 5000);
				timer6 = setTimeout(myTimeout6, 6000); 
				timer7 = setTimeout(myTimeout7, 7000); 
				timer8 = setTimeout(myTimeout8, 8000);
				timer9 = setTimeout(myTimeout9, 9000);
				timer10 = setTimeout(myTimeout10, 10000);
				timer11 = setTimeout(myTimeout11, 11000); 
				timer12 = setTimeout(myTimeout12, 12000); 
				timer13 = setTimeout(myTimeout13, 13000);
				timer14 = setTimeout(myTimeout14, 14000);
				timer15 = setTimeout(myTimeout15, 15000);
				timer16 = setTimeout(myTimeout16, 16000); 
				timer17 = setTimeout(myTimeout17, 17000); 
				timer18 = setTimeout(myTimeout18, 18000);
				timer19 = setTimeout(myTimeout19, 19000);
				timer20 = setTimeout(myTimeout20, 20000);
				timer21 = setTimeout(myTimeout21, 21000); 
				timer22 = setTimeout(myTimeout22, 22000); 
				timer23 = setTimeout(myTimeout23, 23000);
				timer24 = setTimeout(myTimeout24, 24000);
				timer25 = setTimeout(myTimeout25, 25000);
				timer26 = setTimeout(myTimeout26, 26000); 
				timer27 = setTimeout(myTimeout27, 27000); 
				timer28 = setTimeout(myTimeout28, 28000);
				timer29 = setTimeout(myTimeout29, 29000);
				timer30 = setTimeout(myTimeout30, 30000);
				timer31 = setTimeout(myTimeout31, 31000);
				}else if(pause==0){
				pausetime=d.getTime();
				audio.pause();
				pause=1;
				if(restarttime==0){time_passed = time_passed + pausetime - starttime}
				else{time_passed = time_passed + pausetime - restarttime}
				clearTimeout(timer1);
				clearTimeout(timer2);
				clearTimeout(timer3);
				clearTimeout(timer4);
				clearTimeout(timer5);
				clearTimeout(timer6);
				clearTimeout(timer7);
				clearTimeout(timer8);
				clearTimeout(timer9);
				clearTimeout(timer10);
				clearTimeout(timer11);
				clearTimeout(timer12);
				clearTimeout(timer13);
				clearTimeout(timer14);
				clearTimeout(timer15);
				clearTimeout(timer16);
				clearTimeout(timer17);
				clearTimeout(timer18);
				clearTimeout(timer19);
				clearTimeout(timer20);
				clearTimeout(timer21);
				clearTimeout(timer22);
				clearTimeout(timer23);
				clearTimeout(timer24);
				clearTimeout(timer25);
				clearTimeout(timer26);
				clearTimeout(timer27);
				clearTimeout(timer28);
				clearTimeout(timer29);
				clearTimeout(timer30);
				clearTimeout(timer31);
				document.getElementById("status").innerHTML = "pause";
				document.getElementById("pause").innerHTML = "pause" ;
				}else if(pause==1){
				restarttime=d.getTime();
				deleted_total_time = deleted_total_time + restarttime - pausetime;
				pause=0;
				audio.play();
				document.getElementById("status").innerHTML = "playing now";
				document.getElementById("pause").innerHTML = "no pause" ;
				if((1000-time_passed)>=0){timer1 = setTimeout(myTimeout1, 1000-time_passed);}
				if((2000-time_passed)>=0){timer2 = setTimeout(myTimeout2, 2000-time_passed);}
				if((3000-time_passed)>=0){timer3 = setTimeout(myTimeout3, 3000-time_passed);}
				if((4000-time_passed)>=0){timer4 = setTimeout(myTimeout4, 4000-time_passed);}
				if((5000-time_passed)>=0){timer5 = setTimeout(myTimeout5, 5000-time_passed);}
				if((6000-time_passed)>=0){timer6 = setTimeout(myTimeout6, 6000-time_passed);}
				if((7000-time_passed)>=0){timer7 = setTimeout(myTimeout7, 7000-time_passed);}
				if((8000-time_passed)>=0){timer8 = setTimeout(myTimeout8, 8000-time_passed);}
				if((9000-time_passed)>=0){timer9 = setTimeout(myTimeout9, 9000-time_passed);}
				if((10000-time_passed)>=0){timer10 = setTimeout(myTimeout10, 10000-time_passed);}
				if((11000-time_passed)>=0){timer11 = setTimeout(myTimeout11, 11000-time_passed);}
				if((12000-time_passed)>=0){timer12 = setTimeout(myTimeout12, 12000-time_passed);}
				if((13000-time_passed)>=0){timer13 = setTimeout(myTimeout13, 13000-time_passed);}
				if((14000-time_passed)>=0){timer14 = setTimeout(myTimeout14, 14000-time_passed);}
				if((15000-time_passed)>=0){timer15 = setTimeout(myTimeout15, 15000-time_passed);}
				if((16000-time_passed)>=0){timer16 = setTimeout(myTimeout16, 16000-time_passed);}
				if((17000-time_passed)>=0){timer17 = setTimeout(myTimeout17, 17000-time_passed);}
				if((18000-time_passed)>=0){timer18 = setTimeout(myTimeout18, 18000-time_passed);}
				if((19000-time_passed)>=0){timer19 = setTimeout(myTimeout19, 19000-time_passed);}
				if((20000-time_passed)>=0){timer20 = setTimeout(myTimeout20, 20000-time_passed);}
				if((21000-time_passed)>=0){timer21 = setTimeout(myTimeout21, 21000-time_passed);}
				if((22000-time_passed)>=0){timer22 = setTimeout(myTimeout22, 22000-time_passed);}
				if((23000-time_passed)>=0){timer23 = setTimeout(myTimeout23, 23000-time_passed);}
				if((24000-time_passed)>=0){timer24 = setTimeout(myTimeout24, 24000-time_passed);}
				if((25000-time_passed)>=0){timer25 = setTimeout(myTimeout25, 25000-time_passed);}
				if((26000-time_passed)>=0){timer26 = setTimeout(myTimeout26, 26000-time_passed);}
				if((27000-time_passed)>=0){timer27 = setTimeout(myTimeout27, 27000-time_passed);}
				if((28000-time_passed)>=0){timer28 = setTimeout(myTimeout28, 28000-time_passed);}
				if((29000-time_passed)>=0){timer29 = setTimeout(myTimeout29, 29000-time_passed);}
				if((30000-time_passed)>=0){timer30 = setTimeout(myTimeout30, 30000-time_passed);}
				if((31000-time_passed)>=0){timer31 = setTimeout(myTimeout31, 31000-time_passed);}
				}
				}
				function hit_up() {
				var d=new Date();
				timenow=d.getTime();
				timecalculated = timenow - starttime - deleted_total_time;
				if((timecalculated <= 30005)&&(pause==0)){
				real_array_up[index_up] = timecalculated;
				index_up++;
				document.getElementById("arraywegetnowup").innerHTML = "Up: "+real_array_up;
				}
				}
				function hit_down() {
				var d=new Date();
				timenow=d.getTime();
				timecalculated = timenow - starttime - deleted_total_time;
				if((timecalculated <= 30005)&&(pause==0)){
				real_array_down[index_down] = timecalculated;
				index_down++;
				document.getElementById("arraywegetnowdown").innerHTML = "Down: "+real_array_down;
				}
				}
				function hit_left() {
				var d=new Date();
				timenow=d.getTime();
				timecalculated = timenow - starttime - deleted_total_time;
				if((timecalculated <= 30005)&&(pause==0)){
				real_array_left[index_left] = timecalculated;
				index_left++;
				document.getElementById("arraywegetnowleft").innerHTML =  "Left: "+real_array_left;
				}
				}
				function hit_right() {
				var d=new Date();
				timenow=d.getTime();
				timecalculated = timenow - starttime - deleted_total_time;
				if((timecalculated <= 30005)&&(pause==0)){
				real_array_right[index_right] = timecalculated;
				index_right++;
				document.getElementById("arraywegetnowright").innerHTML =  "Right: "+real_array_right;
				}
				}

				<?php
				for($i=0;$i<29;$i++){
				echo "function myTimeout".($i+1)."() {\n";
				echo 'document.getElementById("status").innerHTML = "you have '.(29-$i).' seconds left";'."\n";
				echo "}\n";
				}
				echo "function myTimeout30() {\n";
				echo 'document.getElementById("status").innerHTML = "times up.";';
				echo "\n";
				echo "audio.pause();";
				echo "}\n";
				?>
				function myTimeout31() {
				document.getElementById("status").innerHTML = "press space to restart."
				document.getElementById("pause").innerHTML = "stop" ;
				}
				//$_SESSION["up"] ='; echo 'window.print(real_array_up); 
                </script>		
			</form>
			<form name="myForm2" action="?controller=music&action=transfer_beat" method="post">
			<input type="hidden" name="up" value="">
			<input type="hidden" name="down" value="">
			<input type="hidden" name="left" value="">
			<input type="hidden" name="right" value="">
			<input type="hidden" name="mode" value="">
			</form>
		</div>
</div>