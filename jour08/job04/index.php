<?php
echo "<br>";
echo "Nom utilisateur: ".$_COOKIE['user'];
echo "<br>";

setcookie('user',$user, time()+3600);

//if (isset($_COOKIE['user'])) {
    if(isset($_POST["prenom"])){
        $user = $_POST["prenom"];
        setcookie('user', $user);
     }
//}
echo "<br>";
echo "Nom utilisateur: ".$_COOKIE['user'];
echo "<br>";

    var_dump($_COOKIE);

?>


<form action="" method="post">
<input type="text" value="prenom" name="prenom"></input>   
<input type="submit" value="Connexion"></input>
</form>