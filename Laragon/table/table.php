<?php
$number = 1;
$max = 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>I need Help</title>
    <link rel="stylesheet" type="text/css" href="style.css" />   
</head>
<body>
    <h1><php echo="Math Table"?></h1>
    <div class="header">
        <h1>Math Table</h1>
        <div class="box">
            <div class="number">Number: <?php echo $number; ?></div>
            <div class="max">Max: <?php echo $max; ?></div>
        </div>
    </div>

    <table>
        <tr><th colspan="3">Addition table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number + $i</td>
                    <td>=</td>
                    <td>" . ($number + $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <table>
        <tr><th colspan="3">Subtraction table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number - $i</td>
                    <td>=</td>
                    <td>" . ($number - $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <table>
        <tr><th colspan="3">Multiplication table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            echo "<tr>
                    <td>$number X $i</td>
                    <td>=</td>
                    <td>" . ($number * $i) . "</td>
                  </tr>";
        }
        ?>
    </table>

    <table>
        <tr><th colspan="3">Division table</th></tr>
        <?php
        for ($i = 1; $i <= $max; $i++) {
            $result = $number / $i;
            echo "<tr>
                    <td>$number / $i</td>
                    <td>=</td>
                    <td>" . $result . "</td>
                  </tr>";
        }
        ?>
    </table>

    <div class="clear"></div>

</body>
</html>