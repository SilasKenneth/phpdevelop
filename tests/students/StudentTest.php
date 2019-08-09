<?php
use PHPUnit\Framework\TestCase;
use App\Controllers\Users\StudentController;

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
        $this->assertNotEquals($this->controller->index()->count(), 0);
    }

    public function testReturnType(): void {
        $studentClass = get_class($this->controller->index());
        $this->assertEquals($studentClass, "ArrayObject");
    }

    public function testCanThroughException(): void{
        $this->expectException(Exception::class);
        try{
            echo (10 /"op");
        } catch (Exception $ex){
            throw new Exception();
        }
    }

}