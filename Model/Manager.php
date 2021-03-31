<?php
namespace Model;

class Manager{
    protected $host = "Localhost";

    /**
     * @return string
     */
    public function Host(): string
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function Dbname(): string
    {
        return $this->dbname;
    }
    protected $dbname = "tpbi";


    protected function dbConnect()
    {
        try {
            $db = new \PDO('mysql:host='.$this->Host().';dbname='.$this->Dbname().'', 'root', '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            return $db;
        } catch (\PDOException $e) {
            die("Erreur:" . $e->getMessage());
        }
    }

}