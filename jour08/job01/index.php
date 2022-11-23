<?php
session_start();  

/*if (isset($_SESSION["nbvisites"])) {
    $_SESSION['nbvisites']++;
}else{
    $_SESSION['nbvisites']=1;
}*/





    if(isset($_POST["reset"])){
        $_SESSION["nbvisites"]=0;
    }

    if(isset($_SESSION["nbvisites"])) {
        $_SESSION['nbvisites']++;
    }else{
        $_SESSION['nbvisites']=1;
    }
    echo "Nombre de visites: ".$_SESSION['nbvisites'];

    var_dump($_SESSION);

?>
<br>
<form action="" method="post">
<input type="submit" value="Reset" name="reset"></input>
</form>




