<?php
	print '<pres>';
	print_r($_POST);
	print '<pres>';
 	error_reporting(1);

 	if(!empty($_POST['password1']) && $_POST['password1'] == $_POST['password2']){

 		if(!user_exists($email)) {
	 		$pwd = hash('sha512', $_POST['password']);
			$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'lamine');
			//sql query
			//$db->query('INSERT INTO user');
			$query = $db->prepare("INSERT INTO user (name,email) VALUES(:name, :email )");
			$query->bindValue(':name', $_POST['name']);
			$query->bindValue(':email', $_POST['email']);
			$query->bindValue(':password', $_POST['password']);
			$query->execute();
        }
     	else {
     		print 'L\'utilisateur existe déja, veillez choisir un autre email';
     	}

	}

	else {
		print ('Vos mots de passe ne sont pas identiques');
	}

	function user_exists($email) {

		$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'lamine');

		$query = $db->prepare('SELECT id FROM user WHERE email=:email');
		$query->bindValue(':email', $email);
		$query->execute();
		$result = $query->fetch();
	}
?>