<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maze;

class ExamplesController extends Controller
{

	public function index()
	{
		return view('index');
	}

	/**
	* Display the maze generator page.
	*
	* @return Response
	*/
	public function viewMaze()
	{
		return view('maze');
	}

	/**
	* Generate a maze and return a string representation (JSON) of that maze.
	*
	* @return string
	*/
	public function generateMaze(){
		return (string) Maze::generateMaze(10);
	}
}