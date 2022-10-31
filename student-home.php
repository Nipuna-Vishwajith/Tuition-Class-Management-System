<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>student-home</title>
</head>
<body>
<h1 class="text-center">PRINCETON EDUCATION INSTITUTE</h1>  
<h1 class="text-center">Home Page - Student </h1>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>Press to register 
                            <a href="student-create.php" class="btn btn-primary float-end">Register</a>
                        </h4>
                    </div>

                    <div class="card-header">
                        <h4>press to view time tables
                            <a href="student-timetable.php" class="btn btn-primary float-end">time tables</a>
                        </h4>
                    </div>

                    <div class="card-header">
                        <h4><a href="welcome.php" class="btn btn-danger">Back</a>
                        </h4>
                    </div>
                    
                    
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


                        