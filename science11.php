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
<h4 class="text-center">Science Class - Grade 11 - Students Details</h4>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4> <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>INDEX NUMBER</th>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date Joined</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT learn.indexNumber,student.* 
                                            FROM learn,student 
                                            WHERE sbId= '201' AND learn.indexNumber=student.indexNumber " ;
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $learn)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $learn['indexNumber']; ?></td>
                                                <td><?= $learn['stName']; ?></td>
                                                <td><?= $learn['email']; ?></td>
                                                <td><?= $learn['phone']; ?></td>
                                                <td><?= $learn['dateJoined']; ?></td>
                                                
                                                <td>
                                                <a href="parent-view.php?id=<?=$learn['indexNumber']; ?>" class="btn btn-info btn-sm">View Parent</a>
                                                <a href="student-edit.php?id=<?= $learn['stId']; ?>" class="btn btn-success btn-sm">Edit Student </a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_scienceStudent" value="<?=$learn['indexNumber'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
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