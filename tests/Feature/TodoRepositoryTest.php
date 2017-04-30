<?php

namespace Tests\Feature;

use App\Todo\Persistence\Entity\SimpleTodo;
use App\Todo\Persistence\TodoRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TodoRepositoryTest extends TestCase
{

    use DatabaseMigrations;

    protected $sut;

    /**
     * @before
     */
    public function setUp()
    {
        $this->sut = new TodoRepository();
        parent::setUp();
        $this->createApplication();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function createTodo(){
        $tmp = new SimpleTodo();
        $tmp->todo = str_random();
        $tmp->save();

        return $tmp;
    }

    public function testFindAll_willReturnAll()
    {
        $this->createTodo();
        $this->createTodo();

        $actual = $this->sut->findAll();
        $this->assertEquals(2, count($actual));
    }

    public function testFindById_willReturnCorrect()
    {
        $todo = $this->createTodo();
        $todos = SimpleTodo::all();

        $actual = $this->sut->findById($todos[0]->id);
        $this->assertEquals($todo->todo, $actual->todo);
    }
}
