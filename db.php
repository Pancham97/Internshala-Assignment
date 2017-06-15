<?php
  $server = "localhost";
  $username = "root";
  $password = "root";

  $connection = mysqli_connect($server, $username, $password) or die ("Error in connecting to the server!");

  $db_name = "assignment";
  $create_db = "CREATE DATABASE IF NOT EXISTS $db_name";

  // Execute database creation query.
  mysqli_query($connection, $create_db);

  // Connecting to the database By creating it.
  // if (mysqli_query($connection, $create_db)) {
  //   echo "Database created successfully!";
  // } else {
  //   echo mysqli_error($connection);
  // }

  // Connecting with the database to create a table.
  mysqli_select_db($connection, $db_name);

  // Students table.
  $table = "CREATE TABLE students
  (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(30),
  password VARCHAR(50),
  phone INT(10),
  stu_sess_id CHAR(50),
  photo VARCHAR(100),
  created TIMESTAMP)";

  // Execute table creation query.
  mysqli_query($connection, $table);

  // Check if the table is created.
  // if(mysqli_query($connection, $table)) {
  //   echo "Table created!";
  // } else {
  //   echo mysqli_error($connection);
  // }
?>
