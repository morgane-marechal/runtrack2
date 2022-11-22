<?php

/*Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2*/

function occurences($string, $char){
    $occurences = 0;
    for($i=0; isset($string[$i]); $i++){
        if($string[$i]==$char){  //si la lettre à l'emplacement $i de string est égal à $char alors incrémentation de 1 pour $occurences.
            $occurences++;
            //echo $occurences;
        }
    }
    return $occurences;
}

$string="Il fait drolement beau aujourd'hui, c'est super ! Trop cool ! Vive la monarchie ! ";
$char="u";
$nb_occ=occurences($string, $char);
echo $nb_occ;

?>