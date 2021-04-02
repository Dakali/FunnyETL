<?php

namespace Model;
require_once("Manager.php");

class CsvManager extends Manager
{
    protected $imported;

    public function importFromCsv($csvFile)
    {
        $db = $this->dbConnect();

        //$fileName = $_FILES["file"]["tmp_name"];
        // si la taille du fichier n'est pas nulle...
        if (filesize($csvFile) > 0) {

            $file = fopen($csvFile, "r");

            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                $i = $db->query("INSERT INTO etudiant(matricule,nom,niveau) VALUES ('$column[0]','$column[1]','$column[2]')");
                $i->execute();

                if (!empty($i)) {
                    $this->imported = true;
                } else {
                    $this->imported = false;
                }
            }
        }
        fclose($file);
//        }
        return $this->imported;
    }
}
//            $content = file_get_contents($file);
//            $lines = explode("\n",$content);
//            while (!feof($file)){
//
//            }
////tant que le fichier n'est pas terminé...
//            while (!feof($file)) {
//on récupère chaque ligne
