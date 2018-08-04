<html>
<head>
<style type="text/css">
h1{font-family:sans-serif;font-size:16pt;color:black}
p{font-family:sans-serif;font-size:16pt;color:black}
</style>
</head>
<body>
<?php
session_start();
@$_SESSION['up']=$_POST['up'];
@$_SESSION['down']=$_POST['down'];
@$_SESSION['right']=$_POST['right'];
@$_SESSION['left']=$_POST['left'];
@$_SESSION['mode']=$_POST['mode'];
?>
<h1>Thank you ,your beats have been recorded.Press space to go back.</h1>
<p id="up">up beat is:<?php echo $_SESSION['up'];?></p>
<p id="down">down beat is:<?php echo $_SESSION['down']; ?></p>
<p id="right">right beat is:<?php echo $_SESSION['right'];?></p>
<p id="left">left beat is:<?php echo $_SESSION['left']; ?></p>
<p id="mode">mode is:<?php echo $_POST['mode']; ?></p>
</body>
<script>
document.captureEvents(Event.keydown);
document.onkeydown=keyFunction;
function keyFunction() {
	if (event.keyCode==32) {//space
	document.location.href="?controller=music&action=addBeat";
	}
}
</script>
</html>