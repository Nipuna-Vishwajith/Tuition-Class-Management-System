<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    //$query1 = "DELETE FROM guardians WHERE students.id='$student_id' AND students.id=guardians.pId ";
    $query_run = mysqli_query($con, $query);
   // $query1_run = mysqli_query($con, $query1);
   

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $dateJoined = mysqli_real_escape_string($con, date('Y-m-d',strtotime($_POST['dateJoined'])));

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', subject='$subject',  dateJoined='$dateJoined' WHERE id='$student_id' ";
   // $query1 = "UPDATE guardians SET pName='$pName',sName='$name',subject='$subject',pOccupation='$pOccupation', pRelation='$pRelation' ";
    $query_run = mysqli_query($con, $query);
   // $query1_run = mysqli_query($con, $query1);
    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }



}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
   // $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $pName = mysqli_real_escape_string($con, $_POST['pName']);
    $pOccupation = mysqli_real_escape_string($con, $_POST['pOccupation']);
    $pRelation = mysqli_real_escape_string($con, $_POST['pRelation']);
    $dateJoined = mysqli_real_escape_string($con, date('Y-m-d',strtotime($_POST['dateJoined'])));

    //$query = "INSERT INTO student (name,email,phone,subject,dateJoined) VALUES ('$name','$email','$phone','$subject','$dateJoined')";
    //$query1 = "INSERT INTO guardians (pName,sName,subject,pOccupation,pRelation) VALUES ('$pName','$name','$subject','$pOccupation','$pRelation')";
    $query = "INSERT INTO student (stName) VALUES ('$name')";
    $query_run = mysqli_query($con, $query);

    $query1 = "SELECT stId  FROM student WHERE student.stName='{$name}'";
    $query1_run = mysqli_query($con, $query1);

    //$query2= "INSERT INTO guardian (stId,gName) VALUES ('$query1','$pName')";
    //$query2= "INSERT INTO guardian (gName) VALUES ('$pName')";
    //$query20_run = mysqli_query($con, $query2);

    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: index.php");
        exit(0);
    }

   
    if($query1_run)
    {
        $_SESSION['message'] = "link Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "link not Created";
        header("Location: index.php");
        exit(0);
    }

    if($query2_run)
    {
        $_SESSION['message'] = "Parent Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Parent Not Created";
        header("Location: index.php");
        exit(0);
    }
   
}

if(isset($_POST['save_timetable']))
{
    $subjectGrade = mysqli_real_escape_string($con, $_POST['subjectGrade']);
    $day = mysqli_real_escape_string($con, $_POST['day']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $teacher = mysqli_real_escape_string($con, $_POST['teacher']);

    $query = "INSERT INTO timetables (subjectGrade,day,time,teacher) VALUES ('$subjectGrade','$day','$time','$teacher')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Timetable Created Successfully";
        header("Location: admin-timetable.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "timetable Not Created";
        header("Location: admin-timetable.php");
        exit(0);
    }
}

if(isset($_POST['update_timetable']))
{
    $timetable_id = mysqli_real_escape_string($con, $_POST['timetable_id']);

    $subjectGrade = mysqli_real_escape_string($con, $_POST['subjectGrade']);
    $day = mysqli_real_escape_string($con, $_POST['day']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $teacher = mysqli_real_escape_string($con, $_POST['teacher']);

    $query = "UPDATE timetables SET subjectGrade='$subjectGrade', day='$day', time='$time', teacher='$teacher' WHERE id='$timetable_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "timetable Updated Successfully";
        header("Location: admin-timetable.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Timetable Not Updated";
        header("Location: admin-timetable.php");
        exit(0);
    }

}

if(isset($_POST['delete_timetable']))
{
    $timetable_id = mysqli_real_escape_string($con, $_POST['delete_timetable']);

    $query = "DELETE FROM timetables WHERE id='$timetable_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Timetable Deleted Successfully";
        header("Location: admin-timetable.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Timetable Not Deleted";
        header("Location: admin-timetable.php");
        exit(0);
    }
}

if(isset($_POST['delete_teacher']))
{
    $teacher_id = mysqli_real_escape_string($con, $_POST['delete_teacher']);

    $query = "DELETE FROM teachers WHERE tid='$teacher_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Teacher Deleted Successfully";
        header("Location: admin-teacher.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Teacher Not Deleted";
        header("Location: admin-teacher.php");
        exit(0);
    }
}

if(isset($_POST['save_teacher']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $tp = mysqli_real_escape_string($con, $_POST['tp']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "INSERT INTO teachers (name,tp,email) VALUES ('$name','$tp','$email')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Teacher Created Successfully";
        header("Location: admin-teacher.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Teacher Not Created";
        header("Location: admin-teacher.php");
        exit(0);
    }
}

if(isset($_POST['save_payment']))
{
    $stId = mysqli_real_escape_string($con, $_POST['stId']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $month = mysqli_real_escape_string($con, $_POST['month']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
   

    $query = "INSERT INTO payments (stId,amount,name,month,subject) VALUES ('$stId','$amount','$name','$month','$subject')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Payment added Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Payment Not Added";
        header("Location: payments.php");
        exit(0);
    }}


    if(isset($_POST['delete_payment']))
{
    $payment_id = mysqli_real_escape_string($con, $_POST['delete_payment']);
    $query = "DELETE FROM payments WHERE pytId='$payment_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "payment Deleted Successfully";
        header("Location: maths11payment.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Payment Not Deleted";
        header("Location: maths11payment.php");
        exit(0);
    }
}

/////update payment///////////////////////////////////////////////////////////////////////
if(isset($_POST['update_payment']))
{
    $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);

    $stId = mysqli_real_escape_string($con, $_POST['stId']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    $month = mysqli_real_escape_string($con, $_POST['month']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);

    $query = "INSERT INTO payments (stId,amount,name,month,subject) VALUES ('$stId','$amount','$name','$month','$subject')";
    //$query = "UPDATE payments SET stId='$stId', name='$name', amount='$amount', month='$month' WHERE payments.stId='$stId' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "payment Updated Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "payment Not Updated";
        header("Location: payments.php");
        exit(0);
    }

}
////////////////////////////////////////////////////////////////////////////////////////////

?>