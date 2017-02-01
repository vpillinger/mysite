@extends('layouts.app')

@section('header')
<title>Maze Generator</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
                <h1><u>Maze Generator</u></h1>
        </div>

        <div class="row">
            <p>
                This page generates mazes using the <a href="http://weblog.jamisbuck.org/2011/1/27/maze-generation-growing-tree-algorithm">
                growing tree maze generation algorithm</a>. A flexible algorithm that allows mazes of many different types to be created
                by simply changing the way that cells are selected from the a set. 
                <br>
                Click below to generate a maze.
            </p>
            <button id="maze-generate">Generate Maze</button>
        </div>
       
        <div class="row">
            <div id="maze-display" class="col-sm-6 maze__display"></div>
            <div id="maze-description" class="col-sm-6"><!-- Maze Ratings here--></div>
        </div>
    </div>
@endsection

@section('scripts')
<!-- turn this into a vue component -->
    <script> 
        function convertMazetoHTML(maze){
            let html = "";

            for(row of maze){
                html += "&nbsp;_";
            }
            html += "<br />";

            for(row = 0; row < maze.length; row++){
                html += "|";
                for (column = 0; column < maze[row].length; column++){     
                    let south_neighbor = JSON.stringify([row + 1, column]);
                    let east_neighbor = JSON.stringify([row, column + 1]);
                    let connects_south = false;
                    let connects_east = false
                    let cell = maze[row][column];
                    console.log(cell);
                    for(n = 0; n < cell.length; n++) {
                        let neighbor = cell[n];
                        if(south_neighbor === JSON.stringify(neighbor)){
                            connects_south = true;
                        }
                        if(east_neighbor === JSON.stringify(neighbor)){
                            connects_east = true;
                        }
                    }
                    if (connects_south){
                        html += "&nbsp;";
                    }else {
                        html += "_";
                    }
                    if (connects_east){
                        html += "&nbsp;";
                    }else {
                        html += "|";
                    }
                }
                html += "<br />";
            }
            return html;   
        }

        $("#maze-generate").click(function(e){
            axios.post("/").then(function(response){
                $("#maze-display").html(
                    convertMazetoHTML(response.data)
                );
            });    
        });
    </script>
@endsection