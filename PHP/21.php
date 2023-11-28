<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="20.php" method="post">

  <p>Как вас зовут? <input type="text" name="name"></p>
  <p>Сколько вам лет? <input type="number" name="age"></p>
  <p>В каком городе вы живете? <input type="text" name="city"></p>
  <button type="submit">Отправить форму</button>
  </form>
</body>
</html>
<?php
$name = $_POST['name'];

$age = $_POST['age'];

$city = $_POST['city'];

echo 'Вас зовут '.$name.'<br>'
.'Вам '.$age.' лет'.'<br>'.
'Вы живете в городе '.$city;
?>
