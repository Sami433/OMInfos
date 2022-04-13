<?php 

include './configuration/config.php';

if (isset($_POST['submit'])) { 
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$comment = $_POST['comment']; 

	$sql = "INSERT INTO commentaires (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($omdataconn, $sql);
	
    if($result==true){
        echo "<script>alert('Votre commentaire a été publié avec succès!')</script>";
    }else{
        echo "<script>alert('L'envoi a échoué!!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="./images/logo.png"/>
        <title>Videos OMInfos</title>
        <link rel="stylesheet" type="text/css" href="./assets/videos.css">
     
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>

        <div class="video">
            <iframe
                src="https://www.youtube.com/embed/CedZ8Kzcjro"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen="allowfullscreen"></iframe>
        </div>

        <div class="commentaires">
            <form action="" method="POST" class="form">
                <div class="row">
                    <div class="input-group name">
                        <label for="name">Nom</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Entrez votre nom"
                            required="required">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Entrez votre email"
                            required="required">
                    </div>
                </div>
                <div class="input-group textarea">
                    <label for="comment">Commentaire</label>
                    <textarea
                        id="comment"
                        name="comment"
                        placeholder="Entrez votre commentaire"
                        required="required"></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Poster</button>
                </div>
            </form>
            <div class="prev-comments">
                <?php 
			
			$sql = "SELECT * FROM commentaires";
			$result = mysqli_query($omdataconn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
                <div class="single-item">
                    <h4><?php echo $row['name']; ?></h4>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                    <p><?php echo $row['comment']; ?></p>
                </div>
                <?php

				}
			}
			
			?>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
      

    </body>
</html>