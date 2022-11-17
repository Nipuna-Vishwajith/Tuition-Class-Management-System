<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Payments</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Payment Add 
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                
                    <!--upper form start -->
                     
                    <!--upper form end-->

                    <div class="card">
                        <div class="card-body">
                            <?php
                            if(isset($_POST['submit'])){
                                $indexNumber=$_POST["indexNumber"];
                            }
                            ?>

                    <form action="payment-view.php" method="POST">
                        <h5>Search the index number for past payments</h5>
                         <label>Student Index Number</label>
                        <input type="text" name="indexNumber" class="form-control">

                        <label>Class Id (Maths - 200 , Science - 201)</label>
                        <input type="text" name="sbId" class="form-control">

                    <input button type = "submit" value="Show Past Payments Details" name="submit"class="btn btn-primary"></button>
                        </form> 
                        </div>
                        </div>


                      <!--Normal payment of a student-->
                      <div class="row">
            <div class="col-md-12">
                <div class="card">
                      <div class="card-header">
                      <h5> </h5>
                      <div class="card">
                      <div class="card-body">
                        <form action="code.php" method="POST">
                        <h5></h5>
                        <h5></h5>
                        <h5>Add a new payment</h5>
                            <div class="mb-3">
                                <label>Student Index Number</label>
                                <input type="text" name="indexNumber" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Class ID (Maths - 200 , Science - 201)</label>
                                <input type="text" name="sbId" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Month</label>
                                <select name="month" class = "form-control">
                                    <option value="">--Select Month--</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                </select>
                            </div>
                            <!--<div class="mb-3">
                                <label>Month</label>
                                <input type="text" name="month" class="form-control">
                            </div>-->
                          
                            <div class="mb-3"> 
                                <button type="submit" name="update_payment" class="btn btn-primary">Update Payment</button>
                            </div>
                        </form>
                    </div>
                    </div></div>
                    <div class="card-header">
                    <h4>View Maths Class Students payment details 
                            <a href="maths11payment.php" class="btn btn-info float-end">Maths Class</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>View Sinhala Class Students payment details
                            <a href="science11payment.php" class="btn btn-info float-end">Science Class</a>
                        </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>