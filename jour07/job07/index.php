<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Job07</title>


    </head>
    <body>

    <form action="" method="post" class="form">
        <input name ="str" type="text" value="mettre str">
            <label for="select-function">Choisir une fonction:</label>

            <select name="select-function" id="function-select">
                <option value="">Choisir un style:</option>
                <option value="gras">gras</option>
                <option value="cesar">cesar</option>
                <option value="plateforme">plateforme</option>
            </select>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>

       
<?php

    
       $function_chosen= $_POST["select-function"];
       $str=$_POST["str"];
        echo "<br>";
       echo $str;
       echo "<br>";
       echo $function_chosen;
              echo "<br>";


       switch($function_chosen){
        case "gras":
            echo gras($str);
            break;
        case "cesar":
            echo " ";
            break;
        case "plateforme":
            echo " ";
            break;
        }

        
        function gras($str){
            $majuscule="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            for($i=0; isset($str[$i]); $i++){
                $esp_av_deb_mot=$i-1;
                for($j=0; isset($majuscule[$j]); $j++){
                    if ($i == 0 && $str[$i]==$majuscule[$j]){
                        //mettre chaque lettre en gras jusqu'au prochain mot
                        for($k=0; $str[$k]!=" "; $k++){
                            echo "<b>$str[$k]</b>";
                        }
                    
                    }elseif($str[$i]==$majuscule[$j] && $str[$esp_av_deb_mot]==" "){
                        for($l=$i; $str[$l]!=" "; $l++){
                            echo "<b>$str[$l]</b>";
                        }
                    }
                }
                if ($str[$i]!= "<b>$str[$i]</b>")
                echo $str[$i];
            }
        }
        
 
                    

/*Cr??ez un formulaire <form> qui contient :
??? un champ <input> nomm?? ???str??? de type ???text???,
??? une liste d??roulante <select> nomm??e ???fonction???
??? un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations ?? ???str??? en
fonction de l???option <option> choisie dans la liste d??roulante.
Les choix possibles sont :
??? ???gras??? : une fonction qui prend en param??tre ???str??? : gras($str). Elle ??crit ???str??? en
mettant en gras (<b>) les mots commen??ant par une lettre majuscule.
??? ???cesar??? : une fonction qui prend en param??tre ???$str??? et un nombre ???$decalage???
(qui vaut 2 par d??faut) : cesar($str, $decalage). $str doit s???afficher en d??calant
chaque caract??re d???un nombre ??gal ?? ???$decalage???.
ex : Si $decalage vaut 1 alors ???e??? devient ???f???. Si d??calage vaut 3 alors ???z??? devient
???c???.
??? ???plateforme???, une fonction qui prend en param??tre ???$str??? : plateforme($str).
Elle affiche ???$str??? en ajoutant un ???_??? aux mots finissant par ???me???.*/
?>
</body>
</html>