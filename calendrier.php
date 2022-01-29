<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="./images/logo.png"/>
        <title>Calendrier OMInfos</title>
        <link rel="stylesheet" type="text/css" href="./assets/calendrier.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>

        <div class="container-fluid tableau">
            <table class="table-style">

                <thead>
                    <tr>
                        <th>Adversaire</th>
                        <th>Lieu</th>
                        <th>Horaire</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><img src="images/ecussonlille.png" height="30" width="30">Lille</td>
                        <td>Stade Vélodrome</td>
                        <td>20h45</td>
                        <td>29/01</td>

                    </tr>
                    <tr>
                        <td><img src="images/lens.png" height="30" width="30">Lens</td>
                        <td>Stade Bollaert-Delelis</td>
                        <td>21h00</td>
                        <td>04/02</td>

                    </tr>
                    <tr>
                        <td><img src="images/montpellier.png" height="30" width="30">Montpellier</td>
                        <td>Stade Vélodrome</td>
                        <td>21h00</td>
                        <td>13/02</td>

                    </tr>
                    <tr>
                        <td><img src="images/angers.png" height="30" width="30">Angers</td>
                        <td>Stade Vélodrome</td>
                        <td>21h00</td>
                        <td>17/02</td>

                    </tr>
                    <tr>
                        <td><img src="images/metz.png" height="30" width="30">Metz</td>
                        <td>Stade Saint-Symphorien</td>
                        <td>20h45</td>
                        <td>20/02</td>

                    </tr>
                </tbody>

            </table>

        </div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>