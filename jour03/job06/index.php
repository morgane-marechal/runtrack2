<?php
$str="Les choses que l'on possède finissent par nous posséder.";
$nbCarac=0;
for ($i=0; isset($str[$i]); $i++) {
    $nbCarac++;
    };

for ($i=($nbCarac-1); isset($str[$i]); $i--) {
    echo $str[$i];
    };

?>