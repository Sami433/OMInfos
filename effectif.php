<?php

require("./configuration/joueursFunction.php");

  $Joueurs=afficher();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="./images/logo.png"/>
        <title>Effectif OMInfos</title>
        <link rel="stylesheet" type="text/css" href="./assets/effectif.css">

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

            <div class="album py-5 bg-light">
               
                    <marquee behavior="alternate" scrollamount="30">
                        <marquee behavior="alternate" direction="down" scrollamount="20">
                            <img src="images/football-no-background.png" class="ball">
                        </marquee>
                    </marquee>
                    <h2>Effectif Equipe A<h2>


                            <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 ">

                                <?php foreach($Joueurs as $joueur): ?>
                        
                                    <div class="col">
                        
                        
                                    <div class="card shadow-sm">

                                        <img src="<?= $joueur->image ?>" height="250" width="250">

                                        <div class="card-body">
                                            <p class="card-text"><?= $joueur->nomJoueur ?></p>
                                            <div class="d-flex justify-content-between align-items-center">

                                                <small class="text-muted"><?= $joueur->poste ?></small>
                                           
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php endforeach; ?>
 </div>
                           
                        </div>
                                </div>

                <footer>
                   <p>&copy; Created By Nait-Akli Sami | All Rights Reserved </p>
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
