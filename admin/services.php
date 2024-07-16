<?php

require './header.php';

$services = $data['services'];

?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">Services</h1>

    <a 
        href="/admin/service.php"
        class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300"
    >
        Add New
    </a>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-3 px-6 text-left border-b border-gray-300">Reorder</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Name</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Description</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service): ?>
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300">
                        <i class="bi bi-list cursor-pointer"></i>
                    </td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $service['name'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $service['description'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300">
                        <div class="flex gap-3">
                            <form action="/admin/action.php?action=delete_service&service_id=<?= $service['id'] ?>" method="post">
                                <button 
                                    type="submit"
                                    class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"
                                >
                                    <i class="bi bi-trash-fill text-sm"></i>
                                </button>
                            </form>

                            <a 
                                href="/admin/service.php?service_id=<?= $service['id'] ?>"
                                class="bg-blue-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                            >
                                <i class="bi bi-pencil-fill text-sm"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php require './footer.php' ?>