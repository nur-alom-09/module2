<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Skip the multiple of number 5:</h2>

<?php
for($i=1 ; $i <= 50 ; $i++){
    if($i % 5 ){
        echo "$i &nbsp";
        continue;
    }
}
?>
</body>
</html>

