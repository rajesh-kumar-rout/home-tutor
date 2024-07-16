

<ul class="bg-blue-600 h-screen absolute left-0 w-48">
    <li class="text-white text-xl text-center py-3 border-b border-b-white font-bold">ADMIN</li>
    <li>
        <a href="/admin/index.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/index.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-house"></i> General
        </a>
    </li>
    <li>
        <a href="/admin/services.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/services.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-book"></i> Service
        </a>
    </li>
    <li>
        <a href="/admin/faculties.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/faculties.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-person"></i> Faculty
        </a>
    </li>
    <li>
        <a href="/admin/contact.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/contact.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-telephone"></i> Contact
        </a>
    </li>
    <li>
        <a href="/admin/abouts.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/abouts.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-list"></i> About
        </a>
    </li>
    <li>
        <a href="/admin/faqs.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/faqs.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-person-add"></i> FAQ
        </a>
    </li>
    <li>
        <a href="journeys.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/journeys.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-activity"></i> Journey
        </a>
    </li>
    <li>
        <a href="change-password.php" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/change-password.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-key"></i> Change Password
        </a>
    </li>
    <li>
        <a href="/admin/action.php?action=logout" class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= $_SERVER['PHP_SELF'] === '/admin/logout.php' ? 'bg-blue-700 border-l-white' : null  ?>">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </li>
</ul>