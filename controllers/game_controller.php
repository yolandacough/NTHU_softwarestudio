<?php
//use this to collect the latest data and update the database accordingly
class GameController{
  public function update(){
    if ($_SERVER['REQUEST_METHOD']=='POST'){
      $id = $_POST['id'];
      $newscore = $_POST['newscore'];
      Account::updateScore($id,$newscore);
    }
  }

  public function settings(){
    require_once('views/games/Settings.php');
    if ($_SERVER['REQUEST_METHOD']=='POST'){
      if(isset($_POST['set'])){
            if($_POST['del']){
              foreach($_POST['del'] as $x){

                $_SESSION['Plink'] = 'Music/'.Game::getMusic($x)->getMlink();
                $_SESSION['Pup'] = Game::getMusic($x)->getUP();
                $_SESSION['Pdown'] = Game::getMusic($x)->getDOWN();
                $_SESSION['Pleft'] = Game::getMusic($x)->getLEFT();
                $_SESSION['Pright'] = Game::getMusic($x)->getRIGHT();

              }
            }
        }

    }
  }

  public function board(){
    require_once('views/games/board.php');
  }

  public function play(){
    if ($_SERVER['REQUEST_METHOD']=='POST'){
      if($_POST['set']){
            if($_POST['del']){
              foreach($_POST['del'] as $x){

                $_SESSION['Plink'] = 'Music/'.Game::getMusic($x)->getMlink();
                $_SESSION['Pup_str'] = Game::getMusic($x)->getUP();
                $_SESSION['Pdown_str'] = Game::getMusic($x)->getDOWN();
                $_SESSION['Pleft_str'] = Game::getMusic($x)->getLEFT();
                $_SESSION['Pright_str'] = Game::getMusic($x)->getRIGHT();
				$_SESSION['Pright'] = explode(',',$_SESSION['Pright_str']);
				$_SESSION['Pup'] = explode(',',$_SESSION['Pup_str']);
                $_SESSION['Pdown'] = explode(',',$_SESSION['Pdown_str']);
                $_SESSION['Pleft'] = explode(',',$_SESSION['Pleft_str']);
              }
            }
        }

    }
    require_once('views/games/play.php');
  }

  public function showInstruction(){
    require_once('views/games/instruction.php');
  }

  public function transfer(){
    require_once('views/games/transfer.php');
  }
  public function insert(){
  	Game::insert();
  	require_once('views/games/play.php');
  }
}
 ?>
