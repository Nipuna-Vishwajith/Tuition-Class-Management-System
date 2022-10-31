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
                    <!--First payment of a student-->
                    <div class="card-body">
                        <form action="code.php" method="POST">
<h5>If a newly added student please use this form for the first payment</h5>
                            <div class="mb-3">
                                <label>Student Id</label>
                                <input type="text" name="stId" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Month</label>
                                <input type="text" name="month" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_payment" class="btn btn-primary">Save Payment</button>
                            </div>
                        </form>
                    </div>
</div>

                      <!--Normal payment of a student-->
                      <h5></h5>
                      <div class="card">
                      <div class="card-body">
                        <form action="code.php" method="POST">
                        <h5></h5>
                        <h5></h5>
<h5>Please use this form to add a payment of an ordinary student</h5>
                            <div class="mb-3">
                                <label>Student Id</label>
                                <input type="text" name="stId" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Month</label>
                                <input type="text" name="month" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="mb-3"> 
                                <button type="submit" name="update_payment" class="btn btn-primary">Update Payment</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-header">
                    <h4>View Maths Class Students payment details 
                            <a href="maths11payment.php" class="btn btn-info float-end">Maths Class</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>View Sinhala Class Students payment details
                            <a href="sinhala11payment.php" class="btn btn-info float-end">Sinhala class</a>
                        </h4>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>