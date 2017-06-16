<?php
    include 'navbar.php';

    $connection = mysqli_connect("localhost", "root", "", "assignment") or die ("Check server connection!");

    $email = $_SESSION['email'];
    $name = $_SESSION['name'];

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
	    // $emp_id = $_SESSION['id'];
	   	$employer_query = "SELECT * FROM employer WHERE email = '$email' AND name = '$name'";
	   	$emp_result = mysqli_query($connection, $employer_query);
	   	$student_query = "SELECT * FROM students WHERE email = '$email' AND name = '$name'";
	   	$student_result = mysqli_query($connection, $student_query);
	   	if($student_result) {
	   		while($rows = mysqli_fetch_assoc($student_result)) {
	   			echo "Hi, student, " . $name . "!";
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
			}
   	} else {
   		echo "Hi, employer, " . $name . "! ";
   		echo "<a href=\"insertint.php\">Add Internship</a>";
   		$check_applied = "SELECT * FROM applied WHERE emp_id = '$emp_id'";
   		$get_result = mysqli_query($connection, $check_applied);
   		if($get_result) {
   			while($rows = mysqli_fetch_assoc($get_result)) {
   				echo $rows . "\r\n\n";
   			}
   		}
   	} 
?>
