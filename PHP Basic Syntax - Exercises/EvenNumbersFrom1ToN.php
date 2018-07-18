<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Even Numbers From 1 To N</title>
</head>
<body>
<form>
    Enter a Number: <input type="number" name="num">
    <input type="submit">

</form>
<?php
if (isset($_GET['num'])) {

    echo "The even numbers are: ";
    $n = intval($_GET['num']);

    for ($i = 1; $i <= $n; $i += 1) {
        if ($i % 2 == 0) {
            echo $i." ";
        }


    }

}

?>

</body>
</html>