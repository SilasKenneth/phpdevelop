<?php
$ROOT = realpath(dirname(__FILE__)."/../../");
require_once "{$ROOT}/autoload.php";
use PHPUnit\Framework\TestCase;
use App\Controller\StudentController;

class StudentTest extends TestCase
{
    private $controller;
    public function setUp(): void
    {
        parent::setUp();
        $this->controller = new StudentController();
    }

    public function testCanGetData(): void
    {
        print_r($this->controller->index());
        $this->assertNotEquals($this->controller->index()->count(), 0);
    }

}