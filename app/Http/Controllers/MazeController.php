<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maze;

class MazeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
    	return view('maze');
    }

    /**
    * Generate a maze and return a string representation of that maze.
    *
    * @return string
    */
    public function generateMaze(){
    	return (string) Maze::generateMaze(10);
    }
}