<?php require ('./header.php') ?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">About</h1>

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
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Our Mission</td>

                <td class="py-3 px-6 border-b border-gray-300">To provide personalized tutoring services that empower students.</td>
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
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Our Vision</td>

                <td class="py-3 px-6 border-b border-gray-300">To be the leading provider of quality tutoring services in Bhubaneswar, Odisha.</td>
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
                <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap">Why Choose Us ?</td>

                <td class="py-3 px-6 border-b border-gray-300">We offer experienced tutors, flexible scheduling, and personalized learning plans.</td>
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