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

    $request=$mysqli->query("SELECT COUNT(*) FROM étudiants");
    $result = $request->fetch_all();
   
    //var_dump($result_fetch_all);
?>

    <table>
        <thead>
            <tr>
                <td>Nombre d'étudiants</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach($result as $ligne){
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

