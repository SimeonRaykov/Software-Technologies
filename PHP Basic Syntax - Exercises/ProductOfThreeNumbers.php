<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Of 3 Numbers</title>
</head>
<body>
<form>
   Enter 3 Numbers: <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="text" name="num3">
    <input type="submit"><br/>
</form>
<?php

if(isset($_GET['num1']) && isset($_GET['num2'])
&& isset($_GET['num3'])){

    $product=$_GET['num1']*$_GET['num2']*$_GET['num3'];
$type="";
    if($product<0){
        $type="Negative";
    }
    else{
        $type="Positive";
    }
echo "The product is ".$type;

}


?>

</body>
</html>