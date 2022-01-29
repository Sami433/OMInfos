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
        <link rel="stylesheet" href="../../assets/style.css"/>
        <title>Ajout administrateur OMInfos</title>
    </head>
    <body>
    <?php
require('../../configuration/config.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($omdataconn, $username); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($omdataconn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($omdataconn, $password);
	// récupérer le type (user | admin)
	
    $query = "INSERT into `admins` (username, email, password)
				  VALUES ('$username', '$email', '".hash('sha256', $password)."')";
    $res = mysqli_query($omdataconn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'administrateur a été créée avec succés.</h3>
             <p>Cliquez <a href='../espace_admin.php'>ici</a> pour retourner à la page d'accueil</p>
			 </div>";
    }
}else{
?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">OMInfos</h1>
            <h1 class="box-title">Add user</h1>
            <input
                type="text"
                class="box-input"
                name="username"
                placeholder="Nom d'utilisateur"
                required="required"/>
            <input
                type="text"
                class="box-input"
                name="email"
                placeholder="Email"
                required="required"/>
          
            <input
                type="password"
                class="box-input"
                name="password"
                placeholder="Mot de passe"
                required="required"/>
            <input type="submit" name="submit" value="+ Add" class="box-button"/>
        </form>
        <?php } ?>
    </body>
</html>


