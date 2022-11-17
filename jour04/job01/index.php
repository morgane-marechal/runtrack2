<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
    </head>
    <body>
        <form action="" method="get" class="form">
            <label for="nom">Quel est votre nom: </label>
            <input type="text" name="nom" id="nom">

            <label for="email">Quel est votre email: </label>
            <input type="text" name="email" id="email">

            <input type="submit" value="Envoyer">

        </form>

    <?php
    echo "Votre nom est ".$_GET["nom"];
    echo "<br>";
    echo "Votre email est ";
    echo $_GET["email"];
    echo "<br>";
    $nbArg=0;
    foreach ($_GET as $value) {
        $nbArg++;
    }
    echo "Le nombre d’argument GET envoyé est : $nbArg";
    echo "<br>";
    echo var_dump($_GET);
    ?>
    </body>

</html>