<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

echo "<h1>Form Submitted</h1>";
echo "$name - $email - $message";
?>