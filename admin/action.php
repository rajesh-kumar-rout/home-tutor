<?php 

$action = $_GET['action'] ?? null;

$data = json_decode(file_get_contents('../data.json'), true);

if($action === 'delete_service') {
    $data['services'] = array_filter($data['services'], function($service){
        return $service['id'] != $_GET['service_id'];
    });

    file_put_contents('../data.json', json_encode($data));
    header('Location: /admin/services.php');
} else if($action === 'edit_service') {
    $data['services'] = array_map(function($service){
        if($service['id'] == $_GET['service_id']) {
            $service['name'] = $_POST['name'];
            $service['description'] = $_POST['description'];
        }
        return $service;
    }, $data['services']);

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/services.php');
} else if($action === 'save_service') {
    $data['services'][] = [
        'id' => time(),
        'name' => $_POST['name'],
        'description' => $_POST['description'],
    ];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/services.php');
} else if($action === 'edit_general') {
    $data['name'] = $_POST['name'];
    $data['title'] = $_POST['title'];
    $data['description'] = $_POST['description'];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/index.php');
} else if($action === 'delete_faculty') {
    $data['faculties'] = array_filter($data['faculties'], function($faculty){
        return $faculty['id'] != $_GET['faculty_id'];
    });

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faculties.php');
} else if($action === 'save_faculty') {
    if($_FILES['image']['size'] > 0) {
        $destination = "/uploads/" . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], "..$destination");
    } else {
        $destination = 'https://via.placeholder.com/96';
    }

    $data['faculties'][] = [
        'id' => time(),
        'name' => $_POST['name'],
        'image' => $destination,
        'specialist' => $_POST['specialist'],
        'description' => $_POST['description'],
    ];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faculties.php');
} else if($action === 'edit_faculty') {
    if($_FILES['image']['size'] > 0) {
        $destination = "/uploads/" . time() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['image']['tmp_name'], "..$destination");
    } else if($_POST['reset_image'] === 'true') {
        $destination = 'https://via.placeholder.com/150';
    }

    $data['faculties'] = array_map(function($faculty) use ($destination) {
        if($faculty['id'] == $_GET['faculty_id']) {
            $faculty['name'] = $_POST['name'];
            $faculty['image'] = $destination ?? $faculty['image'];
            $faculty['specialist'] = $_POST['specialist'];
            $faculty['description'] = $_POST['description'];
        }
        return $faculty;
    }, $data['faculties']);

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faculties.php');
} else if($action == 'edit_contact') {
    $data['contact']['phone'] = $_POST['phone'];
    $data['contact']['email'] = $_POST['email'];
    $data['contact']['address'] = $_POST['address'];
    $data['contact']['facebook'] = $_POST['facebook'];
    $data['contact']['instagram'] = $_POST['instagram'];
    $data['contact']['twitter'] = $_POST['twitter'];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/contact.php');
} else if($action == 'edit_faq') {
    $data['faqs'] = array_map(function($faq){
        if($faq['id'] == $_GET['faq_id']) {
            $faq['question'] = $_POST['question'];
            $faq['answer'] = $_POST['answer'];
        }
        return $faq;
    }, $data['faqs']);

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faqs.php');
} else if($action == 'delete_faq') {
    $data['faqs'] = array_filter($data['faqs'], function($faq){
        return $faq['id'] != $_GET['faq_id'];
    });

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faqs.php');
} else if($action == 'save_faq') {
    $data['faqs'][] = [
        'id' => time(),
        'question' => $_POST['question'],
        'answer' => $_POST['answer'],
    ];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/faqs.php');
} else if($action == 'edit_journey') {
    $data['journeys'] = array_map(function($journey){
        if($journey['id'] == $_GET['journey_id']) {
            $journey['title'] = $_POST['title'];
            $journey['description'] = $_POST['description'];
        }
        return $journey;
    }, $data['journeys']);

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/journeys.php');
} else if($action == 'delete_journey') {
    $data['journeys'] = array_filter($data['journeys'], function($journey){
        return $journey['id'] != $_GET['journey_id'];
    });

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/journeys.php');
} else if($action == 'save_journey') {
    $data['journeys'][] = [
        'id' => time(),
        'title' => $_POST['title'],
        'description' => $_POST['description'],
    ];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/journeys.php');
} else if($action == 'change_password') {
    if($data['password'] != $_POST['old_password']) {
        die("<script>alert('Old Password does not match'); window.location.href='/admin/change-password.php'</script>");
    } 

    $data['password'] = $_POST['new_password'];

    file_put_contents('../data.json', json_encode($data));

    header('Location: /admin/change-password.php');
} else if($action == 'login') {
    session_start();

    if($data['password'] == $_POST['password'] && $data['username'] == $_POST['username']) {
        $_SESSION['is_logged_in'] = true;
        die("<script>window.location.href='/admin/login.php'</script>");
    } else {
        die("<script>alert('Invalid username or password'); window.location.href='/admin/login.php'</script>");
    }
} else if($action == 'logout') {
    session_start();

    $_SESSION['is_logged_in'] = false;
    die("<script>window.location.href='/admin/login.php'</script>");
}