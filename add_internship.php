<?php
include 'navbar.php';
  $server = "localhost";
  $username = "root";
  $password = "";
  $db_name = "assignment";
  $connection = mysqli_connect($server, $username, $password, $db_name) or die ("Error in connecting to the server!");

  // Internship details table.
  $internship_table = "CREATE TABLE internships
  (id INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  emp_id INT(3) NOT NULL,
  org_name VARCHAR(50),
  emp_sess_id CHAR(50),
  title VARCHAR(140),
  description TEXT,
  posted TIMESTAMP,
  start_date DATE,
  end_date DATE,
  logo VARCHAR(100))";

  // Execute table creation query.
  mysqli_query($connection, $internship_table);

  // Check if the table is created.
  // if(mysqli_query($connection, $internship_table)) {
  //   echo "Table created!";
  // } else {
  //   echo mysqli_error($connection);
  // }

  $org_name = $_POST['org_name'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];

  $email = $_SESSION['email'];
  $employer_details = "SELECT * FROM employer WHERE email = '$email'";
  $result = mysqli_query($connection, $employer_details);
  $row = mysqli_fetch_assoc($result);
  extract($row);
  $emp_id = $id;
  $insert_query = "INSERT INTO internships (org_name, title, description, start_date, end_date, emp_id) VALUES ('$org_name', '$title', '$description', '$start_date', '$end_date', '$emp_id')";

  // mysqli_query($connection, $insert_query);

  if(mysqli_query($connection, $insert_query)) {
      echo "Internship added!";
  } else {
      echo mysqli_error($connection);
  }
?>
