<?php
    $mysqli=new mysqli('localhost', 'root', '', 'jour09');
    $request=$mysqli->query("SELECT AVG(capacite) FROM salles");
    $result=$request->fetch_all();
?>

<table>
    <thead>
        <tr>
            <td>Capacité moyenne des salles</td>
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