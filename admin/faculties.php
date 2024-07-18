<?php 

require './header.php';

$faculties = $data['faculties'];

?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">Faculties</h1>

    <a 
        href="/admin/faculty.php"
        class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300"
    >
        Add New
    </a>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300 sortable">
        <thead>
            <tr>
                <th class="py-3 px-6 text-left border-b border-gray-300">Reorder</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Name</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Image</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Specialist</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Description</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($faculties as $faculty): ?>
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300">
                        <i class="bi bi-list cursor-pointer"></i>
                    </td>

                    <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap"><?= $faculty['name'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300">
                        <img class="w-10 h-10 rounded-full" src="<?= $faculty['image'] ?>">
                    </td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $faculty['specialist'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $faculty['description'] ?></td>
                    
                    <td class="py-3 px-6 border-b border-gray-300">
                        <div class="flex gap-3">
                            <a
                                href="/admin/action.php?action=delete_faculty&faculty_id=<?= $faculty['id'] ?>"
                                class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"
                            >
                                <i class="bi bi-trash-fill text-sm"></i>
                            </a>

                            <a
                                href="/admin/faculty.php?faculty_id=<?= $faculty['id'] ?>"
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

<script>
    Sortable.create($("table tbody")[0], {
        animation: 150,
        onEnd: function () {
            const faculties = new FormData()

            $("tbody tr").each(function (index) {
                faculties.append(`faculties[${index}][name]`, $(this).find("td").eq(1).text())
                faculties.append(`faculties[${index}][image]`, $(this).find("td").eq(2).find("img").attr("src"))
                faculties.append(`faculties[${index}][specialist]`, $(this).find("td").eq(3).text())
                faculties.append(`faculties[${index}][description]`, $(this).find("td").eq(4).text())
                faculties.append(`faculties[${index}][id]`, new URLSearchParams($(this).find("td").eq(5).find("a").attr("href").split("?")[1]).get("faculty_id"))
            })

            fetch("/admin/action.php?action=reorder_faculties", {
                method: "POST",
                body: faculties
            })
        }
    })
</script>

<?php require './footer.php' ?>