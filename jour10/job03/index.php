<?php
    $mysqli = new mysqli('localhost','root','','jour09');
    
    /*
    if($connection->connect_error){
        die('Erreur : ' .$connection->connect_error);
    }
    echo 'Connexion réussie';
    */

    if(!$mysqli){
        die('Erreur : ' .mysqli_connect_error());
    }
    echo 'Connexion réussie!';

    $request=$mysqli->query("SELECT prenom, nom, naissance FROM étudiants WHERE sexe = 'femme'");
    $result_fetch_all = $request->fetch_all();
   
    //var_dump($result_fetch_all);



?>

    <table>
        <thead>
            <tr>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Naissance</td>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($result_fetch_all as $ligne){
            echo "<tr>";
                foreach($ligne as $valeur){
                echo "<td>";
                echo $valeur;
                echo "</td>";
                }
            echo "</tr>";
}
          ?>

        </tbody>
    </table