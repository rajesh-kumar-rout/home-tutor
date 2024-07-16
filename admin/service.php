<?php 

require './header.php';

if(empty($_GET['service_id']) === false)
{
    $service = null;

    foreach($data['services'] as $item)
    {
        if($item['id'] == $_GET['service_id'])
        {
            $service = $item;
            break;
        }
    }
}

?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form 
        action="/admin/action.php?<?= isset($service) ? "service_id={$service['id']}&action=edit_service" : "action=save_service" ?>" 
        method="POST" 
        class="bg-white p-8 rounded-lg shadow-lg"
    >
        <h2 class="mb-6 text-xl font-bold text-center"><?= isset($service) ? "Create New Service" : "Edit Service" ?></h2>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name"
                required 
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $service['name'] ?? null ?>"
            >
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Description</label>
            <input 
                type="text" 
                id="description" 
                name="description"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $service['description'] ?? null ?>"
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