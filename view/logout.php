<?php
// Start a session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete the cookie by setting its expiration time to a past date
setcookie('username', '', time() - 3600, '/');

// Redirect to the login page or any other page
header("Location: Chapter11.php");
exit;
