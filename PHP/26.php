<?php
echo '<b>Мой любимый фильм - </b> '.$_POST['movie'].'<br>'.
'<b>Главную роль в фильме играет - </b>'.$_POST['actor'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="26.php" method="post">
    Введите ваш любимый фильм: <input type="text" name="movie"><br>
    Введите главного актера этого фильма: <input type="text" name="actor"><br>
    <button type="submit">Отправить</button>
  </form>
</body>
</html>