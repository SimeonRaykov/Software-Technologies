<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers From 1 To N</title>
</head>
<body>

<form>
    Enter a number: <input type="number" name="num">
    <input type="submit">
</form>
<?php
if(isset($_GET['num'])){

    $resultStr="";

    for($i=1; $i<=intval($_GET['num']); $i+=1){

        $currentStr=$i;
        echo $i." ";
     //  echo $resultStr=$resultStr.$currentStr;
    }
//echo $resultStr;
}

?>


</body>
</html>