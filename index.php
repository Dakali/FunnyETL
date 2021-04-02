<?php

require("Controller/FrontOffice.php");
$file = 'Public/assets/File/test.txt';

try {
    if (isset($_GET['action'])) {

        if ($_GET['action'] == 'startXtraction') {
            startExtraction($file);
        }
        elseif ($_GET['action'] == 'successfullyXtracted') {
            xtracted();
        }
        elseif ($_GET['action'] === 'csvSubmit') {
            if (isset($_POST['submit'])) {
                csvExtraction($_FILES['file']['tmp_name']);
            } else {
                header("Location:View/errorView.php");
            }
        }
        elseif ($_GET['action'] === 'errorCsv'){
            header("Location:View/indexView.php?message=errorCsv");
        }

    } else {
        display();
    }

} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}
