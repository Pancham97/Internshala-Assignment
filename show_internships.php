<?php
    include 'navbar.php';
  $server = "localhost";
  $username = "root";
  $password = "";
  $db_name = "assignment";
  $connection = mysqli_connect($server, $username, $password, $db_name) or die ("Error in connecting to the server!");

  $select_query = "SELECT * FROM internships ORDER BY posted DESC";
  $result = mysqli_query($connection, $select_query);

  echo "<table border=\"1\"><tr>";
  echo "<th>Title</th>";
  echo "<th>Organisation name</th>";
  echo "<th>Start Date</th>";
  echo "<th>End Date</th></tr>";
  while($rows = mysqli_fetch_assoc($result)) {
      extract($rows);
      echo "<tr><td><a href=\"intern_details.php?id=$id&emp_id=$emp_id\">" . $title . "</a></td>";
      echo "<td>" . $org_name . "</td>";
      echo "<td>" . $start_date . "</td>";
      echo "<td>" . $end_date . "</td></tr>";
  }
  echo "</table>";
?>
