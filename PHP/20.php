<!-- <?php

$date = new DateTime('now', new DateTimeZone('Europe/Samara'));

echo $date->format('d.m.y, H:i:s');
?> -->

<!-- Или как снизу -->
<?php

echo date('d.m.y').', '.date('H:i:s');
?>