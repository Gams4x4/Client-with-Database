<?php
// ... (database connection code) ...

$username = "admin1"; 
$password = "admin123";

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo "HASHED: " . $hashed_password ;


?>
