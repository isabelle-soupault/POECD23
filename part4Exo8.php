<?php

/* function FonctionAvecTroisParametres($a = 5, $b =10 , $c = 20 ){
return $a + $b + $c ;
}
$calcul = FonctionAvecTroisParametres();

$sum = 0;
function calculateSum([1,2,3]){
    foreach ($variable as $key => $value) {
        $sum += $variable;
        return $sum;
    }
}
$calcul2 =calculSomme()
 */

declare (strict_types =1);




function sumWithTreeParam(float $number1, float $number2, float $number3 ){
    return $number1 + $number2 + $number3 ;

}

// bonus
/** Fonction permettant la somme de 3 nombres
 * @param float
 * @return result
 */
function sumWithNParam(float ...$numberList ){
    $result = 0;
    foreach ($numberList as $number) {
        $result += $number ;
    }

    return $result;
}



/* function fonctionSomme(...$number){
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}
$secondCalcul = $fonctionSomme(1,5,15,30); */
?>



<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 8</title>
</head>
<body>
<div class="container">
    <h1>Exercice 8</h1>

    <p text-center> Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.
Bonus : Faire une fonction qui prend un nombre variable de paramètres et qui renvoie la somme des valeurs passées en arguments.

</p>

<p><?= $calcul ?> </p>
<p><?= sumWithNParam(1,2,15,2,) ?> </p>


<p> <\?= $secondCalcul ?></p>

</div>
<div class="container text-center mt-4">


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

pour une quantité inconnue de variables, on va utiliser ...

pour faire ensuite une somme sur un nombre indéfini de nombres, 
la fonction est alors définie dans la fonction car elle n'a une incidence que dedans.
Une liste dans ce cas est considéré comme étant un tableau de taille indéfinie.
On doit donc faire une boucle.

et ce qui est magique pour les tableaux, c'est qu'il y a une boucle spéciale pour : le foreach.

->