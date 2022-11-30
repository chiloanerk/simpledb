<?php
session_start();
// if no session variable exists then redirect the user
if (!isset($_SESSION['user_level'])) {
    header("Location: index.php");
    exit();
} else {
    // Cancel the session
    $_SESSION = array(); // Destroy the variables
    $params = session_get_cookie_params();
    // Destroy the cookie
    Setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]);
    if (session_status() == PHP_SESSION_ACTIVE) {
        session_destroy(); // Destroy the session itself
    }
    header("Location: index.php");
}