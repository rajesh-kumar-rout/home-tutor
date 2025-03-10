<?php 

require './header.php';

$faqs = $data['faqs'];

?>

<div class="flex items-center justify-between mb-4">
    <h1 class="font-bold text-xl">FAQ</h1>

    <a 
        href="/admin/faq.php"
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
                <th class="py-3 px-6 text-left border-b border-gray-300">Questions</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Answer</th>
                <th class="py-3 px-6 text-left border-b border-gray-300">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($faqs as $faq): ?>
                <tr>
                    <td class="py-3 px-6 border-b border-gray-300">
                        <i class="bi bi-list cursor-pointer"></i>
                    </td>

                    <td class="py-3 px-6 border-b border-gray-300 whitespace-nowrap"><?= $faq['question'] ?></td>

                    <td class="py-3 px-6 border-b border-gray-300"><?= $faq['answer'] ?></td>
                    
                    <td class="py-3 px-6 border-b border-gray-300">
                        <div class="flex gap-3">
                            <a
                                href="/admin/action.php?action=delete_faq&faq_id=<?= $faq['id'] ?>"
                                class="bg-red-500 text-white rounded-full flex items-center justify-center h-8 w-8 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75"
                            >
                                <i class="bi bi-trash-fill text-sm"></i>
                            </a>

                            <a
                                href="/admin/faq.php?faq_id=<?= $faq['id'] ?>"
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
            const faqs = new FormData()

            $("tbody tr").each(function (index) {
                faqs.append(`faqs[${index}][question]`, $(this).find("td").eq(1).text())
                faqs.append(`faqs[${index}][answer]`, $(this).find("td").eq(2).text())
                faqs.append(`faqs[${index}][id]`, new URLSearchParams($(this).find("td").eq(3).find("a").attr("href").split("?")[1]).get("faq_id"))
            })

            fetch("/admin/action.php?action=reorder_faqs", {
                method: "POST",
                body: faqs
            })
        }
    })
</script>

<?php require './footer.php' ?>