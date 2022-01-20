<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location:login.php");
		exit(); 
	}

	
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../assets/style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre espace admin.</p>
		<a href="ajouter_admin.php">Ajouter un admin</a> | 
		<a href="commentaires.php">Supprimer commentaire</a> | 
		<a href="ajouterjoueur.php">Ajouter un joueur à l'effectif</a> |
		<a href="supprimerjoueur.php">Supprimer un joueur de l'effectif</a> | 
		<a href="logout.php">Déconnexion</a>
		</ul>
		</div>
	</body>
</html>