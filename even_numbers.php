<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers Using For Loop</title>
</head>
<body>



<H2>Even Numbers Using For Loop:</H2>
<?php
for($i=2; $i<=20; $i+=2){
echo "$i <br/>";
}
?>
<br><br><br>



<H2>Even Numbers Using while Loop:</H2>
<?php
$i=2;
while($i<=20){
    echo "$i <br/>";
    $i += 2;
}
?><br><br><br>



<H2>Even Numbers Using DO-while Loop:</H2>
<?php
$i=2;
do{
echo "$i <br/>" ;   
$i += 2;
}while($i <= 20);
?>
</body>
</html>