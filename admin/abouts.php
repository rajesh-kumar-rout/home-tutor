<?php 

require './header.php'; 

$abouts = $data['abouts'];

?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">About</h1>

    <a 
        href="/admin/about.php"
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
                <th class="py-3 px-6 text-left border-b border-gray-300">Title</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Description</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($abouts as $about): ?>
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300">
                        <i class="bi bi-list cursor-pointer"></i>
                    </td>

                    <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap"><?= $about['title'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $about['description'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300">
                        <div class="flex gap-3">
                            <a
                                href="/admin/action.php?action=delete_about&about_id=<?= $about['id'] ?>"
                                class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"
                            >
                                <i class="bi bi-trash-fill text-sm"></i>
                            </a>

                            <a
                                href="/admin/about.php?about_id=<?= $about['id'] ?>"
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
            const abouts = new FormData()

            $("tbody tr").each(function (index) {
                abouts.append(`abouts[${index}][title]`, $(this).find("td").eq(1).text())
                abouts.append(`abouts[${index}][description]`, $(this).find("td").eq(2).text())
                abouts.append(`abouts[${index}][id]`, new URLSearchParams($(this).find("td").eq(3).find("a").attr("href").split("?")[1]).get("about_id"))
            })

            fetch("/admin/action.php?action=reorder_abouts", {
                method: "POST",
                body: abouts
            })
        }
    })
</script>

<?php require './footer.php' ?>