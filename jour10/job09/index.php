<?php
    $mysqli=new mysqli('localhost', 'root', '', 'jour09');
    $request=$mysqli->query("SELECT * FROM `salles` ORDER BY `salles`.`capacite` DESC");
    $result=$request->fetch_all();
?>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Id_Etage</td>
            <td>Capacité</td>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($result as $ligne){
                echo "<tr>";
                foreach ($ligne as $value){
                    echo "<td>";
                    echo $value;
                    echo "</td>";

                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>