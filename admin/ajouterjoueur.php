<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location:login.php");
		exit(); 
	}

	
?>

<?php

  require("../config/joueursFunction.php");

?>

<!DOCTYPE html>
<html>
    <head>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
            crossorigin="anonymous">

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
        <title></title>
    </head>
    <style>

.row{

    margin-left:40%;
    margin-top:1%;
    display:flex;
    flex-direction: column;
}
img{

margin-top:3%;
}


@media (max-width: 768px) {

    .row{
margin-left:10%;

    
    }
}
        </style>
    <body>

            <div class="container-fluid text-center">
            
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <img class="changement"
     src="changement.jpg" height="250px" width="250px"
>

                    <form method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Photo du joueur</label>
                            <input type="name" class="form-control" name="image" required="required">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Poste du joueur</label>
                            <input type="text" class="form-control" name="poste" required="required">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nom du joueur</label>
                            <input type="text" class="form-control" name="nomJoueur" required="required">
                        </div>

                        <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau joueur</button>
                    </form>

                </div>
            </div>
    

    </body>
</html>

<?php

  if(isset($_POST['valider']))
  
    {
    if(!empty($_POST['image']) AND !empty($_POST['poste']) AND !empty($_POST['nomJoueur']))
	    {
	    	$image = htmlspecialchars ($_POST['image']);
	    	$poste= htmlspecialchars  ($_POST['poste']);
	    	$nomJoueur = htmlspecialchars($_POST['nomJoueur']);
          
          try 
          {
            ajouter($image, $poste, $nomJoueur);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  

?>