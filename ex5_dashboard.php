<?php
session_start();
if (!isset($_SESSION['accno'])) {
    header('Location: ex5.php');
    exit();
}

echo "Success";
