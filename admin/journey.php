<?php 

require './header.php';

if(empty($_GET['journey_id']) === false)
{
    $journey = null;

    foreach($data['journeys'] as $item)
    {
        if($item['id'] == $_GET['journey_id'])
        {
            $journey = $item;
            break;
        }
    }
}

?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form 
        action="/admin/action.php?<?= isset($journey) ? "action=edit_journey&journey_id={$journey['id']}" : "action=save_journey" ?>" 
        method="POST" 
        class="bg-white p-8 rounded-lg shadow-lg"
    >
        <h2 class="mb-6 text-xl font-bold text-center"><?= isset($journey) ? "Create New Journey" : "Edit Journey" ?></h2>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $journey['title'] ?? null ?>"
            >
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <input 
                type="text" 
                id="description" 
                name="description"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $journey['description'] ?? null ?>"
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