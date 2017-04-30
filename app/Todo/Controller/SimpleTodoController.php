<?php

namespace App\Todo\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

/**
 * Created by PhpStorm.
 * User: FatSquirrel
 * Date: 4/30/2017
 * Time: 11:20 AM
 */
class SimpleTodoController extends Controller
{
    /**
     * Return the default view
     */
    public function showIndexView()
    {
        return View::make('simpletodo');
    }
}