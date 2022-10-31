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
                                    <th>PAYMENT ID</th>
                                    <th>STUDENT ID</th>
                                    <th>Student Name</th>
                                    <th>January</th>
                                    <th>February</th>
                                    <th>March</th>
                                    <th>April</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 
                                    $query = "SELECT payments.pytId,payments.stId,payments.name,payments.amount,payments.month FROM students,payments WHERE students.id = payments.stId AND students.subject='Maths' AND payments.month='January' AND payments.subject='Maths' " ;
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $payment)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $payment['pytId']; ?></td>
                                                <td><?= $payment['stId']; ?></td>
                                                <td><?= $payment['name']; ?></td>
                                                <td><?= $payment['amount']; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_payment" value="<?=$payment['pytId'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                  
                    //February month
                                    $query1 = "SELECT payments.pytId,payments.stId,payments.name,payments.amount,payments.month FROM students,payments WHERE students.id = payments.stId AND students.subject='Maths' AND payments.month='February' AND payments.subject='Maths' " ;
                                    $query1_run = mysqli_query($con, $query1);
                                    if(mysqli_num_rows($query1_run) > 0)
                                    {
                                        foreach($query1_run as $payment)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $payment['pytId']; ?></td>
                                                <td><?= $payment['stId']; ?></td>
                                                <td><?= $payment['name']; ?></td>
                        
                                                <td></td>
                                                <td><?= $payment['amount']; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_payment" value="<?=$payment['pytId'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    
                                    

                                    //March month
                                    $query2 = "SELECT payments.pytId,payments.stId,payments.name,payments.amount,payments.month FROM students,payments WHERE students.id = payments.stId AND students.subject='Maths' AND payments.month='March' AND payments.subject='Maths'  " ;
                                    $query2_run = mysqli_query($con, $query2);
                                    if(mysqli_num_rows($query2_run) > 0)
                                    {
                                        foreach($query2_run as $payment)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $payment['pytId']; ?></td>
                                                <td><?= $payment['stId']; ?></td>
                                                <td><?= $payment['name']; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td><?= $payment['amount']; ?></td>
                                                <td></td>
                                                <td>
                                                <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_payment" value="<?=$payment['pytId'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    
                                    

                                     //April month
                                     $query3 = "SELECT payments.pytId,payments.stId,payments.name,payments.amount,payments.month FROM students,payments WHERE students.id = payments.stId AND students.subject='Maths' AND payments.month='April' AND payments.subject='Maths'  " ;
                                     $query3_run = mysqli_query($con, $query3);
                                     if(mysqli_num_rows($query3_run) > 0)
                                     {
                                         foreach($query3_run as $payment)
                                         {
                                             ?>
                                             <tr>
                                                 <td><?= $payment['pytId']; ?></td>
                                                 <td><?= $payment['stId']; ?></td>
                                                 <td><?= $payment['name']; ?></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                                 <td><?= $payment['amount']; ?></td>
                                                 <td>
                                                 <form action="code.php" method="POST" class="d-inline">
                                                         <button type="submit" name="delete_payment" value="<?=$payment['pytId'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                     </form>
                                                 </td>
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