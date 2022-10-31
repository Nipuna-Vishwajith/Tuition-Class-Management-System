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

    <title>WELCOME</title>
</head>
<body>
<h1 class="text-center">PRINCETON EDUCATION INSTITUTE</h1>  
<h1 class="text-center">WELCOME</h1>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Logging as a student
                            <a href="student-home.php" class="btn btn-primary float-end">Log as a student</a>
                        </h4>
                    </div>

                    <div class="card-header">
                        <h4>Logging as an admin
                            <a href="home.php" class="btn btn-primary float-end">Log as an admin</a>
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