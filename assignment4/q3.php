<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" rules="all" cellpadding="5">
        <?php
            $a=10;
            for($i=1;$i<=10;$i++)
            {
                ?>
                <tr>
                    <td><?php echo $a. "x" .$i; ?></td>
                    <td><?php echo $a*$i; ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>