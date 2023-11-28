
<?php
$length = $_POST['length'];

$width = $_POST['width'];

echo 'Площадь прямоугольника равна '.$length*$width;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="23.php" method="post">
    <p>Введите длину прямоугольника: <input type="number" name="length"></p>
    <p>Введите высоту прямоугольника: <input type="number" name="width"></p>
    <button type="submit">Вычислить</button>
  </form>
</body>
</html>
