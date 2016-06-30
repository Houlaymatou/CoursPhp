<?php
	  //si le mot de passe n'est pas vide et les deux sont identiques
		//l'utilsateur peut continuer
	 	if(!empty($_POST['password1']) && $_POST['password1'] == $_POST['password2']){

	 		//on s'assure que le mail utilisé n'existe pas déjà
		 		if(!user_exists($_POST['email'])) {

		 			//on securise le mot de passe en le hachant
			 		$pwd = hash('sha512', $_POST['password1']);

			 		//Connexion à la base de données
					$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'lamine');
					
					//sql query préparation des requette sql 
				
					$query = $db->prepare("INSERT INTO user (name,email,password) VALUES(:name, :email ,:password)");

					//Attribution de valeur à chaque placeholder

					$query->bindValue(':name', $_POST['name']);
					$query->bindValue(':email', $_POST['email']);
					$query->bindValue(':password',$pwd);

					//Insertion d'un utilisateur dans la BDD
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