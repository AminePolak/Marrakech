<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Envoi d'un email par formulaire</title>
</head>

<body>
    <?php
   $retour = mail('william.kowalinski@laposte.net', 'Envoi depuis le site_cv', $_POST['message'], 'From : ' . $_POST['email']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé !</p>';
    }

    ?>
</body>

</html>
