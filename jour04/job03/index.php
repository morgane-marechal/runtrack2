<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
    </head>
    <body>
        <form action="" method="post" class="form">
            <label for="nom">Quel est votre nom: </label>
            <input type="text" name="nom" id="nom">

            <label for="email">Quel est votre prénom: </label>
            <input type="text" name="prenom" id="prenom">

            <input type="submit" value="Envoyer">

        </form>

    <?php
            echo "Votre nom est ".$_POST["nom"];
            echo "<br>";
            echo "Votre prénom est ";
            echo $_POST["prenom"];
            echo "<br>";
            $nbArg=0;
            foreach ($_POST as $value) {
                $nbArg++;
            }
            echo "Le nombre d’argument GET envoyé est : $nbArg";
            echo "<br>";
            //echo var_dump($_POST);
    ?>

        
    </body>
</html>