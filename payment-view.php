<?php
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

    <title>Payment History View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Payment details history
                            <a href="payments.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php



                        if(isset($_POST['indexNumber']))
                        {
                           
                           $student_id = mysqli_real_escape_string($con, $_POST['indexNumber']); 
                           $sbId = mysqli_real_escape_string($con, $_POST['sbId']);

                           $query = "SELECT payments.*,student.* FROM payments,student WHERE payments.indexNumber='$student_id' AND student.indexNumber='$student_id' AND payments.sbId='$sbId' ";
                            $query_run = mysqli_query($con, $query);
                                
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $payment = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <p class="form-control">
                                            <?=$payment['stName'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Index Number </label>
                                        <p class="form-control">
                                            <?=$payment['indexNumber'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>Date Joined </label>
                                        <p class="form-control">
                                            <?=$payment['dateJoined'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>January</label>
                                        <p class="form-control">
                                            <?=$payment['january'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>February</label>
                                        <p class="form-control">
                                            <?=$payment['february'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>March</label>
                                        <p class="form-control">
                                            <?=$payment['march'];?>
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <label>April</label>
                                        <p class="form-control">
                                            <?=$payment['april'];?>
                                        </p>
                                    </div>

                                    
                                    
                                    
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>