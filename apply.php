<?php
    include('navbar.php');

    $connection = mysqli_connect("localhost", "root", "", "assignment") or die(mysql_error());
    $internship_id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $emp_id = $_REQUEST['emp_id'];
    $sess_id = session_id();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    // $check_apply = "SELECT * FROM applied where stu_sess_id = '$sess_id'";

    $get_emp_details = "SELECT * FROM employer WHERE id='$emp_id'";
    $get_stu_details = "SELECT * FROM students WHERE email = '$email'";
    $student_result = mysqli_query($connection, $get_stu_details);

    if($student_result) {
        $extract_row = mysqli_fetch_assoc($student_result);
        extract($extract_row);
        $stu_id = $id;
    }
    $query = "INSERT INTO applied (stu_sess_id, stu_id, stu_name, internship_id, emp_id) VALUES ('$sess_id', $stu_id, '$name', '$internship_id', $emp_id)";
    $result = mysqli_query($connection, $query) or die(mysql_error());

    if($result) {
        $message = "<div align=\"center\"><strong>Applied!</strong></div>";
        echo $message;
    } else {
        echo mysqli_error($connection);
    }
    
?>