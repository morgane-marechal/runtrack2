<?php 
    $mysqli= new mysqli('localhost', 'root','', 'jour09');
    $request=$mysqli->query("SELECT * FROM étudiants WHERE naissance > '2004-01-01'");
    $result = $request->fetch_all();
?>

    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Naissance</td>
                <td>Sexe</td>
                <td>Email</td>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach($result as $ligne){
                echo "<tr>";
                foreach($ligne as $value){
                    echo "<td>";
                    echo $value;
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>