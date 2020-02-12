<?php
$email = $_POST['email'];
//echo "$email";

mkdir("uploader/".$email);
$picname = $_FILES['pic']['name'];
$array = explode('.',$picname);
//var_dump($array);
$ext = end($array);
$newname = rand().".".$ext;
//var_dump($newname);
$from = $_FILES['pic']['tmp_name'];
$to = "uploader/".$email."/".$newname;
move_uploaded_file($from,$to);