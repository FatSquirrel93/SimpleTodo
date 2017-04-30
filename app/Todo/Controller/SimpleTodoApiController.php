<?php

namespace App\Todo\Controller;

use App\Http\Controllers\Controller;
use App\Todo\Persistence\Entity\SimpleTodo;
use Illuminate\Http\Request;
use App\Todo\TodoService;

/**
 * Created by PhpStorm.
 * User: FatSquirrel
 * Date: 4/30/2017
 * Time: 11:25 AM
 */
class SimpleTodoApiController extends Controller
{

    protected $todoService;

    /**
     * SimpleTodoApiController constructor
     * @param $todoService
     */
    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }


    /**
     * Return a collection containing all SimpleTodos
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->todoService->findAll();
    }

    /**
     * Create a new SimpleTodo from given request
     *
     * @param Request $request
     * @return bool
     */
    public function create(Request $request)
    {
        $todo = SimpleTodo::create($request->all());
        return response()->json($this->todoService->save($todo));
    }

    /**
     * Delete a SimpleTodo from given request
     *
     * @param $id
     * @return bool|null
     */
    public function delete($id)
    {
        $todo = $this->todoService->findById($id);
        return response()->json($this->todoService->delete($todo));
    }
}