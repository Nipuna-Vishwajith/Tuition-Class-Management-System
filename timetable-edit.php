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

    <title>Timetable Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="admin-timetable.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $timetable_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM timetables WHERE id='$timetable_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $timetable = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="timetable_id" value="<?= $timetable['id']; ?>">

                                    <div class="mb-3">
                                        <label>Subject and Grade</label>
                                        <input type="text" name="subjectGrade" value="<?=$timetable['subjectGrade'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Day</label>
                                        <input type="text" name="day" value="<?=$timetable['day'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Time</label>
                                        <input type="text" name="time" value="<?=$timetable['time'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Teacher</label>
                                        <input type="text" name="teacher" value="<?=$timetable['teacher'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_timetable" class="btn btn-primary">
                                            Update Timetable
                                        </button>
                                    </div>

                                </form>
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