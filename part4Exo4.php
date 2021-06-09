<?php
function FonctionComparativeDeuxNb($a = 15 , $b = 25){
    if ($a > $b){
        return 'On compare ' . $a. ' avec '. $b .' Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
    } elseif ($a < $b){
        return 'On compare ' . $a. ' avec '. $b .' Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
    } else {
        return 'On compare ' . $a. ' avec '. $b .' Les deux nombres sont identiques si les deux nombres sont égaux';
    }
}
$text= FonctionComparativeDeuxNb(); 
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 4</title>
</head>
<body>
<div class="container">
    <h1>Exercice 4</h1>

    <p text-center> Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux</p>

</div>
<div class="container text-center mt-4">
<hr>

<p> 
<?= $text ?>
</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

declare(strict_types =1);
function compareNbs(float (number1, number2));

   if ($number1 > $number2){
        return 'On compare ' . $number1. ' avec '. $number2 .' Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième';
    } elseif ($number1 < $number2){
        return 'On compare ' . $number1. ' avec '. $number2 .' Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième';
    } else {
        return 'On compare ' . $number1. ' avec '. $number2 .' Les deux nombres sont identiques si les deux nombres sont égaux';
    }
}

et dans le html, on peut par exemple faire
<p> <\?= compareNbs(15, 20) ?> </p>
Ou encore
<p> <\?= compareNbs(rand(0,100), rand(0,100)) ?> </p>

->