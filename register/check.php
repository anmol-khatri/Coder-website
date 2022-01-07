<?php

$password = 'mypasswordhere12345';

// encrypt using password_hash()
$crypted = password_hash($password, PASSWORD_DEFAULT); 

// decrypt using password_verify()
echo password_verify($password, $crypted) ? 'Password Matches.' : 'Invalid password.';

?>