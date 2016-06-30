<?php
	
	 	if(!empty($_POST['password1']) && $_POST['password1'] == $_POST['password2']){

		 		if(!user_exists($_POST['email'])) {
			 		$pwd = hash('sha512', $_POST['password1']);
					$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'lamine');
					
					//sql query
				
					$query = $db->prepare("INSERT INTO user (name,email,password) VALUES(:name, :email ,:password)");
					$query->bindValue(':name', $_POST['name']);
					$query->bindValue(':email', $_POST['email']);
					$query->bindValue(':password',$pwd);
					$query->execute();
					$user_id = $db->lastInsertId();
					//role
					foreach ($_POST['roles'] as  $role_name) {
						$query_role = $db->prepare("SELECT id FROM role WHERE name=:name");
						$query_role->bindValue(':name', $role_name);
						$query_role->execute();
						$result_role = $query_role->fetch(PDO::FETCH_ASSOC);
						$role_id = $result_role['id'];

						$query_user_role = $db->prepare("INSERT INTO user_role (uid,rid) VALUES(:uid, :rid)");
						$query_user_role->bindValue(':uid',$user_id);
						$query_user_role->bindValue(':rid', $role_id);
						$query_user_role->execute();
					}
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

			$query = $db->prepare('SELECT * FROM user WHERE email=:email');
			$query->bindValue(':email', $email);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_ASSOC);
			return $result;
		}
?>