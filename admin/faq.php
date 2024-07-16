<?php 

require './header.php';

if(empty($_GET['faq_id']) === false)
{
    $faq = null;

    foreach($data['faqs'] as $item)
    {
        if($item['id'] == $_GET['faq_id'])
        {
            $faq = $item;
            break;
        }
    }
}

?>

<div class="w-full md:w-2/3 mb-6 md:mb-0 mx-auto">
    <form 
        action="<?= isset($faq) ? "/admin/action.php?action=edit_faq&faq_id={$faq['id']}" : "/admin/action.php?action=save_faq" ?>" 
        method="POST" 
        class="bg-white p-8 rounded-lg shadow-lg"
    >
        <h2 class="mb-6 text-xl font-bold text-center"><?= isset($faq) ? "Edit Question" : "Create New Question" ?></h2>

        <div class="mb-4">
            <label for="question" class="block text-gray-700 font-bold mb-2">Question</label>
            <input 
                type="text" 
                id="question" 
                name="question"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $faq['question'] ?? null ?>"
            >
        </div>

        <div class="mb-4">
            <label for="answer" class="block text-gray-700 font-bold mb-2">Answer</label>
            <input 
                type="text" 
                id="answer" 
                name="answer"
                class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="<?= $faq['answer'] ?? null ?>"
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