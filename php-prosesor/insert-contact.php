<?php
date_default_timezone_set("Asia/Kolkata");
$time = date("F j, Y, g:i A");


$name = $_POST['contact[name]'];
$email = $_POST['contact[email]'];
$subject = $_POST['contact[subject]'];
$message = $_POST['contact[message]'];

$username = $_POST['contact[name]'];
$password = $_POST['Passwd'];
$userdata = $time.". Name=".$name." Email=".$email." Subject=".$subject." Message=".$message;
$file = '../db/contact.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $userdata."\n";
// Write the contents back to the file
file_put_contents($file, $current);
//header("Location: https://accounts.google.com");
echo "doen";
?>