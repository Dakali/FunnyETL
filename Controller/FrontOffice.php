<?php

use Model\ExtractManager;
use Model\CsvManager;

require_once ("./Model/CsvManager.php");
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

function csvExtraction($file){

    $CE = new CsvManager();
    $toXtract = $CE->importFromCsv($file);
    if ($toXtract === false){
        throw new Exception('impossible d\'ajouter');
    }else{
        $EM = new ExtractManager();
        $datas = $EM->getXtractedDatas();
        require("./View/syncedView.php");
    }
}

function displayError(){
    header("Location:./View/errorView.php");
}

function xtracted(){
    $EM = new ExtractManager();
    $datas = $EM->getXtractedDatas();
    require("./View/syncedView.php");
}

function display()
{
    header("Location:./View/indexView.php");
}