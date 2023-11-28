<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = 'SELECT * FROM animals';

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)){
  echo '<b>Вид животного: </b>'.$row['type'].'</br>'
  .'<b>Имя животного: </b>'.$row['name'].'</br>'.
  '<b>Возраст животного: </b>'.$row['age'].'</br><br></br>';
}
?>