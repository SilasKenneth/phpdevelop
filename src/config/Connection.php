<?php
namespace App\Config;

use PDO;

trait Connection
{
    use Env;
    protected $username;
    protected $host;
    protected $password;
    protected $dsn;
    protected $dbname;
    protected $port;
    protected $conn = null;
    public function setUp()
    {
        $driver = $this->DRIVER ? $this->DRIVER : "pgsql";
        $this->Env();
        $this->configureEnv();
        $this->dsn = "{$driver}:host={$this->host};port={$this->port};dbname={$this->dbname}";

        try{
            $conn = new PDO($this->dsn, $this->username, $this->password, $this->DB_OPTIONS);
            $this->conn = $conn;
        }catch (\Exception $exception){
            print_r($exception->getMessage());
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