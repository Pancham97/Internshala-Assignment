<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $db_name = "assignment";
  $connection = mysqli_connect($server, $username, $password, $db_name) or die ("Error in connecting to the server!");

  // Employer details table.
  $emp_table = "CREATE TABLE employer
  (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  org_name VARCHAR(50) NOT NULL,
  first_name VARCHAR(30),
  last_name VARCHAR(30),
  email VARCHAR(30),
  password VARCHAR(50),
  phone INT(10),
  emp_sess_id CHAR(50),
  logo VARCHAR(100),
  created TIMESTAMP)";

  // Execute table creation query.
  mysqli_query($connection, $emp_table);

  // Check if the table is created.
  // if(mysqli_query($connection, $emp_table)) {
  //   echo "Table created!";
  // } else {
  //   echo "Table not created!";
  // }
?>
