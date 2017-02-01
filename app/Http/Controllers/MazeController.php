<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return "fool this is not implemented \n muahahahahah";
    }
}