<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Divisor Numbers</title>
</head>
<body>

<form>
    <input type="number" name="num">
    <input type="submit">

</form>

<?php

if(isset($_GET['num'])){

    $number=$_GET['num'];

    for($i=$number; $i>=1; $i-=1){

        if($number%$i==0){

        }
        else{
            echo $i." ";
        }

    }


}

?>

</body>
</html>