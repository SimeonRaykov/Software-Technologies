<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fifty Shades Of Grey</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>


</head>
<body>

<?php

$firstColor=0;
$secondColor=0;
$thirdColor=0;

for ($i = 1; $i <= 5; $i += 1) {


    for ($j=1; $j<=10; $j +=1){

     echo  "<div style=background-color:rgb($firstColor,$secondColor,$thirdColor)></div>";

     $firstColor+=5;
     $secondColor+=5;
     $thirdColor+=5;

    }
    echo "<br>";
    $firstColor+=1;
    $secondColor+=1;
    $thirdColor+=1;
}

?>
</body>
</html>