<?php
namespace App\Models;

use PDOException as PDOException;
use PDO;

class StudentModel
{
    use Model;
    public function __construct()
    {
        $this->tableName = "students";
        $this->setConnections();
    }

    public function all(int $offset, int $limit){
        try{
            $sql = "SELECT * from {$this->tableName} LIMIT {$limit} OFFSET {$offset}";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $fetched = $query->fetchAll(PDO::FETCH_ASSOC);
            return new \ArrayObject($fetched);
        }catch (PDOException $ex){
            print_r($ex);
            throw new PDOException("An error occured processing your request");
        }
    }
}