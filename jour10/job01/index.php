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

    $request=$mysqli->query("SELECT * FROM étudiants");
    $result_fetch_all = $request->fetch_all();
   
    //var_dump($result_fetch_all);



?>

    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Prenom</td>
                <td>Nom</td>
                <td>Naissance</td>
                <td>Sexe</td>
                <td>Email</td>
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