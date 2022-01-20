<?php 

include './admin/config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['commnt']; // Get Comment from form

	$sql = "INSERT INTO commentaires (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	
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
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="./assets/videos.css">
     
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>

        <div class="video">
            <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/CedZ8Kzcjro"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen="allowfullscreen"></iframe>
        </div>

        <div class="wrapper">
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
                        name="commnt"
                        placeholder="Entrez votre commentaire"
                        required="required"></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Postez</button>
                </div>
            </form>
            <div class="prev-comments">
                <?php 
			
			$sql = "SELECT * FROM commentaires";
			$result = mysqli_query($conn, $sql);
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