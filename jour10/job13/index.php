<?php
    $mysqli=new mysqli('localhost', 'root', '', 'jour09');
    $request=$mysqli->query("SELECT salles.nom, etage.nom
    from salles
    join etage  on etage.id = salles.id_etage");
    $result=$request->fetch_all();
?>

<table>
    <thead>
        <tr>
            <td>Nom de salle</td>
            <td>Nom de l'étage</td>
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