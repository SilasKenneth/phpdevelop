<?php
namespace App\Models;
use App\Config\Connection;

trait Model{
    use Connection;
    protected $tableName = "table";
    protected $offset = 0;
    protected $limit = 20;
    protected $records = Array();
    public function all($offset, $limit){
        try{
        }catch (\Exception $ex){
            return new \ArrayObject([]);
        }
    }

    public function setConnections()
    {
        $this->setUp();
    }

}
