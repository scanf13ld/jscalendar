<?php
require 'database.php';
session_start();
ini_set('display_errors', 1);
?>

<?php

$_SESSION['username'] = 'guest';

echo json_encode(htmlentities($user+" successfully logged out."));

?>
