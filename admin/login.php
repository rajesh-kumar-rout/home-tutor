<?php

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: /admin/index.php');
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './head.php' ?>
</head>

<body class="bg-gray-100">
    <div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
        <form action="/admin/action.php?action=login" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="mb-6 text-xl font-bold text-center">Login</h2>

            <div class="mb-4">
                <label for="username" class="block text-gray-700 font-bold mb-2">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div class="text-center">
                <button 
                    type="submit"
                    class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300"
                >
                    Login
                </button>
            </div>
        </form>
    </div>
</body>
</html>
