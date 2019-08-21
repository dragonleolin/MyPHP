<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for</title>
</head>

<body>

    <table width="30%" border=" 1" style="text-align:center">
        <?php for ($i = 1; $i < 10; $i++): ?>
        <tr>
            <?php for ($j = 1; $j < 10; $j++): ?>
            <td>
                <?= ($i * $j) ?>
            </td>
            <?php endfor ?>
        </tr>
            <?php endfor ?>
    </table>

    <table border="1">
        <?php for ($i = 1; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 1; $j < 10; $j++) {;
                echo "<td> $i * $j =" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        } ?>
    </table>


</body>

</html>