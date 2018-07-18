<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime Numbers From 1 to N</title>
</head>
<body>

<form>
    Enter a number: <input type="number" name="num">
    <input type="submit">

</form>

<?php

if (isset($_GET['num'])) {

    $isPrime = false;

    $n = $_GET['num'];

    for ($i = $n; $i > 1; $i -= 1) {

        if ($i == 2 || $i == 3) {
            echo $i . " ";
        } else {


            if ($i % 2 == 0 || $i % 3 == 0) {


            } else {
                echo $i . " ";
            }
        }

    }
}
?>

</body>
</html>