<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
    </head>

    <body>
        <form action="" method="post" class="form">
            <label for="username">What is your username ? </label>
            <input type="text" name="username" id="username">
            <label for="Password">What is your password ? </label>
            <input type="text" name="password" id="password">
            <input type="submit" value="Envoyer">
        </form>
        <?php
            //echo var_dump($_POST);
           

            if($_POST){

                if (($_POST["username"] === "John" || $_POST["username"] === "john") && ($_POST["password"]==="Rambo")){
                    echo "C’est pas ma guerre";
                }else{
                    echo "Votre pire cauchemar";
                };
            };  
            

        ?>
    </body>
<html>