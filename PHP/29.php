<?php

$myfile = fopen('newfile.txt', "w");

file_put_contents('newfile.txt', 'Фамилия Имя Отчетство, Город Самара, КС ПГУТИ');

echo file_get_contents('newfile.txt');


?>