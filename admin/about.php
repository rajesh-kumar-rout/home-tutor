<?php 

require './header.php';

if(empty($_GET['about_id']) === false)
{
    $about = null;

    foreach($data['abouts'] as $item)
    {
        if($item['id'] == $_GET['about_id'])
        {
            $about = $item;
            break;
        }
    }
}

?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form 
        action="<?= isset($about) ? "/admin/action.php?action=edit_about&about_id={$about['id']}" : "/admin/action.php?action=save_about" ?>" 
        method="POST" 
        class="bg-white p-8 rounded-lg shadow-lg"
    >
        <h2 class="mb-6 text-xl font-bold text-center"><?= isset($about) ? "Edit About" : "Create New About" ?></h2>

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
            <input 
                type="text" 
                id="title" 
                name="title"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $about['title'] ?? null ?>">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
            <input 
                type="text" 
                id="description" 
                name="description"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $about['description'] ?? null ?>">
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