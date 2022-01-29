<?php 

include './configuration/config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$firstname = $_POST['firstname']; // Get Name from form
    $lastname = $_POST['lastname']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
    $message = $_POST['message']; // Get Comment from form

	$sql = "INSERT INTO contact (first_name, last_name, email, message)
			VALUES ('$firstname', '$lastname', '$email','$message')";
	$result = mysqli_query($omdataconn, $sql);

    if($result==true){
        echo "<script>alert('Votre message a été envoyé avec succès! Nous vous répondrons prochainement.')</script>";
    }else{
        echo "<script>alert('Something Went wrong!!')</script>";
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
        <title>Contact OMInfos</title>
        <link rel="stylesheet" type="text/css" href="./assets/contact.css">

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
            crossorigin="anonymous">
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>



    

    </head>
    <body>


    <?php include 'includes/navbar.php'; ?>
    
        <div class="contact_form">
            <h3 class="heading">Contactez Nous</h3>
            <form action="" method="POST" class="form">
              <div>
                <label for="name">Prénom</label><br />
                <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prénom" required />
              </div>
              <div>
                <label for="name">Nom</label><br />
                <input type="text" id="lastname" name="lastname"  placeholder="Entrez votre nom" required />
              </div>
              <div>
                <label for="email">Email</label><br />
                <input type="email" id="email" name="email" placeholder="Entrez votre mail" required />
              </div>
              <div>
                <label for="message">Message</label><br />
                <textarea type="text" row="5" col="50" id="message" name="message" placeholder="Entrez votre message"></textarea>
              </div>
              <div class="btn">
                <button class="button" name="submit" type="submit">E &nbsp;N &nbsp;V &nbsp;<i class='far fa-futbol' style='color:black'></i> &nbsp;I</button>
              </div>
            </form>
          </div>



          <footer>
            <p>&copy; OMInfos 2022</p>
            <div class="social-media">
              
                <p>
                    <a href="https://twitter.com/?lang=fr">
                        <i class="fab fa-twitter"></i>
                    </a>
                </p>
                <p>
                    <a href="https://www.instagram.com/?hl=fr">
                        <i class="fab fa-instagram"></i>
                    </a>
                </p>
                <p>
                    <a href="https://www.linkedin.com/home">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </p>
            </div>
        </footer>







        </body>
        </html>