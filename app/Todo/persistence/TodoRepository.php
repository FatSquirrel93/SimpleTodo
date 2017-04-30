<?php

namespace App\Todo\Persistence;

use App\Todo\Persistence\Entity\SimpleTodo;

/**
 * Created by PhpStorm.
 * User: FatSquirrel
 * Date: 4/30/2017
 * Time: 11:09 AM
 */
class TodoRepository
{
    /**
     * Returns a collection containing all existing SimpleTodos
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function findAll()
    {
        return SimpleTodo::orderByDesc("id")->get();
    }

    /**
     * Persist a new SimpleTodo
     *
     * @param SimpleTodo $todo
     * @return bool
     */
    public function save(SimpleTodo $todo)
    {
        return $todo->save();
    }

    /**
     * Delete an existing SimpleTodo from the database
     *
     * @param SimpleTodo $todo
     * @return bool|null
     * @throws \Exception
     */
    public function delete(SimpleTodo $todo)
    {
        return $todo->delete();
    }

    /**
     * Return a single SimpleTodo with given id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return SimpleTodo::findOrFail($id);
    }
}