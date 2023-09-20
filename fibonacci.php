<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <h2>Fibonacci Numbers:</h2>

<?php
$num1 = 0;
$num2 = 1;
$num3 = 1;

    for($i=0 ; $i < 10 ; $i++){
        
        if($num1 > 100){
            break;
        };
        echo "$num1 &nbsp";

        $num2 = $num3;

        $num3 = $num1 + $num2 ;

        $num1 = $num2;
    
    };

?>
</body>
</html>

