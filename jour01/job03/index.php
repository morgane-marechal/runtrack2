
<!DOCTYPE html>

<html lang="fr">
    <head>
            <meta charset="utf-8">
            <title>Tableaux</title>
      </head>

<body>
    <?php 
    $int = 9;
    $float = 9.462;
    $bool = true;
    $string ="hello world !";
    ?>
    <table>
    <tr>
            <th scope="col">Type</th>
            <th scope="col">Nom</th>
            <th scope="col">Valeur</th>
    </tr>
        <tr>
            <th scope="row"><?php echo gettype($bool);?></th>
            <td>$bool</td>
            <td><?php echo $bool; ?></td>
        </tr>
        <tr>
        <th scope="row"><?php echo gettype($int);?></th>
            <td>$int</td>
            <td><?php echo $int; ?></td>
        </tr>
        <tr>
        <th scope="row"><?php echo gettype($float);?></th>
            <td>$float</td>
            <td><?php echo $float; ?></td>
        </tr>
        <tr>
        <th scope="row"><?php echo gettype($string);?></th>
            <td>$string</td>
            <td><?php echo $string; ?></td>
        </tr>
    </table>
</body>
</html>