<?php

for ($i = 0; $i <= 100; $i++) {
    if($i==42){
        echo "La Plateforme_";
        echo"<br>";
    }
    elseif ($i >= 0 && $i <= 20) {
        echo "<b>$i</b>";
        echo "<br>";
    }elseif ($i > 20 && $i <= 50){
        echo "<u>$i</u>";
        echo "<br>";
    } else {
        echo $i;
        echo "<br>";
    }
}
?>