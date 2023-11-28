<?php

$number = $_POST['number'];

if($number>0){
  echo 'Число х - положительное';
}else if ($number<0){
  echo 'Число х - отрицательное';
} else echo 'Число равно нулю'

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="22.php" method="post">

    <p>Введите число х: <input type="number" name="number" ></p>
    <button type="submit">Отправить</button>
    </form>
</body>
</html>