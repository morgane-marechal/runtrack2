<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Job05</title>


    </head>

    <body>

    <h1> Il est temps de créer un monde de joie et de couleurs !</h1>

        <form action="" method="post" class="form">
            <label for="style-select">Choisir un style :</label>

            <select name="style" id="style-select">
                <option value="">Choisir un style:</option>
                <option value="style1">Style 1</option>
                <option value="style2">Style 2</option>
                <option value="style3">Style 3</option>
            </select>
            <input type="submit" value="Envoyer">
        </form>

        <?php
        //echo $_POST["style"];
        $style=$_POST["style"];
        echo"<br>";

        switch ($style) {
            case "style1":
                echo "<h2>Choix du style 1 : Le style marin</h2>";
                echo "<p>Voici le style blue-marine pour un style toute en sérénité. Partez dans les profondeur marine pour vous reconnecter avec votre moi profond.</p>";
                echo '<link rel="stylesheet" href="style1.css">';

                break;
            case "style2":
                echo "<h2>Choix du style 2 : Le style electro psychédélique !</h2>";
                echo '<link rel="stylesheet" href="style2.css">';
                echo '<video id="background-video" autoplay loop muted>
                <source src="psycube.mp4" type="video/mp4">
                </video>';
                echo'<audio controls autoplay>
                <source src="5Keer.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
                </audio>';
                echo '<link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">';

                break;
            case "style3":
                echo "<h2>Choix du style 3 : Le style retro-pixel !</h2>";
                echo '<link rel="stylesheet" href="style3.css">';
                break;
        }
        
        ?>
        <div id="contenu">
            <h2>Du blabla pour meubler la page</h2>
            <p>
            Vestibulum non risus id purus iaculis tempus. <br>
            Fusce eget diam ante. Sed vestibulum venenatis gravida. Morbi suscipit lorem id.<br>
            Sollicitudin vehicula. Integer non dui in turpis condimentum pharetra sit amet a dui.<br> 
            Etiam vestibulum pellentesque neque. Sed commodo urna ut turpis pretium, 
            et ultricies magna rutrum. Donec tempus interdum dolor eu laoreet. Cras 
            id venenatis dui, sit amet ornare erat.<br>
            Praesent sagittis eros at dui tempus, sit amet mattis quam 
            elementum. Proin quis tempor justo. Aenean at erat eget nulla posuere euismod.
            </p>

        </div>
    </body>
</html>