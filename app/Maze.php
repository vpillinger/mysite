<?php

namespace App;

class Maze
{
	
	/**
	* Generate a new square Maze object of the given length. 
	*/
	public static function generateMaze($length){
		$directions = ['N' => [0,1], 'S' => [0,-1], 'E' => [1,0], 'W' => [-1,0]];
		$adjacency_list = array_fill(0, $length, array_fill(0, $length, null)); //keys have to be in correct order
		$cells = [[mt_rand(0, $length - 1), mt_rand(0, $length - 1)]];
		while(!empty($cells)){
			$cell_key = array_rand($cells);
			$cell = $cells[$cell_key];
			$x = $cell[0];
			$y = $cell[1];
			$cell_complete = true;
			shuffle($directions);
			foreach($directions as $direction){
				$new_x = $x + $direction[0];
				$new_y = $y + $direction[1];
				if(Maze::inBounds($new_x, $new_y, $length) && $adjacency_list[$new_x][$new_y] == null) {
					$adjacency_list[$x][$y][] = [$new_x, $new_y];
					$adjacency_list[$new_x][$new_y][] = [$x, $y];
					$cell_complete = false;
					$cells[] = [$new_x, $new_y];
					break;
				}
			}
			if($cell_complete){
				unset($cells[$cell_key]);
			}
		}

		return new Maze($adjacency_list);
	}

	private static function inBounds($x, $y, $length){
		return ($x >= 0 && $x < $length && $y >= 0 && $y < $length);
	}

	/**
	* A dictionary containing a 2D array that represent a cell's adjacencies.
	*/
	private $adjacency_list;

	public function __construct($adjacency_list){
		$this->adjacency_list = $adjacency_list;
	}

	public function __toString(){
		return json_encode($this->adjacency_list);
	}
}
