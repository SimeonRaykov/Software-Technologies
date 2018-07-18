<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiply Or Divide The Numbers</title>
</head>
<body>
<form>
   Enter Two Numbers: <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit">

</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $result = 0;
    $firstNumber = intval($_GET['num1']);
    $secondNumber = intval($_GET['num2']);

    if ($secondNumber >= $firstNumber) {
        $result = $firstNumber * $secondNumber;
    } else {
        $result = $firstNumber / $secondNumber;
    }
    echo $result;

}


?>


</body>
</html>