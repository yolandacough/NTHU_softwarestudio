<?php
	class Game{
		  private $id;
	    private $username;
      private $sid;
	    private $score;
      private $Mname;
      private $Mlink;
      private $Mid;
      private $up;
      private $down;
      private $left;
      private $right;
      private $mode;


	    function __construct($id,$username,$score,$sid,$Mname,$Mlink,$Mid,$up,$down,$left,$right,$mode){
	        $this->id=$id;
	        $this->username=$username;
	        $this->score=$score;
          $this->sid=$sid;
          $this->Mname=$Mname;
          $this->Mlink=$Mlink;
          $this->Mid=$Mid;
          $this->up=$up;
          $this->down=$down;
          $this->left=$left;
          $this->right=$right;
          $this->mode=$mode;
	    }


      public static function getMusic($Mid) {
          $db = DBConfig::getInstance();
          $sth = $db->query('SELECT * FROM music WHERE `Mid` = '.intval($Mid).'');
          if($sth->rowCount()==1) {
            $game = $sth->fetch();
            return new Game(NULL, NULL, NULL, NULL, $game['Mname'], $game['Mlink'], $game['Mid'], json_decode($game['up'],true),
                                          json_decode($game['down'],true), json_decode($game['left'],true), json_decode($game['right'],true), $game['mode']);
          }
          else return NULL;
    	}

      public static function getMyScore($id) {
          $db = DBConfig::getInstance();
          $sth = $db->prepare('SELECT * FROM scores WHERE `id` = ? ORDER BY `score` DESC LIMIT 3 ');
          $sth->execute(array(intval($id)));
          
          foreach ($sth->fetchAll() as $game) {
            $list[] = new Game($game['id'], $game['username'], $game['score'], $game['sid'], NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
          };

          if(isset($list)) return $list;
		  }

      public static function getHighestScore() {
          $list = [];
          $db = DBConfig::getInstance();
          $sth = $db->query('SELECT * FROM scores ORDER BY `score` DESC LIMIT 1');
          if($sth->rowCount()==1) {
            $game = $sth->fetch();
            return new Game($game['id'], $game['username'], $game['score'], $game['sid'], NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
          }
          else return NULL;
      }

      public static function show() {
        $list = [];
        $db = DBConfig::getInstance();
          $sth = $db->query('SELECT * FROM music ');
         
          foreach ($sth->fetchAll() as $game) {
            $list[] = new Game(NULL, NULL, NULL, NULL, $game['Mname'], $game['Mlink'], $game['Mid'], $game['up'],
                                          $game['down'], $game['left'], $game['right'], $game['mode']); 
          };
         
          return $list;
      }

      public static function insert(){
        #$username = getUsername();
        #username = "frank";
        #score = 96;
        if (isset($_COOKIE["username"])and isset($_COOKIE["score"])and isset($_COOKIE["id"]))
        {
            $username = $_COOKIE["username"];
            $score = $_COOKIE["score"];
	        $id= $_COOKIE["id"];
        }
   
        $db = DBConfig::getInstance();
        $sth = $db->query('SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;');
        $sth = $db->query('SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;');
        $sth = $db->query('SET NAMES utf8;');
        $sth = $db->query('SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;');
        $sth = $db->query('SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;');
        $sth = $db->query('SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE="NO_AUTO_VALUE_ON_ZERO";');
        $sth = $db->query('SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0;');

        $sth = $db->prepare('INSERT INTO scores (username, score, id) VALUES (:username, :score, :id);');
        $sth->bindParam(':id', $id);
        $sth->bindParam(':username', $username);
        $sth->bindParam(':score', $score);

        $username = $_COOKIE["username"];
        $score = $_COOKIE["score"];
        $id = $_COOKIE["id"];

        $sth->execute();

        if (isset($_COOKIE["cookie"]))
        {
            foreach ($_COOKIE["cookie"] as $name => $value)
            {
                //echo "$name : $value <br />";
            }
        }

        $sth = $db->query('SET SQL_MODE=@OLD_SQL_MODE;');
        $sth = $db->query('SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;');
        $sth = $db->query('SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;');
        $sth = $db->query('SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;');
        $sth = $db->query('SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;');
        $sth = $db->query('SET SQL_NOTES=@OLD_SQL_NOTES;');
        require_once('views/games/transfer.php');
      }



        public function getID(){
            return $this->id;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getSid(){
            return $this->sid;
        }

        public function getScore(){
            return $this->score;
        }

        public function getMID(){
            return $this->Mid;
        }

        public function getMname(){
            return $this->Mname;
        }

        public function getMlink(){
            return $this->Mlink;
        }

        public function getMode(){
            return $this->mode;
        }

        public function getUP(){
            return $this->up;
        }

        public function getDOWN(){
            return $this->down;
        }

        public function getLEFT(){
            return $this->left;
        }

        public function getRIGHT(){
            return $this->right;
        }
    }
?>
