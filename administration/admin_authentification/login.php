﻿<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../assets/style.css"/>
		<title>Login administrateur OMInfos</title>
    </head>
    <body>
    <?php
require("../../configuration/config.php");
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($omdataconn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($omdataconn, $password);
    $query = "SELECT * FROM `admins` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($omdataconn,$query) or die(mysql_error());
	
	if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		
			header('location:../espace_admin.php');		  
		
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">OMInfos</h1>
<h1 class="box-title">Connexion Admin</h1>
<input type="text" class="box-input" name="username" placeholder="Nom de l'administrateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
    </form>
</body>
</html>