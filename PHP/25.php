<?php

if ($_POST['month']>=12 || $_POST['month']<=2){
  echo 'Вы родились зимой';
} else if ($_POST['month']>=3 && $_POST['month']<=5){
  echo 'Вы родились весной';
}else if ($_POST['month']>=6 && $_POST['month']<=8){
  echo 'Вы родились летом';
}else echo 'Вы родились осенью';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="25.php" method="post">
    <p>Введите месяц своего рождения<input type="number" min=1 max=12 name="month"></p>
    <button type="submit">Отправить</button>
  </form>
</body>
</html>