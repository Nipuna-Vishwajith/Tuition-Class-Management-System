6<?php
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

    <title>admin-home</title>
</head>
<body>
<h1 class="text-center">PRINCETON EDUCATION INSTITUTE</h1>  
<h1 class="text-center">Home Page - Admin</h1>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Press to add a new student
                            <a href="student-create.php" class="btn btn-primary float-end">Add new Student</a>
                        </h4>
                        </div>
                        <div class="card-header">
                        <h4>press to view all students details and edit 
                            <a href="index.php" class="btn btn-primary float-end">view students list</a>
                        </h4>
                        </div>
                        <div class="card-header">
                        <h4>press to view all parernts details
                            <a href="parent-view.php" class="btn btn-primary float-end">view parents list</a>
                        </h4>
                        </div>
                        <div class="card-header">
                        <h4>press to view time tables
                            <a href="admin-timetable.php" class="btn btn-primary float-end">view time table</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>press to add monthly payments
                            <a href="payments.php" class="btn btn-primary float-end">add payments</a>
                        </h4>
                    </div>
                    <div class="card-header">
                    <h4>press to view teachers list
                            <a href="admin-teacher.php" class="btn btn-primary float-end">view teacher list</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <h4><a href="welcome.php" class="btn btn-danger">Back</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>