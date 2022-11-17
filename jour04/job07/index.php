<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Job07</title>
    </head>
    <body>
        <form action="" method="get" class="form">
            <label for="hauteur">Choisir une hauteur : </label>
            <input type="text" name="hauteur" id="hauteur">
            <br>
            <label for="largeur">Choisir une largeur : </label>
            <input type="text" name="largeur" id="largeur">

            <input type="submit" value="Envoyer">

        </form>
            <?php
            $hauteur=$_GET["hauteur"];
            $largeur=$_GET["largeur"];
            
            echo $hauteur."<br>";
            echo $largeur."<br>";
            
            echo "<pre>";
            for($i=0; $i<=$hauteur; $i++){
                if($i==0){
                    for($j=0; $j<=$largeur; $j++){
                        echo "_";
                    }
                    echo "<br>";
                } elseif($i==$hauteur){
                    echo "|";
                    for($j=0; $j<=$largeur; $j++){
                        echo "_";
                    }
                    echo"|";
                    echo "<br>";

                }else{
                    echo "|";
                    for($j=0; $j<=$largeur; $j++){
                        echo "&nbsp";
                    }
                    echo"|";
                    echo "<br>";
                }
            }
            echo "</pre>";
            ?>
        

</html>