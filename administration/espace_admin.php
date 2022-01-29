<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location:../administration/admin_authentification/login.php");
		exit(); 
	}

	
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/style.css" />
	<title>Espace administrateur OMInfos</title>
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace admin.</p>
		<a href="../administration/admin_authentification/ajouter_admin.php">Ajouter un administrateur</a> | 
		<a href="../administration/admin_com/commentaires.php">Supprimer/modifier commentaire</a> | 
		<a href="../administration/admin_effectif/ajouterjoueur.php">Ajouter un joueur à l'effectif</a> |
		<a href="../administration/admin_effectif/supprimerjoueur.php">Supprimer un joueur de l'effectif</a> | 
		<a href="../administration/admin_authentification/logout.php">Déconnexion</a>
		</ul>
		</div>
	</body>
</html>