<?php
$act = 'user';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'user':
        include_once "./view/user.php";
        break;
    case 'block':
        $id = '';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $user = new User();
        $user->blockUser($id);
        include_once "./view/user.php";
        break;
    case 'unblock':
        $id = '';
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $user = new User();
        $user->unBlockUser($id);
        include_once "./view/user.php";
        break;
    default:
        # code...
        break;
}
