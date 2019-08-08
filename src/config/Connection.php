<?php
namespace App\Config;

use PDO;

trait Connection
{
    protected $username;
    protected $host;
    protected $password;
    protected $dsn;
    protected $dbname;
    protected $port;
    protected $conn = null;
    public function setUp()
    {
        $driver = DRIVER ? DRIVER : "pgsql";
        $this->configureEnv();
        $this->dsn = "{$driver}:host={$this->host};port={$this->port};dbname={$this->dbname}";

        try{
            $conn = new PDO($this->dsn, $this->username, $this->password, DB_OPTIONS);
            $this->conn = $conn;
        }catch (\Exception $ex){
            print_r($ex->getMessage());
        }
    }
    private function configureEnv(){
        $this->host = getenv("DB_HOST");
        $this->dbname = getenv("DB_NAME");
        $this->port = getenv("DB_PORT");
        $this->username = getenv("DB_USERNAME");
        $this->password = getenv("DB_PASSWORD");
    }
}