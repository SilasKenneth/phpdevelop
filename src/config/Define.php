<?php
namespace App\Config;

use PDO;
trait Define {
    protected $ROOT = null;
    protected $DB_OPTIONS = null;
    protected $DRIVER = null;
    public function Define()
    {
        $this->ROOT = realpath(dirname(__FILE__)."/../../");
        $this->DB_OPTIONS = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        $this->DRIVER = getenv("DRIVER");
    }
}
