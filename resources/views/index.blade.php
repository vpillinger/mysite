@extends('layouts.app')

@section('header')
	<title>Vincent Pillinger</title>
@endsection

@section('content')
	<div class="container">
		<div class="row">
	    	<h1><u>A Collection of Random Projects</u></h1>
		</div>
		<div class="row">
			<p> This site serves to display a collection of my random projects. Here you will find some PHP, Javascript, and HTML examples. There are also descriptions and links to source code for non-web projects that I am working on. </p>
		</div>
		<div class="row">
			<ul>
				<li><b><u>PHP Examples</u></b>
					<ul>
						<li><a href="mazeGenerator">Maze Generator</a></li>
					</ul>
				</li>

				<li><b><u>Python Projects</u></b>
					<ul>
						<li> My Game </li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
@endsection