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

            <label for="email">Quel est votre prénom: </label>
            <input type="text" name="prenom" id="prenom">

            <input type="submit" value="Envoyer">

        </form>

        <?php
        foreach ($_GET as $value) {
            echo $value."<br>";
        };
        //echo var_dump($_GET);
        ?>

        <table>
            <thead>
                <tr>
                   <td>Argument</td>
                    <td>Valeur</td> 
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($_GET as $key=>$value) {
                        echo "<tr>
                        <td>$key</td>
                        <td>$value</td>
                        </tr>";
                    };
                ?>
            </tbody>
        </table>
    </body>
</html>