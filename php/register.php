<?php
	function register() {
		global $err;
		$dbname = 'resumate';
		$user = 'root';
		$pass = '';
		$dbconn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
		$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$user = $_POST['email'];
		$salt = hash('sha256', uniqid(mt_rand(), true));  
		$pass = hash('sha256', $_POST['password'] . $salt);
		
		$select = $dbconn->prepare("SELECT email FROM users WHERE email=:email");
		$select->execute(array(':email'=>$user));
		if($select->fetch()) {
			$err = "Email $user is already in use";
			return false;
		} else {
			$err = "User added";
			$insert = $dbconn->prepare("INSERT users (email, pword, salt) VALUES (:email, :pass, :salt);");
			$insert->execute(array(':email'=>$user, ':pass' => $pass, ':salt'=>$salt));
			$_SESSION['email'] = $user['email'];
			$_SESSION['uid'] = $user['uid'];
			return true;
		}
	}
?>