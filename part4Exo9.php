<?php 
 function FonctionDeuxParametres( $a =54 , $b = 54){
     if ($a > $b) {
         return $a . ', et ' . $a . ' est bien plus grand que ' .$b;
     } elseif ($a < $b){
         return $b  . ', et ' . $b . ' est bien plus grand que ' .$a;
     } else {
         return 'Les deux nombres ont la même valeur ! <br> En effet, la valeur de a = ' . $a . ' <br> et la valeur de b = ' . $b;
     }
 }
$result = FonctionDeuxParametres();

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 9</title>
</head>
<body>
<div class="container">
    <h1>Exercice 9</h1>

    <p text-center> Faire une fonction qui prend deux paramètres : nombre 1 et nombre 2. Elle doit renvoyer le plus grand des deux.

</p>

</div>
<div class="container text-center mt-4">

<p> <?= $result ?> </p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
