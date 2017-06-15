<?php

include 'navbar.php';

$connection = mysqli_connect("localhost", "root", "root", "assignment") or die("Please, check the server connection!");

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$insert_query = "insert into students (email, password, name, phone) Values ('$email', (PASSWORD('$password')), '$name', '$phone')";

$result = mysqli_query($connection, $insert_query) or die(mysql_error());

if($result) {
    ?>
    <div class="row">
        <div class="container">
            <h4>Dear, <?php echo $name; ?>, your account is successfully created!</h4>
            <h4>Click <a href="index.php">here</a> to start shopping!</h4>
        </div>
    </div>

<?php
    header ("Location: index.php");
} else {
    echo "Some error occurred while creating your account! Please try again!";
}

include 'footer.php';

?>
