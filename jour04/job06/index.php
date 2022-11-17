<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
    </head>

    <body>
    <form action="" method="get" class="form">
            <label for="nombre">Choisir un nombre : </label>
            <input type="number" name="nombre" id="nombre">
            <input type="submit" value="Envoyer">
    </form>

    <?php
            if($_GET){

                $num=$_GET["nombre"];
                if(!(int)$num){
                    echo "Mettre un nombre SVP!";
                }
                elseif ($num%2 === 0){
                    echo "Nombre pair";
                }else{
                    echo "Nombre impair";
                };
            };  
        ?>

    </body>
</html>