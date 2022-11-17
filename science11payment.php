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

    <title>Maths Class - Grade 11</title>
</head>
<body>
<h4 class="text-center">PRINCETON EDUCATION INSTITUTE</h4>  
<h4 class="text-center">Maths Class - Grade 11 - Students payment Details</h4>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4> <a href="payments.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>STUDENT ID</th>
                                    <th>Student Name</th>
                                    <th>January</th>
                                    <th>February</th>
                                    <th>March</th>
                                    <th>April</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 
                                    $query = "SELECT payments.*,student.stName FROM student,payments WHERE student.indexNumber = payments.indexNumber AND payments.sbId='201' " ;
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $payment)
                                        {
                                            ?>
                                            <tr>
                                                
                                                <td><?= $payment['indexNumber']; ?></td>
                                                <td><?= $payment['stName']; ?></td>
                                                <td><?= $payment['january']; ?></td>
                                                <td><?= $payment['february']; ?></td>
                                                <td><?= $payment['march']; ?></td>
                                                <td><?= $payment['april']; ?></td>
                                            
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                  
                    
                                    

                                 
                                     
                                ?>
                                
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>