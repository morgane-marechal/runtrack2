<?php 

/*Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules).*/

function letSpeak($string){
    for($i=0; isset($string[$i]); $i++){
        if($string[$i]=="A"|| $string[$i]=="a"){  
            $string[$i]="4";
        } elseif($string[$i]=="B"|| $string[$i]=="b"){
            $string[$i]="8";
        }elseif($string[$i]=="E"|| $string[$i]=="e"){
            $string[$i]="3";
        }elseif($string[$i]=="G"|| $string[$i]=="g"){
            $string[$i]="6";
        }elseif($string[$i]=="L"|| $string[$i]=="l"){
            $string[$i]="1";
        }elseif($string[$i]=="S"|| $string[$i]=="s"){
            $string[$i]="5";
        }elseif($string[$i]=="T"|| $string[$i]=="t"){
            $string[$i]="7";
        }else{
            $string[$i]=$string[$i];
        }
    }
    return $string;
}

$string="Il fait drolement beau aujourd'hui, c'est super ! Trop cool ! Vive la monarchie ! ";

echo letSpeak($string);
?>