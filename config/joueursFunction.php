<?php

 function ajouter($image, $poste, $nomJoueur)
{
   if(require("connexiondb.php"))
   {
     $req = $access->prepare("INSERT INTO joueurs (image, poste, nomJoueur) VALUES (?,?,?)");

     $req->execute(array($image, $poste, $nomJoueur));

     $req->closeCursor();
   }
}

function afficher()
{
	if(require("connexiondb.php"))
	{
		$req=$access->prepare(" SELECT * FROM joueurs ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexiondb.php"))
	{
		$req=$access->prepare("DELETE FROM joueurs WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>