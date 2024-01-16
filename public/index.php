<?php

use Portfolio\Controllers\Contact_Form_Controller;

require '../vendor/autoload.php';

$form = new Contact_Form_Controller();
//$form->get_mail_params();

$filePath = '../src/Views/home.php';

if (file_exists($filePath)) {
    include $filePath;
} else {
    echo "El archivo $filePath no existe.";
}

?>
