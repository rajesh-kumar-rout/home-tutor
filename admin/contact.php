<?php 

require './header.php';

$contact = $data['contact'];

?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form action="/admin/action.php?action=edit_contact" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="mb-6 text-xl font-bold text-center">Edit Contact Information</h2>

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
            <input 
                type="number" 
                id="phone" 
                name="phone"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['phone'] ?>"
            >
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['email'] ?>"
            >
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
            <input 
                type="address" 
                id="address" 
                name="address"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['address'] ?>"
            >
        </div>

        <div class="mb-4">
            <label for="facebook" class="block text-gray-700 font-bold mb-2">Facebook</label>
            <input 
                type="facebook" 
                id="facebook" 
                name="facebook"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['facebook'] ?>"
            >
        </div>

        <div class="mb-4">
            <label for="instagram" class="block text-gray-700 font-bold mb-2">Instagram</label>
            <input 
                type="instagram" 
                id="instagram" 
                name="instagram"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['instagram'] ?>"
            >
        </div>
        <div class="mb-4">
            <label for="twitter" class="block text-gray-700 font-bold mb-2">Twitter</label>
            <input 
                type="twitter" 
                id="twitter" 
                name="twitter"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $contact['twitter'] ?>"
            >
        </div>

        <div class="text-center">
            <button 
                type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300"
            >
                Save
            </button>
        </div>
    </form>
</div>

<?php require './footer.php' ?>