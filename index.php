<?php

require("Controller/FrontOffice.php");
$file = 'Public/assets/File/test.txt';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'startXtraction') {
            startExtraction($file);
        }elseif ($_GET['action'] == 'successfullyXtracted'){
            xtracted();
        }
    } else {
        display();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}
