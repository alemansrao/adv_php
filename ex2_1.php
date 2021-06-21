<?php
if (isset($_POST['submit'])) {
    echo "<h1>Ticket Booked Successfully</h1>";
    $name = $_POST['name'];
    $seat = $_POST['seat'];
    $food = $_POST['food'];
    $visited = 1;

    setcookie('name', $name, time() + (86400 * 30), "/");
    setcookie('seat', $seat, time() + (86400 * 30), "/");
    setcookie('food', $food, time() + (86400 * 30), "/");
    setcookie('timesVisited', 1, time() + (86400 * 30), "/");
    die();
}

if (isset($_COOKIE['name']) && !isset($_POST['cancel'])) {
    setcookie('timesVisited', $_COOKIE['timesVisited'] + 1, time() + (86400 * 30), "/");
    echo "<html><head></head><body>";
    echo "<h1>Ticket already booked</h1><br>";
    echo "<h3>name : " . $_COOKIE['name'] . "</h3>";
    echo "<h3>seat : " . $_COOKIE['seat'] . "</h3>";
    echo "<h3>food : " . $_COOKIE['food'] . "</h3>";
    echo "<h3>timesVisited : " . $_COOKIE['timesVisited'] . "</h3>";
    echo "<form action=\"ex2.php\" method=\"post\"><input type=\"submit\" value=\"Cancel Ticket\" name=\"cancel\"></form>";
    echo "</body>";
    die();
}
