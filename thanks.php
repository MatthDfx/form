<?php

$nom = $_POST["user_name"];
$prenom = $_POST["user_firstname"];
$courriel = $_POST["user_email"];
$telephone = $_POST["user_phone"];
$sujets = $_POST["sujets"];
$message = $_POST["user_message"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message envoyé</title>
</head>

<body>
    <p>Merci <?= $prenom ?> <?= $nom ?> de nous avoir contacté à propos de “<?= $sujets ?>”.

        Un de nos conseiller vous contactera
        soit à l’adresse <?= $courriel ?>
        ou par téléphone au <?= $telephone ?>
        dans les plus brefs délais pour
        traiter votre demande :

        <?= $message ?></p>
</body>

</html>