<?php
  class MusicController {
	public function show() {
  		require_once('views/music/show.php');
  	}

  	public function add() {
   	require_once('views/music/add.php'); 	

      $_SESSION['uploadWarning'] = NULL;

      if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(!$_POST['Mname']) {
            $_SESSION['uploadWarning'] = "Please input the music name ([singer name]-[music name])!"; 
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=music&action=add'";  
              echo "</script>";        	
        }
        if(!$_FILES['audio_file']) {
            $_SESSION['uploadWarning'] = "Please upload your music!"; 
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=music&action=add'";  
              echo "</script>";        	
        }

		$target_dir = "Music/";
		$ext = pathinfo($_FILES['audio_file']['name'], PATHINFO_EXTENSION);
		$Mlink = $_POST['Mname'] .'.'. $ext;
		$target_file = $target_dir . $Mlink;
		
		// Check if file already exists
		if (file_exists($target_file)) {
		    $_SESSION['uploadWarning'] = "Sorry, music already exists.";
		    echo "<script type='text/javascript'>";  
            echo "window.location.href='?controller=music&action=add'";  
            echo "</script>"; 
		}
		// Check file size
		if ($_FILES['audio_file']['size'] > 300000000) {
		    $_SESSION['uploadWarning'] = "Sorry, your file is too large.";
		    echo "<script type='text/javascript'>";  
            echo "window.location.href='?controller=music&action=add'";  
            echo "</script>"; 
		}

		// Allow certain file formats
		if($ext != "mp3" && $ext != "mpga" && $ext != "wma" && $ext != "mid" && $ext != "midi"
		&& $ext != "wav" ) {
		    $_SESSION['uploadWarning'] = "Sorry, only audio files are allowed. ";
		    echo "<script type='text/javascript'>";  
            echo "window.location.href='?controller=music&action=add'";  
            echo "</script>"; 
		}

        if (!$_SESSION['uploadWarning']) {
             Music::addMusic($_POST['Mname'], $Mlink);

			echo $target_dir.$target_file;
	      	if (move_uploaded_file($_FILES['audio_file']['tmp_name'], $target_file)) {
			    $_SESSION['uploadWarning'] = 'The music '.$Mlink. ' has been successfully uploaded!';
				echo "<script type='text/javascript'>";  
	            echo "window.location.href='?controller=music&action=add'";  
	            echo "</script>";
			} else {
			    $_SESSION['uploadWarning'] = "Sorry, there was an error uploading your music.";
			    echo "<script type='text/javascript'>";  
	            echo "window.location.href='?controller=music&action=add'";  
	            echo "</script>";
			}
	    }
      }
  	}

	public function delete() {
		$_SESSION['list'] = Music::show();

  		require_once('views/music/delete.php');

	    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	        if($_POST['delete']){
	          if($_POST['del']){
	            foreach($_POST['del'] as $x){

	              $file = 'Music/'.Music::getmusicbyid($x)->getMlink();
	              if (!unlink($file)){
					  echo ("Error deleting ".$file);
					  }
					else
					  {
					  echo ("Delete ".$file." successfully!");
					  }

					Music::delete($x);
	            }
	          }
	            echo "<script type='text/javascript'>";  
	            echo "window.location.href='?controller=music&action=delete'";  
	            echo "</script>";
	    	}
		}
  	}

  	public function addBeat() {
  		require_once('views/music/addBeat.php');
  		unset($_SESSION['music']);

  		if($_SERVER['REQUEST_METHOD'] == 'POST'){
	        if($_POST['addBeat']){
	          if($_POST['del']){
	            foreach($_POST['del'] as $x){
			$_SESSION['mid'] = Music::getmusicbyid($x)->getMID();
	        $_SESSION['music'] = Music::getmusicbyid($x);
			$_SESSION['mlink'] = Music::getmusicbyid($x)->getMlink();
			$_SESSION['modeprev'] = Music::getmusicbyid($x)->getMode();
	            }
	          }
	    	}
		}
  	}

  	public function Beat() {
  		require_once('views/music/Beat.php');
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
	        if($_POST['addBeat']){
	          if($_POST['del']){
	            foreach($_POST['del'] as $x){
				$_SESSION['mid'] = Music::getmusicbyid($x)->getMID();
			    $_SESSION['music'] = Music::getmusicbyid($x);
	          	$_SESSION['mlink'] = Music::getmusicbyid($x)->getMlink();
				$_SESSION['mname'] = Music::getmusicbyid($x)->getMname();
				$_SESSION['modeprev'] = Music::getmusicbyid($x)->getMode();
	            }
	          }
	    	}
		}

;
  	}

  	public function transfer_beat(){
  		require_once('views/music/transfer_beat.php');
  		$_SESSION['BeatWarning'] = NULL;
  		if($_SERVER['REQUEST_METHOD'] == 'POST'){
  			if($_SESSION['music']){
		        if(!$_POST['mode']){
		        	$_SESSION['BeatWarning'] = 'Please input the corresponding mode!';
					echo "<script type='text/javascript'>";  
		            echo "window.location.href='?controller=music&action=transfer_beat'";  
		            echo "</script>";
		          }elseif(!$_SESSION['BeatWarning']){
					if($_SESSION['modeprev']== NULL)
		        	{Music::addMode($_SESSION['mid'] , $_POST['mode'], $_SESSION['up'], $_SESSION['down'], $_SESSION['left'], $_SESSION['right']);}
					else if($_SESSION['modeprev']!=$_POST['mode'])
					{Music::add($_SESSION['mname'], $_SESSION['mlink'], $_POST['mode'], $_SESSION['up'], $_SESSION['down'], $_SESSION['left'], $_SESSION['right']);}
				    else
					{Music::addMode($_SESSION['mid'] , $_POST['mode'], $_SESSION['up'], $_SESSION['down'], $_SESSION['left'], $_SESSION['right']);}
		        	$_SESSION['BeatWarning'] = 'Beat has been added successfully!';
		          }

	        }else{
	        	$_SESSION['BeatWarning'] = 'Please select one piece of music to add the corresponding mode!';
	            echo "<script type='text/javascript'>";  
	            echo "window.location.href='?controller=music&action=transfer_beat'";  
	            echo "</script>";
	        }
	    }
  	}
  }
?>