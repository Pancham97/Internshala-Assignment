<?php

include 'navbar.php';

$connection = mysqli_connect("localhost", "root", "", "assignment") or die("Please, check the server connection!");

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$name = $_POST['name'];
$org_name = $_POST['org_name'];
$phone = $_POST['phone'];

$insert_query = "insert into employer (email, password, name, org_name, phone) Values ('$email', (PASSWORD('$password')), '$name', '$org_name', '$phone')";

$result = mysqli_query($connection, $insert_query) or die(mysql_error());

if($result) {
    ?>
    <div class="row">
        <div class="container">
            <h4>Dear, <?php echo $name; ?> (employer), your account is successfully created!</h4>
            <h4>Click <a href="insertint.php">here</a> to add internships!</h4>
        </div>
    </div>

<?php
    // header ("Location: index.php");
} else {
    echo "Some error occurred while creating your account! Please try again!";
}

include 'footer.php';

?>
