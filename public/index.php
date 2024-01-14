<?php

require '../vendor/autoload.php';

$filePath = '../src/Views/home.php';

if (file_exists($filePath)) {
    include $filePath;
} else {
    echo "El archivo $filePath no existe.";
}

?>
