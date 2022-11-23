<?php

if(isset($_POST["reset"])){
    $_COOKIE['nbvisites']=0;

}
    setcookie('nbvisites','0', time()+3600);

    if(isset($_COOKIE["nbvisites"])) {
       $new_num = $_COOKIE['nbvisites']+1;

        setcookie('nbvisites', $new_num);
    }else{
        $_COOKIE['nbvisites']=1;
    }
    echo "Nombre de visites: ".$_COOKIE['nbvisites'];

    var_dump($_COOKIE);


?>


<br>
<form action="" method="post">
<input type="submit" value="Reset" name="reset"></input>
</form>