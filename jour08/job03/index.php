<?php
session_start();  

if(isset($_POST["reset"])){
    $_SESSION['affiche_prenom']=[];
}

if (!isset($_SESSION["affiche_prenom"])) {
    $_SESSION['affiche_prenom'] = [];
}


if(isset($_POST["prenom"])) {
    if (isset($_SESSION['affiche_prenom'])){
         $_SESSION['affiche_prenom'][]=$_POST["prenom"];
         
         foreach ($_SESSION['affiche_prenom'] as $name){
            echo $name;
            echo "<br>";
         }
    }
}
?>



<form action="" method="post">
<input type="text" value="prenom" name="prenom"></input>   
<input type="submit" value="Envoyer"></input>
</form>

<br>
<form action="" method="post">
<input type="submit" value="Reset" name="reset"></input>
</form>

<?php
var_dump($_SESSION);
echo $_SESSION['affiche_prenom'];
?>