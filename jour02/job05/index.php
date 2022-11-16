<?php
for ($i = 1; $i <= 1000; $i++) {
    if($i%2 == 0 && $i != 2){
        echo " ";
        echo"<br>";
    }
    elseif ($i%3==0 && $i != 3) {
        echo " ";
        echo "<br>";
    }elseif ($i%5==0 && $i !=5){
        echo " ";
        echo "<br>";
    } elseif ($i%7==0 && $i != 7){
        echo " ";
        echo "<br>";
    }elseif ($i%11==0 && $i != 11){
        echo " ";
        echo "<br>";
    }elseif ($i%13==0 && $i != 13){
        echo " ";
        echo "<br>";
    }elseif ($i%17==0 && $i != 17){
        echo " ";
        echo "<br>";
    }elseif ($i%23==0 && $i != 23){
        echo " ";
        echo "<br>";
    }elseif ($i%29==0 && $i != 29){
        echo " ";
        echo "<br>";
    }elseif ($i%31==0 && $i != 31){
        echo " ";
        echo "<br>";
    }else{
        echo $i;
        echo "<br>";
    }
}


echo "----- deuxième methode -----";

echo '<br>Nombre premier de 0 à 1000: ';
$n=1000;
for($i=2;$i<=$n;$i++){
        $nbDiv = 0;//Et on compte le nombre de diviseur    
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $nbDiv++; 
                }
            }
            if($nbDiv == 2){
                //Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et lui-même)
            echo $i; 
            echo "<br>";             
            }else{
                echo ".";
                echo "<br>";
            }


}
        
    
?>