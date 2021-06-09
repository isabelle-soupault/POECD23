<?php 
declare(strict_types =1);

function funcWithTwoParam(string $gender , int $age){
    if ($gender == 'Homme' && $age > 18 && $age < 116){
        return 'Vous êtes un homme et vous êtes majeur';
    } elseif ($gender == 'Homme' && $age < 18 && $age > 0){
        return 'Vous êtes un homme et vous êtes mineur';
    } elseif ($gender == 'Femme' && $age> 18 && $age > 0){
        return 'Vous êtes une femme et vous êtes majeure';
    }elseif ($gender == 'Femme' && $age < 18 && $age < 116){
        return 'Vous êtes une femme et vous êtes mineure';
    } else {
         return 'paramêtres inconnus';
    }
}

$text = funcWithTwoParam( 'Homme', 15);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 7</title>
</head>
<body>
<div class="container">
    <h1>Exercice 7</h1>

    <p text-center> Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
Homme
Femme 
La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure
</p>

</div>
<div class="container text-center mt-4">

<p> <?= $text ?></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--




->