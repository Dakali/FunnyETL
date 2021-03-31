<?php

use Model\ExtractManager;

require_once("./Model/ExtractManager.php");



function startExtraction($file)
{
    $EM = new ExtractManager();
    $sync = $EM->xtractDatas($file);
    if ($sync === false) {
        displayError();
    } else {
        header('Location: index.php?action=successfullyXtracted');
    }
}

function displayError(){
    header("Location:./View/errorView.php");
}

function xtracted(){
    header("Location:./View/syncedView.php");
}

function display()
{
    header("Location:./View/indexView.php");
}