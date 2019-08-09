<?php
namespace App\Config;
use Dotenv\Dotenv;

trait Env{
    use Define;
    public function Env()
    {
        $this->Define();
        $dotenv = Dotenv::create($this->ROOT);
        $dotenv->load();
    }
}