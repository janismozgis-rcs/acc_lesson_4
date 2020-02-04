<?php
require_once '../functions.php';

require_once '../parts/header.php';
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

switch ($page) {
    case ('home'):
        require_once '../parts/content.php';
        break;
    case ('about'):
        require_once '../pages/about.php';
        break;
    case ('contacts'):
        require_once '../pages/contacts.php';
        break;
    case ('login'):
        require_once '../pages/login.php';
        break;
    default:
        require_once '../pages/404.php';

}
require_once '../parts/footer.php';
