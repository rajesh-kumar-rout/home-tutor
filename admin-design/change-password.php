<?php require ('./header.php') ?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form action="#" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="mb-6 text-xl font-bold text-center">Change Password</h2>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Old Password</label>
            <input type="text" id="name" name="name"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">New Password</label>
            <input type="email" id="email" name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Confirm New Password</label>
            <input type="email" id="email" name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required="">
        </div>
        <

        <div class="text-center">
            <button type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">Change Password</button>
        </div>
    </form>
</div>

<?php require ('./footer.php') ?>