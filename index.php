<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    
    <?php 
    
        for($i = 1; $i <= 10; $i++) {

            echo "<tr>\n";

            for($y = 1; $y <= 10; $y++) {
                echo "<td>";
                echo $i*$y;
                echo "</td>\n";
            }

            echo "</tr>\n";

        }

    ?>


</body>
</html>