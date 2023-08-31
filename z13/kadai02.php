<?php
$apple_tanka  = "200";
$apple_num    = "8";
$apple_money  = "0";
$orange_tanka = "150";
$orange_num   = "5";
$orange_money = "0";
$s_sum        = "0";
$zei          = "0";
$sum          = "0";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <caption><b>見積書</b></caption>

        <tr>
            <td></td>
            <td><b>単価</b></td>
            <td><b>個数</b></td>
            <td><b>金額</b></td>
        </tr>

        <tr>
            <td>りんご</td>
            <td><?php echo $apple_tanka; ?></td>
            <td><?php echo $apple_num; ?></td>
            <td><?php echo $apple_money = $apple_tanka * $apple_num; ?></td>
        </tr>

        <tr>
            <td>みかん</td>
            <td><?php echo $orange_tanka; ?></td>
            <td><?php echo $orange_num; ?></td>
            <td><?php echo $orange_money = $orange_tanka * $orange_num; ?></td>
        </tr>

        <tr>
            <td>小計</td>
            <td colspan="3"><?php echo $s_sum = $apple_money + $orange_money ; ?></td>
        </tr>

        <tr>
            <td>消費税</td>
            <td colspan="3"><?php echo $zei = ($s_sum * 0.08); ?></td>
        </tr>

        <tr>
            <td>合計金額</td>
            <td colspan="3"><?php echo $sum = $s_sum + $zei; ?></td>
        </tr>
    </table>
</body>

</html>