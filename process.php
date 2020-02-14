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
if (move_uploaded_file($from,$to) == true);
    echo "<h1 style='color:green; text-align:center;padding-top:70px';>"."OK your file Uploaded..."."</h1>";
?>
