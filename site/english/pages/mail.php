<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>


    <?php
    $retour = mail('angiejbeziaugmail.com', $_POST['Objet'], $_POST['name']+$_POST['message'], $_POST['mail']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

</html>