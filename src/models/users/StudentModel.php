<?php
namespace App\Models\Users;

use PDO;
use App\Models;

class StudentModel
{
    use Models\Model;
    public function __construct()
    {
        $this->tableName = "students";
        $this->setConnections();
    }

    public function all(int $offset, int $limit): \ArrayObject{
        try{
            $sql = "SELECT * from {$this->tableName} LIMIT {$limit} OFFSET {$offset}";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $fetched = $query->fetchAll(PDO::FETCH_ASSOC);
            return new \ArrayObject($fetched);
        }catch (\PDOException $exception){
            print_r($exception);
            throw new \PDOException('An error occurred processing your request');
        }
    }
}