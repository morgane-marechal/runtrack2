<?php
    $mysqli=new mysqli('localhost', 'root', '', 'jour09');
    $request=$mysqli->query("SELECT prenom, nom, naissance FROM étudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
    $result=$request->fetch_all();

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