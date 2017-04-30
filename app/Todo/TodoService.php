<?php

namespace App\Todo;

use App\Todo\Persistence\Entity\SimpleTodo;
use App\Todo\Persistence\TodoRepository;

/**
 * Created by PhpStorm.
 * User: FatSquirrel
 * Date: 4/30/2017
 * Time: 11:14 AM
 */
class TodoService
{

    protected $todoRepository;

    /**
     * TodoService constructor.
     *
     * @param TodoRepository $todoRepository
     */
    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    /**
     * Return all existing SimpleTodos
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return $this->todoRepository->findAll();
    }

    /**
     * Create new SimpleTodo
     *
     * @param SimpleTodo $simpleTodo
     * @return bool
     */
    public function save(SimpleTodo $simpleTodo)
    {
        return $this->todoRepository->save($simpleTodo);
    }

    /**
     * Delete an existing SimpleTodo
     *
     * @param SimpleTodo $simpleTodo
     * @return bool|null
     */
    public function delete(SimpleTodo $simpleTodo)
    {
        return $this->todoRepository->delete($simpleTodo);
    }

    public function findById($id)
    {
        return $this->todoRepository->findById($id);
    }
}