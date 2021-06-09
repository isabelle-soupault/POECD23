<?php var_dump($_FILES); 
        $target_dir = 'www\POECD23\Part6Exo9\images\ ';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION); 
?>


                <!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Profil utilisateur</title>
</head>
<body>
<div class="container">
    <h1>Profil de l'utilisateur </h1>

    <p text-center> </p>
    <div class="card" style="width: 18rem;">
  <img src="<?=  $target_file ?>" alt="Photo" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $_POST['prenom'] ?> <?= $_POST['nom']?></h5>
    <p class="card-text">Date de naissance : <?= $_POST['birthdate'] ?> <br>
    Civilité : <?= $_POST ['civilite'] ?> </p>
  
  </div>
</div>

</div>
<div class="container text-center mt-4">


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


