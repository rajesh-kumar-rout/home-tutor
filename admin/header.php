<?php

session_start();

if(!(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true)) {
    header('Location: /admin/login.php?return_url=' . $_SERVER['PHP_SELF']);
    die();
}

$data = json_decode(file_get_contents('../data.json'), true);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './head.php' ?>
</head>

<body class="bg-gray-100">
    <?php require './sidebar.php' ?>

    <div class="ml-48 p-8 h-screen overflow-auto">
        
    
