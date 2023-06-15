<?php

// var_dump($_POST);
// exit();

$no =$_POST['no'];
$name =$_POST['name'];
$com =$_POST['com'];
$deadline =$_POST['deadline'];

$write_data = "{$no} / {$name} /  {$com} / {$deadline} /\n";

$file = fopen('data/todo.txt','a');
flock($file,LOCK_EX);
fwrite($file,$write_data);

flock($file,LOCK_UN);

fclose($file);

header("Location:shift_txt_input.php");

exit();