<?php
    $act = 'payment';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'payment':
            include_once './view/payment.php';
            break;
        
        default:
            # code...
            break;
    }
?>