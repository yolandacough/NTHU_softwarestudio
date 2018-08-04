<?php
  class AccountsController {
    public function signin() {
      $result = '';
    	if($_SERVER['REQUEST_METHOD'] == 'POST'&&$_POST["submit_in"]){
            if (isset($_POST['username']) && isset($_POST['password'])){
                $result = Account::getsignin($_POST['username'], $_POST['password']);
            }
            else
              return call('pages', 'error');
        }
      //call the getsignin() function of model class and store the return value of this function into result variable
      if($result == 'Sign in successfully!') {
        $_SESSION['account'] = Account::getinfobyusername($_POST['username']);
        header('Location: ../musicaction/index.php?controller=accounts&action=home');
      }
      else {
        require_once('views/accounts/sign_in.php');
      }
  }

    public function home() {
      require_once('views/accounts/home.php');
    }

    public function signup() {
    	
      require_once('views/accounts/sign_up.php');
      if(isset($_SESSION['vrf'])){
        echo "<script type='text/javascript'>";  
        echo "window.location.href='?controller=accounts&action=signin'";  
        echo "</script>";
      }

      unset($_SESSION['signupWarning']);
      unset($_SESSION['vrf']);

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		$email_pattern='^\w+([-_.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$^';
        $_SESSION['posted'] = 1;

            if (!isset($_POST['username'])) {
                $_SESSION['signupWarning'] = "Username is required!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(strlen($_POST['username']) > 20) {
                $_SESSION['signupWarning'] = "Try a shorter username!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(!isset($_POST['password'])) {
                $_SESSION['signupWarning'] = "Password is required!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(strlen($_POST['password']) < 6) {
                $_SESSION['signupWarning'] = "password is too short!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(!isset($_POST['confirm'])) {
                $_SESSION['signupWarning'] = "confirmation is required!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(strlen($_POST['password']) > 32) {
                $_SESSION['signupWarning'] = "password is too long!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(!isset($_POST['email'])) {
                $_SESSION['signupWarning'] = "Email  is required!";
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }
            elseif(!preg_match($email_pattern, $_POST['email'])) {
                $_SESSION['signupWarning'] = "Please use a valid email!"; 
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }elseif(Account::getinfobyemail($_POST['email'])) {
                $_SESSION['signupWarning'] = "This email has been registered!"; 
                echo "<script type='text/javascript'>";  
                echo "window.location.href='?controller=accounts&action=signup'";  
                echo "</script>";
            }

            if(!isset($_SESSION['signupWarning'])) {
              $_SESSION['vrf'] = 1;
            }       
        }

        if(isset($_SESSION['vrf'])){
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['confirm'])) {
              if($_POST['password']==$_POST['confirm']) {
    	          if(Account::getinfobyusername($_POST['username']) == NULL) {
                  if(Account::getinfobyusername($_POST['email']) == NULL) {
                		Account::insert($_POST['username'], $_POST['email'], $_POST['password']);
                    $_SESSION['account'] = Account::getinfobyusername($_POST['username']);
      							//Send activation Email
      							$to      = $_POST['email'];
      							$subject = 'Musicaction Registration';
                    $message = '<html>
                                <head>
                                <title>Welcome to Musicaction!</title>
                                </head>
                                <body>
                                <p>You, or someone using your email address, has completed registration at our website. You can complete registration by clicking the following conn:</br>
                                <a href="http://ss.cs.nthu.edu.tw/~Musicaction/musicaction/index.php?controller=accounts&action=verify&activationKey='.$_SESSION['account']->getActivationKey().'">Click here to verify.</a></p>
                                <p>If this is an error, ignore this email and you will be removed from our mailing list.
                                  </br>Regards, Musicaction Team</p>
                                </body>
                                </html>';
      							// $message = 'Welcome to Musicaction!\r\rYou, or someone using your email address, has completed registration at our website. You can complete registration by clicking the following conn:\rhttp://ss.cs.nthu.edu.tw/~Musicaction/musicaction/verify.php?'.$_SESSION['account']->getActivationKey().'\r\rIf this is an error, ignore this email and you will be removed from our mailing list.\r\rRegards,\ Musicaction Team';

      							// Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      							$headers .= 'From: noreply@Musicaction';
      							 
      							mail($to, $subject, $message, $headers);
                    unset($_SESSION['vrf']);
      					
                    $_SESSION['result'] = 'An email has been sent to '.$_POST['email'].' with an activation key. Please check your mail to complete registration.';
                  	echo "<script type='text/javascript'>";  
                    echo "window.location.href='?controller=accounts&action=signup'";  
                    echo "</script>";

                	} else {
                		$_SESSION['result'] = "Your email has already been registered. You may try another one!";
                    echo "<script type='text/javascript'>";  
                    echo "window.location.href='?controller=accounts&action=signup'";  
                    echo "</script>";
                	}
                } else {
                		$_SESSION['result'] = "Your username has already been registered. You may try another one!";
                    echo "<script type='text/javascript'>";  
                    echo "window.location.href='?controller=accounts&action=signup'";  
                    echo "</script>";
                }                
              } else {
                $_SESSION['result'] = "Password confirmation failed.";
                    echo "<script type='text/javascript'>";  
                    echo "window.location.href='?controller=accounts&action=signup'";  
                    echo "</script>";
                  }

            } else call('pages', 'error');
        	} 
        }
    }

    public function verify(){
      if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['activationKey'])) {
        if ($row=Account::activationKeyExist($_GET['activationKey'])){
            Account::getactivated($row['id']);
            $_SESSION['result'] = "Congratulations! ".$row['username'].", Activation succeeded, now enjoy your time here!";
        }elseif($_SESSION['posted']) {
          $_SESSION['signupWarning'] = 'Sorry, you have not passed the email authentication. You can sign up again.';
          echo "<script type='text/javascript'>";  
          echo "window.location.href='?controller=accounts&action=signup'";  
          echo "</script>";
        }
        echo "<script type='text/javascript'>";  
        echo "window.location.href='?controller=accounts&action=signin'";  
        echo "</script>";
        }
    }


    public function logout(){
    	session_unset();
    	header('Location: ../musicaction/index.php');
    } 

    public function modify(){
      require_once('views/accounts/modify.php');
    
      $_SESSION['updateWarning'] = NULL;

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email_pattern='^\w+([-_.]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,6})+$^';

        if (!$_POST['username']&&!$_POST['email']&&!$_POST['password']){
          $_SESSION['updateWarning'] = "Change at least one piece of information!";
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=accounts&action=modify'";  
              echo "</script>";
        }
        else{
          if($_POST['username']&&strlen($_POST['username']) > 20) {
            $_SESSION['updateWarning'] = "Try a shorter username!";
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=accounts&action=modify'";  
              echo "</script>";
        }
          if($_POST['email']&&!preg_match($email_pattern, $_POST['email'])) {
            $_SESSION['updateWarning'] = "Please use a valid email!"; 
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=accounts&action=modify'";  
              echo "</script>";
        }
          if($_POST['old_password']) {
            if($_SESSION['account']->getID()==1){ 
              $mdf = Account::getinfobyid($_POST['id'])->getPassword();
            }else{
              $mdf = $_SESSION['account']->getPassword();
            }
            if(strcmp($mdf, $_POST['old_password'])==0) {
              if(!$_POST['password']) {
                  $_SESSION['updateWarning'] = "Password is required!";
                  echo "<script type='text/javascript'>";  
                  echo "window.location.href='?controller=accounts&action=modify'";  
                  echo "</script>";
              }
              elseif(strlen($_POST['password']) < 6) {
                  $_SESSION['updateWarning'] = "password is too short!";
                  echo "<script type='text/javascript'>";  
                  echo "window.location.href='?controller=accounts&action=modify'";  
                  echo "</script>";
              }
              elseif(!$_POST['confirm']) {
                  $_SESSION['updateWarning'] = "confirmation is required!";
                  echo "<script type='text/javascript'>";  
                  echo "window.location.href='?controller=accounts&action=modify'";  
                  echo "</script>";
              }
              elseif(strlen($_POST['password']) > 32) {
                  $_SESSION['updateWarning'] = "password is too long!";
                  echo "<script type='text/javascript'>";  
                  echo "window.location.href='?controller=accounts&action=modify'";  
                  echo "</script>";
              }
            }else{
              $_SESSION['updateWarning'] = "Old password is not correct!";
              echo "<script type='text/javascript'>";  
              echo "window.location.href='?controller=accounts&action=modify'";  
              echo "</script>";
            }
        }
        if (!$_SESSION['updateWarning']) {
          if($_SESSION['account']->getID()!=1) {
          Account::update($_SESSION['account']->getID(), $_POST['username'], $_POST['email'], $_POST['password']);
        }else Account::update($_POST['id'], $_POST['username'], $_POST['email'], $_POST['password']);
      }
    }
      
      if (!$_SESSION['updateWarning']) {
        if($_SESSION['account']->getID()!=1) {
          echo "<script type='text/javascript'>";  
          echo "window.location.href='?controller=accounts&action=signin'";  
          echo "</script>";
        } else {
          echo "<script type='text/javascript'>";  
          echo "window.location.href='?controller=accounts&action=manage'";  
          echo "</script>";
        }
      }

    } 
  }
    public function manage() {
      $_SESSION['list'] = Account::show();

      require_once('views/accounts/manage.php');

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($_POST['delete']){
          if(isset($_POST['del'])){
            foreach($_POST['del'] as $x){
              Account::delete($x);
            }
            echo "<script type='text/javascript'>";  
            echo "window.location.href='?controller=accounts&action=manage'";  
            echo "</script>";
          }
        }
        else if($_POST['update']) {
          if(isset($_POST['del'])) {
            $_SESSION['del'] = $_POST['del'][0];
            echo "<script type='text/javascript'>";  
            echo "window.location.href='?controller=accounts&action=modify'";  
            echo "</script>"; 
          }
        } 
      }
    }
}
?>
