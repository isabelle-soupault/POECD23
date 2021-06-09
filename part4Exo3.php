<?php 

declare(strict_type = 1);
function FonctionAvecDeuxChainesCaracteres ($a = 'Bonjour', $b = 'Roujnob'){
    return $a . ' ' . $b;
}
$text = FonctionAvecDeuxChainesCaracteres();
 $text;
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 3</title>
</head>
<body>
<div class="container">
    <h1>Exercice 3</h1>

    <p text-center> Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>

</div>
<div class="container text-center mt-4">

<p><?= $text ?></p>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Ici on veut forcer le typage string, alors on N'OUBLIE PAS de mettre en entête 
declare(strict_type = 1);

function strincConcatenation(string $string1 , string $string2){
    return = $string1 . $string2;
}

var_dump(strincConcatenation('Bonjour', 'Roujnob' ));

ou encore <\?= strincConcatenation('Code ', 'Mercury'); ?>
->