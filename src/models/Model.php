<?php
namespace App\Models;
use App\Config\Connection;

trait Model{

    use Connection;
    protected $tableName = 'table';
    protected $offset = 0;/* @var */
    protected $limit = 20;// @var
    protected $records = array();
    public function all(int $offset, int $limit): void {
        throw new \Exception("{$offset} to $limit");
    }
    public function setConnections(): void
    {
        $this->setUp();
    }

}
