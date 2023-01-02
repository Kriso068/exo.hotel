<?php

include "Client.php";
include "Chambre.php";
include "Hotel.php";
include "Reservation.php";


/*----------------------Hotels--------------------------*/

$hotel1 = new Hotel("Hilton", "10 route de la Gare", "67000", "Strasbourg");
$hotel2 = new Hotel("Régent", "12 route de la Gare", "75000", "Paris");

/*----------------------Chambres---------------------------*/


$chambre1 = new Chambre ($hotel1, 1, 120, 2, false);
$chambre2 = new Chambre ($hotel1, 2, 120, 2, false);
$chambre3 = new Chambre ($hotel1, 3, 120, 2, false);
$chambre4 = new Chambre ($hotel1, 4, 120, 2, false);
$chambre5 = new Chambre ($hotel1, 5, 300, 2, true);
$chambre6 = new Chambre ($hotel1, 6, 300, 2, true);
$chambre7 = new Chambre ($hotel1, 7, 300, 2, true);
$chambre8 = new Chambre ($hotel1, 8, 300, 2, true);
$chambre9 = new Chambre ($hotel1, 9, 300, 2, true);
$chambre10 = new Chambre ($hotel1, 10, 300, 2, true);
$chambre11 = new Chambre ($hotel1, 11, 300, 2, true);
$chambre12 = new Chambre ($hotel1, 12, 300, 2, true);
$chambre13 = new Chambre ($hotel1, 13, 300, 2, true);
$chambre14 = new Chambre ($hotel1, 14, 300, 2, true);
$chambre15 = new Chambre ($hotel1, 15, 300, 2, true);
$chambre16 = new Chambre ($hotel1, 16, 300, 2, true);
$chambre17 = new Chambre ($hotel1, 17, 300, 2, true);
$chambre18 = new Chambre ($hotel1, 18, 300, 2, true);
$chambre19 = new Chambre ($hotel1, 19, 300, 2, true);
$chambre20 = new Chambre ($hotel1, 20, 300, 2, true);
$chambre21 = new Chambre ($hotel1, 21, 300, 2, true);
$chambre22 = new Chambre ($hotel1, 22, 300, 2, true);
$chambre23 = new Chambre ($hotel1, 23, 300, 2, true);
$chambre24 = new Chambre ($hotel1, 24, 300, 2, true);
$chambre25 = new Chambre ($hotel1, 25, 300, 2, true);
$chambre26 = new Chambre ($hotel1, 26, 300, 2, true);
$chambre27 = new Chambre ($hotel1, 27, 300, 2, true);
$chambre28 = new Chambre ($hotel1, 28, 300, 2, true);
$chambre29 = new Chambre ($hotel1, 29, 300, 2, true);
$chambre30 = new Chambre ($hotel1, 30, 300, 2, true);

$chambre1b = new Chambre ($hotel2, 1, 120, 2, false);


/*----------------------Clients---------------------------*/

$client1 = new Client("Gibello", "Virgile");
$client2 = new Client("Murmann", "Micka");
$client3 = new Client("Smail", "Stéphane");

/*----------------------Reservations-------------------------*/


$re = new Reservation ($chambre17, $client1, '01-01-2023', '05-01-2023');
$re2 = new Reservation ($chambre3, $client2, "11.03.2023", "18.03.2023");
$re3 = new Reservation ($chambre1, $client2, "01.04.2023", "01.04.2023");
$re4 = new Reservation ($chambre22, $client3, "01.04.2022", "01.04.2022");


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Exo Hotel</title>
  </head>
  <body>
    <h1 class="text-center py-2">bOOOOOking.lol</h1>

    <div class="container">
        <div class="row">
            <div class="col bg-light">
                <h2 class="text-center my-5">Réservation des clients</h2>
                <?=$client1->afficherReservation()?>
                <?=$client2->afficherReservation()?>
                <?=$client3->afficherReservation()?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center my-5">Déscriptif des Hôtels</h2>
                <?=$hotel1->afficherDescription()?>
                <?=$hotel2->afficherDescription()?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col bg-light">
                <h2 class="text-center my-5">Réservation des Hôtels</h2>
                <?=$hotel1->afficherReservation()?>
                <?=$hotel2->afficherReservation()?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center my-5">
                <h2>Statut des chambres</h2>
                <?=$hotel1->afficherChambres()?>  
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center my-5">
                <h2>Statut des chambres après annulation</h2>
                <?=$hotel1->annulerReservation($re)?>
                <?=$hotel1 -> rendreChambre($chambre3)?>   
                <?=$hotel1->afficherChambres()?>  
            </div>
        </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>









