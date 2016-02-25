<?php
print_r($_POST);
$f = fopen('data.txt', 'a');
fwrite($f,$_POST['title'].",".$_POST['content']."\n");
fclose($f);
echo "ok";