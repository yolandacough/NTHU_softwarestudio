<?php
	class Music{
		private $Mid;
	    private $Mname;
	    private $Mlink;
	    private $mode;
	    private $up;
	    private $down;
	    private $left;
	    private $right;

	    function __construct($Mid,$Mname,$Mlink,$mode,$up,$down,$left,$right){
	        $this->Mid=$Mid;
	        $this->Mname=$Mname;
	        $this->Mlink=$Mlink;
	        $this->mode=$mode;
	        $this->up=$up;
	        $this->down=$down;
	        $this->left=$left;
	        $this->right=$right;
	    }

	    public static function show(){
	    	$list = [];
	    	$db = DBConfig::getInstance();
  	    	$sth = $db->query('SELECT * FROM music ');

	        foreach ($sth->fetchAll() as $music) {
	        	$list[] = new Music($music['Mid'], $music['Mname'], $music['Mlink'], $music['mode'],
						json_decode($music['up']),json_decode($music['down']),
						json_decode($music['left']),json_decode($music['right']) );
	        };

	        return $list;
	    }

	    public static function addMusic($Mname, $Mlink) {
			$db = DBConfig::getInstance();
	      	$sth = $db->prepare('INSERT INTO music(`Mname`, `Mlink`)
	        						VALUES (?, ?)');
	    	$sth->execute(array($Mname, $Mlink));
		}

	    public static function addMode($Mid, $mode, $up, $down, $left, $right) {
			$db = DBConfig::getInstance();
	      	$sth = $db->prepare('UPDATE music SET `mode`= ?, `up`= ?, `down`= ?, `left`= ?, `right`= ?
	        						WHERE `Mid` = ?');
	    	$sth->execute(array(intval($mode), json_encode($up), json_encode($down), json_encode($left), json_encode($right), intval($Mid)));
		}

		public static function add($Mname, $Mlink, $mode, $up, $down, $left, $right) {
			$db = DBConfig::getInstance();
	      	$sth = $db->prepare('INSERT INTO music(`Mname`, `Mlink`, `mode`, `up`, `down`, `left`, `right`)
	        						VALUES (?, ?, ?, ?, ?, ?, ?)');
	    	$sth->execute(array($Mname, $Mlink, intval($mode), json_encode($up), json_encode($down), json_encode($left), json_encode($right)));
		}

		public static function getmusicbyid($Mid) {
			$db = DBConfig::getInstance();
	      	$sth = $db->query('SELECT * FROM music
	        						WHERE `Mid` = '.$Mid.'');
	    	if($sth->rowCount()==1) {
	      		$music = $sth->fetch();
	      		return new Music($music['Mid'], $music['Mname'], $music['Mlink'], $music['mode'],
						json_decode($music['up']),json_decode($music['down']),
						json_decode($music['left']),json_decode($music['right']) );
	      	}
	      	else return NULL;
		}

		public static function getmusicbyname($Mname) {
			$db = DBConfig::getInstance();
	      	$sth = $db->query('SELECT * FROM music
	        						WHERE `Mname` = '.$Mname.'');
	    	if($sth->rowCount()==1) {
	      		$music = $sth->fetch();
	      		return new Music($music['Mid'], $music['Mname'], $music['Mlink'], $music['mode'],
						json_decode($music['up']),json_decode($music['down']),
						json_decode($music['left']),json_decode($music['right']) );
	      	}
	      	else return NULL;
		}

	    public static function delete($Mid){
	    	$db = DBConfig::getInstance();
  	    	$sth = $db->prepare('DELETE FROM music where Mid = ?');
	        $sth->execute(array(intval($Mid)));
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
