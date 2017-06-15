<?php
  $server = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "assignment";
  $connection = mysqli_connect($server, $username, $password, $db_name) or die ("Error in connecting to the server!");

  // Internship details table.
  $internship_table = "CREATE TABLE internships
  (id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  emp_id INT(3) NOT NULL,
  org_name VARCHAR(50),
  emp_sess_id CHAR(50),
  title VARCHAR(140),
  posted TIMESTAMP,
  start_date DATE,
  end_date DATE,
  logo VARCHAR(100))";

  // Execute table creation query.
  mysqli_query($connection, $internship_table)

  // Check if the table is created.
  // if(mysqli_query($connection, $internship_table)) {
  //   echo "Table created!";
  // } else {
  //   echo mysqli_error($connection);
  // }
?>
