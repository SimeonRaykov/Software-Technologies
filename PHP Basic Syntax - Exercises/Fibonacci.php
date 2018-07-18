<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fibonacci</title>
</head>
<body>
<form>

    Enter a number: <input type="number" name="num">
    <input type="submit">

</form>

<?php

if (isset($_GET['num'])) {

    $n = $_GET['num'];
    $last1 = 1;
    $last2 = 1;
    if ($n == 1) {
        echo "1";
    } else if ($n == 2) {
        echo "1 1";
    } else {
        echo "1 1 ";

        for ($i = 2; $i < $n; $i += 1) {

            $currentFiboNumber = $last1 + $last2;

            echo $currentFiboNumber . " ";

            $last2 = $last1;
            $last1 = $currentFiboNumber;


        }
    }
}

?>


</body>
</html>