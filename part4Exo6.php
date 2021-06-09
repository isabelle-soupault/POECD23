<?php 
declare(strict_types =1);

function functionTreeParam (string $firstname, string $lastname, int $age){
    return 'Bonjour' . $firstname . $lastname . ',  vous avez ' . $age .' ans.';
}

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 4 - Exercice 6</title>
</head>
<body>
<div class="container">
    <h1>Exercice 6</h1>

    <p text-center> Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.</p>

</div>
<div class="container text-center mt-4">
 <p> <?= functionTreeParam('Iza ', 'DS ', 42 ) ?></p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

Modification de la base du code pour correspondre à l'exercice

il est possible d'avoir des variables avec le même nom mais ce ne sont pas les même.
Les variables dans ue fonction n'existe pas en dehors de la fonction. C'est la portée des variables.
Il est donc super important de faire attention. Il est possible de nommer les variables de la même façon mais il ne faut pas oublier ce principe.

->