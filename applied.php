<?php
  $server = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "assignment";
  $connection = mysqli_connect($server, $username, $password, $db_name) or die ("Error in connecting to the server!");

  // Applied to internships table.
  $emp_table = "CREATE TABLE applied
  (id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  stu_sess_id CHAR(50) NOT NULL,
  stu_id INT(3),
  stu_name VARCHAR(50),
  apply_date DATE,
  apply_time TIMESTAMP,
  internship_id INT(50),
  emp_id INT(3),
  emp_name VARCHAR(50))";

  // Execute table creation query.
  mysqli_query($connection, $emp_table)

  // Check if the table is created.
  // if(mysqli_query($connection, $emp_table)) {
  //   echo "Table created!";
  // } else {
  //   echo "Table not created!";
  // }
?>
