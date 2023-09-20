<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> fibonacci series</title>
</head>
<body>
    

<h2>Fibonacci series</h2>

<?php

function fibonacci ( $old , $new, $end){

    static $start ;
    $start = $start ?? 1;
    
    if ($start > $end){
        return;
    };
    $start++;

    echo "$old &nbsp";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci( $old, $new , $end);


};

fibonacci( 0 , 1 , 15);

?>
</body>
</html>


