<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers From N to 1</title>
</head>
<body>

<form>
  Enter a number: <input type="number" name="num">
    <input type="submit">
</form>

<?php
if(isset($_GET['num'])){

    $n=intval($_GET['num']);

    for($i=$n; $i>=1; $i-=1){

        echo $i." ";

    }

}
?>

</body>
</html>