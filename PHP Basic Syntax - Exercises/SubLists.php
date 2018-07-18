<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sub Lists</title>
</head>
<body>
<form>
    <input type="number" name="num1">
    <input type="number" name="num2">
    <input type="submit">

</form>

<?php

if(isset($_GET['num1']) && isset($_GET['num2'])){

    $firstNumber=$_GET['num1'];
    $secondNumber=$_GET['num2'];

    echo "<ul>";

    for($i=1; $i<=$firstNumber; $i+=1){

        echo "<li> List $i";
        echo "<ul>";

        for($j=1; $j<=$secondNumber; $j+=1){

echo "<li>Element $i.$j</li> ";

        }
echo "</ul>";
echo " </li>";

    }
    echo "</ul>";


}

?>



</body>
</html>