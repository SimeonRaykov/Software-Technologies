<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tribonacci Numbers</title>
</head>
<body>

<form>
    <input type="number" name="num">
    <input type="submit">

</form>

<?php

if (isset($_GET['num'])) {

    $n = $_GET['num'];

    if ($n == 1) {
        echo "1";
    } else if ($n == 2) {
        echo "1 1";
    } else if ($n == 3) {
        echo "1 1 2";
    } else {
        echo "1 1 2 ";

        $currentFibo = 1;

        $last3 = 1;
        $last2 = 1;
        $last1 = 2;

        for ($i = 3; $i < $n; $i += 1) {

            $currentFibo=$last2+$last1+$last3;

            $last3 = $last2;
            $last2 = $last1;
            $last1 = $currentFibo;


            echo $currentFibo." ";
        }


    }


}


?>

</body>
</html>