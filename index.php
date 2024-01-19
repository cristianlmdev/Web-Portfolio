<?php

use Portfolio\Controllers\Contact_Form_Controller;

require 'vendor/autoload.php';

$form = new Contact_Form_Controller();
$form->get_mail_params();

$file_path = 'src/Views/home.php';
$file_maintenance = 'src/Views/maintenance.php';

$maintenance = false;

if ($maintenance) {
    include $file_maintenance;
}else{
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        echo "El archivo $file_path no existe.";
    }
}

?>
