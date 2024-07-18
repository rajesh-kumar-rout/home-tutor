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

    <div class="ml-0 lg:ml-48 p-8 h-screen overflow-auto">

        <div class="text-right mb-4" id="sidebarToggler">
            <i class="bi bi-list text-2xl shadow-md rounded-md p-2 cursor-pointer inline-block bg-white lg:hidden"></i>
        </div>
        
    
