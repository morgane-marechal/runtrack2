<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
      </head>

<body>

<?php
$str="On n’est pas le meilleur quand on le croit mais quand on le sait";
//$voyelles="IAEOUYyaeiou";
//$consomnes="bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
$nbVoyelle=0;
$nbConsomne=0;
$dic=array("voyelle"=>["a","e","i","o","u","y","Y","A","E","I","O","U"], "consomne"=>["b","B","c","C","d","D","f","F","g","G","h","H","j","J","k","K","l","L","M","m","N","n","p","P","q","Q","r","R","s","S","t","T","v","V","w","W","x","X","z","Z"]);

/*
Méthode sans tableau
for ($i=0; isset($str[$i]); $i++) {
    for ($j=0; isset($voyelles[$j]); $j++){
        if ($str[$i]==$voyelles[$j]){
            //echo $str[$i];
            $nbVoyelle++;
        };
    };

    for ($j=0; isset($consomnes[$j]); $j++){
        if ($str[$i]==$consomnes[$j]){
            //echo $str[$i];
            $nbConsomne++;
        };
    };
}
*/
for ($i=0; isset($str[$i]); $i++) {
    for ($j=0; isset($dic["consomne"][$j]); $j++){
        if ($str[$i]==$dic["consomne"][$j]){
            //echo $str[$i];
            $nbConsomne++;
        };
    };

    for ($j=0; isset($dic["voyelle"][$j]); $j++){
        if ($str[$i]==$dic["voyelle"][$j]){
            //echo $str[$i];
            $nbVoyelle++;
        };
    };
}

echo $nbConsomne;
?>

<table>
    <tr>
            <th scope="col">Consomnes</th>
            <th scope="col">Voyelles</th>
    </tr>
    <tr>
            <th scope="row">Nombre de consomnes"</th>
            <td><?php echo $nbConsomne; ?></td>
    </tr>
    <tr>
            <th scope="row">Nombre de voyelles</th>
            <td><?php echo $nbVoyelle; ?></td>
    </tr>
</table>
</body>