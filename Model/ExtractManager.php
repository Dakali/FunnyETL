<?php
namespace Model;
require_once ("Manager.php");

class ExtractManager extends Manager{

    protected $xtracted ;

    public function xtractDatas($filename){

        //instanciation de l'objet PDO
        $con = $this->dbConnect();
        //ouverture du fichier en mode 'r' read
        $file = fopen($filename,'r');

        //boucle s'executant tant que le fichier n'est pas terminé
        while(!feof($file)){
            //fgets pour récuperer une ligne
            $singleLine = fgets($file);
            //explode pour casser la ligne en tableau dont les éléments sont séparés par ";"
            $lineTab = explode(";",$singleLine);

            //list() permet de créer les variable et les assigner aux éléments du tableau précédemment concu avec explode()
            list($matricule,$nom,$niveau) = $lineTab;

            //insertion basique en bd avec requête préparée
            $r = $con->prepare("INSERT INTO etudiant(matricule,nom,niveau) VALUES(:mat,:nom,:niv)");
            $r->bindValue(':nom',$nom);
            $r->bindValue(':niv',$niveau);
            $r->bindValue(':mat',$matricule);

            $r->execute();
            $this->setXtracted($r);


        }
        fclose($file);
        return $this->xtracted;

    }

    public function getXtractedDatas(){
        $con = $this->dbConnect();

        $r = $con->query("SELECT * FROM etudiant ORDER BY nom");
        $r->execute();

        return $r;
    }

    public function setXtracted($xtracted){
        if (is_bool($xtracted))
        $this->$xtracted = $xtracted;
    }

}