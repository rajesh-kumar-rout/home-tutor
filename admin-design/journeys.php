<?php require ('./header.php') ?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">Journeys</h1>

    <button type="submit"
        class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
        Add New</button>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-3 px-6 text-left border-b border-gray-300">Reorder</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Title</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Description</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300">
                    <i class="bi bi-list cursor-pointer"></i>
                </td>
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Establishment</td>

                <td class="py-3 px-6 border-b border-gray-300">Founded in 2010 with a mission to provide quality tutoring services.</td>
                <td class="py-3 px-6 border-b border-gray-300">
                    <div class="flex gap-3">
                        <!-- Delete Button -->
                        <button
                            class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                            <i class="bi bi-trash-fill text-sm"></i>
                        </button>

                        <!-- Edit Button -->
                        <button
                            class="bg-blue-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                            <i class="bi bi-pencil-fill text-sm"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300">
                    <i class="bi bi-list cursor-pointer"></i>
                </td>
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Expansion</td>

                <td class="py-3 px-6 border-b border-gray-300">Grew to serve hundreds of students across Bhubaneswar, Odisha.</td>
                <td class="py-3 px-6 border-b border-gray-300">
                    <div class="flex gap-3">
                        <!-- Delete Button -->
                        <button
                            class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                            <i class="bi bi-trash-fill text-sm"></i>
                        </button>

                        <!-- Edit Button -->
                        <button
                            class="bg-blue-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                            <i class="bi bi-pencil-fill text-sm"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="py-3 px-6 border-b border-gray-300">
                    <i class="bi bi-list cursor-pointer"></i>
                </td>
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Commitment</td>

                <td class="py-3 px-6 border-b border-gray-300">Continuing to uphold our commitment to educational excellence.</td>
                <td class="py-3 px-6 border-b border-gray-300">
                    <div class="flex gap-3">
                        <!-- Delete Button -->
                        <button
                            class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">
                            <i class="bi bi-trash-fill text-sm"></i>
                        </button>

                        <!-- Edit Button -->
                        <button
                            class="bg-blue-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                            <i class="bi bi-pencil-fill text-sm"></i>
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require ('./footer.php') ?>