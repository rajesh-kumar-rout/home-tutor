<?php

function get_active_class(...$paths) {
    if(in_array($_SERVER['PHP_SELF'], $paths)) {
        return 'bg-blue-700 border-l-white';
    } else {
        return null;
    }
}

?>

<ul class="bg-blue-600 h-screen absolute -left-48 lg:left-0 w-48 transition-all duration-300" id="sidebar">
    <li class="text-white text-xl text-center py-3 border-b border-b-white font-bold">ADMIN</li>

    <li>
        <a 
            href="/admin/index.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/index.php') ?>"
        >
            <i class="bi bi-house"></i> General
        </a>
    </li>

    <li>
        <a 
            href="/admin/services.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/services.php', '/admin/service.php') ?>"
        >
            <i class="bi bi-book"></i> Service
        </a>
    </li>

    <li>
        <a 
            href="/admin/faculties.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/faculties.php', '/admin/faculty.php') ?>"
        >
            <i class="bi bi-person"></i> Faculty
        </a>
    </li>

    <li>
        <a 
            href="/admin/contact.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/contact.php') ?>"
        >
            <i class="bi bi-telephone"></i> Contact
        </a>
    </li>

    <li>
        <a 
            href="/admin/abouts.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/abouts.php', '/admin/about.php') ?>"
        >
            <i class="bi bi-list"></i> About
        </a>
    </li>

    <li>
        <a 
            href="/admin/faqs.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/faqs.php', '/admin/faq.php') ?>"
        >
            <i class="bi bi-person-add"></i> FAQ
        </a>
    </li>

    <li>
        <a 
            href="journeys.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/journeys.php', '/admin/journey.php') ?>"
        >
            <i class="bi bi-activity"></i> Journey
        </a>
    </li>

    <li>
        <a 
            href="change-password.php" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white <?= get_active_class('/admin/change-password.php') ?>"
        >
            <i class="bi bi-key"></i> Change Password
        </a>
    </li>

    <li>
        <a 
            href="/admin/action.php?action=logout" 
            class="flex items-center gap-3 p-3 text-white border-l-2 border-l-transparent hover:border-l-white"
        >
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </li>
</ul>