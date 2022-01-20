<?php 

include './admin/config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['ok'])) { // Check press or not Post Comment Button
	$firstname = $_POST['firstname']; // Get Name from form
    $lastname = $_POST['lastname']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$phone = $_POST['phone']; // Get Comment from form
    $message = $_POST['message']; // Get Comment from form

	$sql = "INSERT INTO contact (first_name, last_name, email, phone, message)
			VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";
	$result = mysqli_query($conn, $sql);

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
        <title>Document</title>
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

        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-8">

                    <h2>Contactez OMInfos</h2>

                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <form action="" method="POST" class="form">
                                        <label for="form_name">Prénom *</label>
                                        <input
                                            id="form_name"
                                            type="text"
                                            name="firstname"
                                            class="form-control"
                                            placeholder="Veuillez entrer votre prénom *"
                                            required="required"
                                            data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Nom *</label>
                                        <input
                                            id="form_lastname"
                                            type="text"
                                            name="lastname"
                                            class="form-control"
                                            placeholder="Veuillez entrer votre nom *"
                                            required="required"
                                            data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input
                                            id="form_email"
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Veuillez entrer votre email *"
                                            required="required"
                                            data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Téléphone</label>
                                        <input
                                            id="form_phone"
                                            type="tel"
                                            name="phone"
                                            class="form-control"
                                            placeholder="Veuillez entrer votre numéro de téléphone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea
                                            id="form_message"
                                            name="message"
                                            class="form-control"
                                            placeholder="Votre message *"
                                            rows="4"
                                            required="required"
                                            data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input
                                        type="submit"
                                        name="ok"
                                        class="btn btn-success btn-send"
                                        value="Send message">
                                </div>
                            </div>
                            <div class="row"></div>
                        </div>

                    </form>
                    <div class="asterisques">Tous les champs marqués d'un astérisque * sont obligatoires.
                    </div>

          
</div>
</div>
</div>



<div class="container-fluid">




</body>

            </html>