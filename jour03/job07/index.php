<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";
for ($i=0; isset($str[$i]); $i++) {
    $nbCarac++;
    };
for ($i=0; isset($str[$i]); $i++) {
    if($i==0){
        echo strtoupper($str[1]);
    }elseif($i==($nbCarac-1)){
            echo strtolower($str[0]);
        }else{
            $j=$i+1;
        echo $str[$j];
        };
}
?>