<?php 
$name = '';
$civil= '';
$surname = '';
$format = '';
$nameError = '';
$surnameError = '';
$formatError = '';
$civilError ='';
$birthDate = '';


if(isset($_POST['validForm'])){
    // Vérification du nom
            if(empty($_POST['nom'])){
                $nameError = 'Votre nom est manquant';
                } else {
                $name =  htmlentities($_POST['nom']);
            } 
    // Vérification du prénom
            if (empty($_POST['prenom'])) {
                $surnameError = 'Votre prénom est manquant';
            } else {
                $surname =  htmlentities($_POST['prenom']);    
            }
    // Vérification de l'image et téléchargement de la photo
            $target_dir = 'images/ ';
            $target_file = $target_dir . basename($_FILES['image']['name']);

            if($imageFileType != 'jpg' && $imageFileType != 'JPG' && $imageFileType != 'png' && $imageFileType != 'PNG' && $imageFileType != 'jpeg' && $imageFileType != 'JPEG' && $imageFileType != 'gif' && $imageFileType != 'GIF'){
                $formatError = "le fichier n'est pas un format accepté (png, jpg, ou gif) ou est manquant";
                $uploadOk = 0;
                } else {
                $format = $_FILES['image']['type'];
                    if( $_FILES['image']['name'] != "" ){
                        move_uploaded_file( $_FILES['image']['tmp_name'], $target_file);
                    }
                }
    // Vérification de la civilité                
             if( empty($_POST['civilite']) ){
                $civilError = 'Votre civilité est manquante';
                }else {
                $civil = ($_POST['civilite']);
                }  
    }    
     
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 6 - Exercice 9</title>
</head>
<body>
<div class="container">
    <h1>Exercice 9</h1>

    <p text-center> Créer un formulaire de création de profil sur la page index.php avec :

•             Une des bouton radio pour civilité (Mr ou Mme)

•             Un champ texte pour le nom

•             Un champ texte pour le prénom

•             Un champ date pour la date de naissance

•             Un champ d'envoi de fichier pour l'image de profil.

A la soumission du formulaire, si tous les champs sont correctement renseignés, uploadez l'image de profil dans un dossier image que vous auriez créer en amont. Afficher le profil de l'utilisateur dans une page profile.php</p>

</div>
<div class="container text-center mt-4">
 <?php if(empty($_POST['nom']) || empty($_POST['prenom']) || $_FILES['image']['type'] != 'image/*'  || empty($_POST['civilite'])  ): ?>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        
        <select name="civilite" id="">
        
            <option value="">Civilité</option>
            <option value="mr">Mr</option>
            <option value="mrs">Mme</option>
        </select>

        <label for="name"> Votre nom</label>
        <input type="text" name="nom" id="name" value="<?= $name?>">

        <label for="prenom"> Votre prénom </label>
            <input type="text" name="prenom" id="surname" value="<?= $surname?>" >

        <label for="naissance"> Votre date de naissance</label>
        <input type="date" name="birthdate" id="birthdate" value="<?= $birthDate?>" >    

        <input type="file" name="image" id="docpicker" accept="image/*">
   


        <input type="submit" name="validForm" value="Valider!">

        <p >
            <ul style="list-style-type: none;">
                <li><?= $civilError ?> </li>
                <li><?= $nameError ?> </li>
                <li><?= $surnameError ?></li>
                <li><?= $format ?></li>
                
            </ul>
       
    <?php endif ?>    

 </p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
