<?php

    require 'setenv.php';
    require './utilities/connection.php';

$stmt = $con->prepare("INSERT INTO cs3620_project1.user (`username`,
    `password`,
    `first_name`,
    `last_name`) VALUES (?, ?, ?, ?)");

    $un = $_POST["username"];
    $fn = $_POST["firstName"];
    $ln = $_POST["lastName"];
    $pw = hash("sha256", trim($_POST['password']));

    $stmt->bind_param('ssss', $un, $pw, $fn, $ln);
    $stmt->execute();

    $stmt->close();
    $con->close();

    header('Location: login.php');
?>