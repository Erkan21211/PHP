<?php 
session_start();

session_unset();
session_destroy();

header("Location: /H07/opdracht1/index.php?logout=You logged out");

if (isset($_SESSION['logout']) AND !empty($_SESSION['logout'])) {
    echo '<div class="logout">' . $_SESSION['logout'] . "</div>";
    $_SESSION['error'] = null;
}