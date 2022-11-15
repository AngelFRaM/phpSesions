<?php
	include 'db.php';

	class User extends DB {
		private $name;
        private $username;

        public function userExists($user, $pass) {
			$md5pass = md5($pass);
			$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND pass = :pass');
			$query->execute(['user'=> $user, 'pass' => $md5pass]);
			if ($query->rowCount()){
				return true;
			} else {
				return false;
			}
        }
		public function SetUser($user){
			$query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user');
			$query->execute(['user' => $user]);
			foreach($query as $currentUser){
				$this->nombre = $currentUser['nombre'];
				$this->username = $currentUser['username'];
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
	}

?>