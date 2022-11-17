<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM student WHERE student.indexNumber='$student_id' ";
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

if(isset($_POST['delete_mathsStudent']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_mathsStudent']);


    $query2 = "UPDATE attend SET  maths='no' WHERE indexNumber=$student_id";
    $query2_run = mysqli_query($con, $query2);

    $query = "DELETE FROM learn WHERE learn.indexNumber='$student_id' AND learn.sbId='200' ";
    $query_run = mysqli_query($con, $query);
   

   

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted from Maths Class Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted from the Maths Class";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['delete_scienceStudent']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_scienceStudent']);

    $query2 = "UPDATE attend SET  science='no' WHERE indexNumber=$student_id";
    $query2_run = mysqli_query($con, $query2);

    $query = "DELETE FROM learn WHERE learn.indexNumber='$student_id' AND learn.sbId='201' ";
    $query_run = mysqli_query($con, $query);
   
   

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted from Science Class Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted from the Science Class";
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
    //$subject = mysqli_real_escape_string($con, $_POST['subject']);
    $dateJoined = mysqli_real_escape_string($con, date('Y-m-d',strtotime($_POST['dateJoined'])));

    $query = "UPDATE student SET stName='$name', email='$email', phone='$phone',   dateJoined='$dateJoined' WHERE stId='$student_id' ";
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

//////////////////////////////////////////////
if(isset($_POST['add_parent']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
   
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $gName = mysqli_real_escape_string($con, $_POST['gName']);
    $gOccupation = mysqli_real_escape_string($con, $_POST['gOccupation']);
    $gRelation = mysqli_real_escape_string($con, $_POST['gRelation']);

    $query = "INSERT INTO guardian (gName,name,indexNumber,gOccupation,gRelation) VALUES ('$gName','$name','$student_id','$gOccupation','$gRelation')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Parent added Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Parent not Added";
        header("Location: index.php");
        exit(0);
    }
}/////////////////////////////////////////////////////////////



////////////////////////////////////////
if(isset($_POST['add_maths']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['add_maths']);
   
    $query = "INSERT INTO learn (sbId,indexnumber) VALUES ('200','$student_id')";
    $query_run = mysqli_query($con, $query);


    $query1 = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$student_id','200','800.00','pending','pending','pending','pending')";
    $query1_run = mysqli_query($con, $query1);

    $query2 = "UPDATE attend SET  maths='yes' WHERE indexNumber=$student_id";
    $query2_run = mysqli_query($con, $query2);

    if($query_run)
    {
        $_SESSION['message'] = "Student added to the Maths Class Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student not Added to the Maths Class";
        header("Location: index.php");
        exit(0);
    }
}//////////////////////////////////////

if(isset($_POST['add_science']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['add_science']);
   
    $query = "INSERT INTO learn (sbId,indexnumber) VALUES ('201','$student_id')";
    $query_run = mysqli_query($con, $query);

    

    $query1 = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$student_id','201','800.00','pending','pending','pending','pending')";
    $query1_run = mysqli_query($con, $query1);

    $query2 = "UPDATE attend SET  science='yes' WHERE indexNumber=$student_id";
    $query2_run = mysqli_query($con, $query2);

    if($query_run)
    {
        $_SESSION['message'] ="Student added to the Science Class Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student not Added to the Science Class";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $indexNumber = mysqli_real_escape_string($con, $_POST['indexNumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $dateJoined = mysqli_real_escape_string($con, date('Y-m-d',strtotime($_POST['dateJoined'])));
    //$gName = mysqli_real_escape_string($con, $_POST['gName']);

    $query = "INSERT INTO student (stName,indexNumber,email,phone,dateJoined) VALUES ('$name','$indexNumber','$email','$phone','$dateJoined')";
    $query_run = mysqli_query($con, $query);

    $query3 = "INSERT INTO attend (indexNumber,maths,science) VALUES ('$indexNumber','no','no')";
    $query3_run = mysqli_query($con, $query3);
    
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

   
    $day = mysqli_real_escape_string($con, $_POST['day']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    

    $query = "UPDATE subject SET  day='$day', time='$time' WHERE sbId='$timetable_id' ";
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



if(isset($_POST['update_teacher']))
{
    $teacher_id = mysqli_real_escape_string($con, $_POST['teacher_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    

    $query = "UPDATE teacher SET name='$name', email='$email', tp='$phone' WHERE tId='$teacher_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Teacher info Updated Successfully";
        header("Location: admin-teacher.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "teacher info not Updated";
        header("Location: admin-teacher.php");
        exit(0);
    }
}

if(isset($_POST['save_teacher']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $tp = mysqli_real_escape_string($con, $_POST['tp']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $query = "INSERT INTO teacher (name,tp,email) VALUES ('$name','$tp','$email')";

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

    if(isset($_POST['delete_payment']))
{
    //$payment_id = mysqli_real_escape_string($con, $_POST['delete_payment']);
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
    

    $indexNumber = mysqli_real_escape_string($con, $_POST['indexNumber']);
    $sbId = mysqli_real_escape_string($con, $_POST['sbId']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);
    
    $month = mysqli_real_escape_string($con, $_POST['month']);

if($month=="January"){
    //$query = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$indexNumber','$sbId','$amount','$month','pending','pending','pending')";
    $query = "UPDATE payments SET indexNumber='$indexNumber', amount='$amount', january='Paid+$amount' WHERE indexNumber='$indexNumber' AND sbId='$sbId'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "january payment Updated Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "january payment Not Updated";
        header("Location: payments.php");
        exit(0);
    }
}
if($month=="February")
{
    $query = "UPDATE payments SET indexNumber='$indexNumber' , amount='$amount', february='Paid+$amount' WHERE indexNumber='$indexNumber' AND sbId='$sbId'";
    //$query = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$indexNumber','$sbId','$amount','pending','$month','pending','pending')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "February payment Updated Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "February payment Not Updated";
        header("Location: payments.php");
        exit(0);
    }

}

if($month=="March")
{
    
    $query = "UPDATE payments SET indexNumber='$indexNumber' , amount='$amount', march='Paid+$amount' WHERE indexNumber='$indexNumber' AND sbId='$sbId'";
    //$query = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$indexNumber','$sbId','$amount','pending','pending','$month','pending')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "March payment Updated Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "March payment Not Updated";
        header("Location: payments.php");
        exit(0);
    }}

if($month=='April')
{
    $query = "UPDATE payments SET indexNumber='$indexNumber' , amount='$amount', april='Paid+$amount' WHERE indexNumber='$indexNumber' AND sbId='$sbId'";
   // $query = "INSERT INTO payments (indexNumber,sbId,amount,january,february,march,april) VALUES ('$indexNumber','$sbId','$amount','pending','pending','pending','$month')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "April payment Updated Successfully";
        header("Location: payments.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "April payment Not Updated";
        header("Location: payments.php");
        exit(0);
    }

}
////////////////////////////////////////////////////////////////////////////////////////////
}
?>