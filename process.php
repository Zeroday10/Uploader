<?php
$email = $_POST['email'];
mkdir("uploader/".$email);
$picname = $_FILES['pic']['name'];
$array = explode('.',$picname);
$ext = end($array);
$newname = rand().".".$ext;
$from = $_FILES['pic']['tmp_name'];
$to = "uploader/".$email."/".$newname;
move_uploaded_file($from,$to);
