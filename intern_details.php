<?php
    include('navbar.php');
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "assignment") or die(mysql_error());
    $internship_id = $_REQUEST['id'];
    $emp_id = $_REQUEST['emp_id'];
    $query = "SELECT * FROM internships " . "where id like '$internship_id'";
    $results = mysqli_query($connection, $query) or die(mysql_error());
    $row = mysqli_fetch_assoc($results);
    $email = $_SESSION['email'];
    extract($row); 
    
    echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"5px\">";
    echo "<tr><td style=\"padding: 3px;\" rowspan=\"6\">";
    echo "<td colspan=\"2\" align=\"center\" style=\"font-family:verdana; font-size: 150%;\"><b>";
    echo $title;
    echo "</b></td></tr><tr><td colspan=\"2\"><table><tr><td>";

    $title = urlencode($title);
    
    echo "</td></tr><tr>";
    
    $get_stu_details = "SELECT * FROM students WHERE email = '$email'";
    $student_result = mysqli_query($connection, $get_stu_details);

    if($student_result) {
        $row = mysqli_fetch_assoc($student_result);
        extract($row);
        $stu_id = $id;
    }

    $already_applied = "SELECT * FROM applied WHERE internship_id = $internship_id AND stu_id = $stu_id";

    $check_result = mysqli_query($connection, $already_applied);
    
    $row = mysqli_fetch_assoc($check_result);
    if($row) {
        echo "Already applied!";
    } else {
        echo "<form method=\"post\" action=\"checklogin.php?&id=$internship_id&title=$title&emp_id=$emp_id\">";
        echo "<td colspan=\"2\" style=\"font-family:verdana; font-size: 150%;\">";
        echo "</td></tr><tr><td colspan=\"2\"><input type=\"submit\" name=\"apply\" value=\"Apply\" style=\"font-size: 150%;\"></td>";
        echo "</form>";
        echo "</tr></table></table>";
    }
   
    echo "<p style=\"font-size:140%;\">Description</p>";
    echo $description;
?>