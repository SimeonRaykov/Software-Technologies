<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nfactorial</title>
</head>
<body>

<form>
Enter a number: <input type="number" name="num">
    <input type="submit">

</form>

<?php

if(isset($_GET['num'])){

    $n=intval($_GET['num']);
    $factorial=1;

    for($i=1; $i<=$n; $i+=1){

        $factorial*=$i;

    }
    echo "The factorial of the number ".$n." is ".$factorial;
}

?>

</body>
</html>