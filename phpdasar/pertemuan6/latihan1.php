<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .kotak {
            background-color: aqua;
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 30px;
            margin: 2px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
 
<?php 
$angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
?>

<?php foreach($angka as $a) :?>
    <?php foreach ($a as $b) : ?>
        <div class="kotak">
            <?php echo $b; ?> 
        </div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>

</body>
</html>