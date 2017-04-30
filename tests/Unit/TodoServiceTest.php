<?php

namespace Tests\Unit;

use App\Todo\Persistence\Entity\SimpleTodo;
use App\Todo\Persistence\TodoRepository;
use App\Todo\TodoService;
use Tests\TestCase;

class TodoServiceTest extends TestCase
{

    protected $sut;
    protected $mock;

    /**
     * @before
     */
    public function setup()
    {
        $this->mock = \Mockery::mock(TodoRepository::class);
        $this->sut = new TodoService($this->mock);
    }

    public function testFindAll_willCallRepository_all()
    {
        $mockedTodo = \Mockery::mock(SimpleTodo::class);

        $this->mock->shouldReceive('findAll')->once()->andReturn([$mockedTodo]);

        $this->assertEquals([$mockedTodo], $this->sut->findAll());
    }

    public function testSave_willCallRepository_save_withGivenParameters()
    {
        $mockedTodo = \Mockery::mock(SimpleTodo::class);

        $this->mock->shouldReceive('save')->once()->with($mockedTodo)->andReturn(true);

        $this->assertTrue($this->sut->save($mockedTodo));
    }

    public function testDelete_willCallRepository_withGivenParameters()
    {
        $mockedTodo = \Mockery::mock(SimpleTodo::class);

        $this->mock->shouldReceive('delete')->once()->with($mockedTodo)->andReturn(true);

        $this->assertTrue($this->sut->delete($mockedTodo));
    }

    public function testFindById_willCallRepository_withGivenId()
    {
        $id = 2654;
        $mockedTodo = \Mockery::mock(SimpleTodo::class);

        $this->mock->shouldReceive('findById')->once()->with($id)->andReturn($mockedTodo);

        $this->assertEquals($mockedTodo, $this->sut->findById($id));
    }
}
