<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- Set csrf token -->
        <script> 
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!}
        </script>
               <link rel="stylesheet" type="text/css" href="css/app.css">

        <title>Maze Generator</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <h1>Maze Generator</h1>
                </nav>
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
                <div id="maze-display" class="col-sm-6"></div>
                <div id="maze-description" class="col-sm-6"><!-- Maze Ratings here--></div>
            </div>
        </div>

        <script src="js/app.js"></script>
        <script>
            $("#maze-generate").click(function(e){
                axios.post("/").then(function(response){
                    $("#maze-display").html(
                        response.data.replace(/\n/g, "<br />")
                    );
                });    
            });
        </script>
    </body>
</html>