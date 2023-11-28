<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">

  <h3>Сложение/умножение двух чисел</h3>
  <p>Число х: <input type="number1" name="num1"></p>
  <p>Число y: <input type="number2" name="num2"></p>
  <button type="submit" name='operation' value='1'>Сложить</button>
  <button type="submit" name='operation' value='2'>Умножить</button>
  </form>
</body>
</html>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$operation = $_POST['operation'];

if($operation == '1'){
  
  echo '<p><b>Ответ: </b>'. ($num1+$num2).'</p>';
}else if($operation == '2'){
  
  echo '<p><b>Ответ: </b>'. ($num1 * $num2) .'</p>';
}

?>
