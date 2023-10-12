<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Using PHP</title>
</head>
<body>
<table border="1">
        <?php for ($i = 0; $i < 4; $i++) :?>
            <tr>
                <?php for ($j = 0; $j < 5; $j++) :?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>    
    </table>
</body>
</html>