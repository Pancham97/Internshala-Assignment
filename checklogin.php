<?php
    include('navbar.php');
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $connection = mysqli_connect("localhost", "root", "", "assignment") or die("Check sql connection!");
    
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        echo "Welcome " . $email . ". <br>";
    }
    if(isset($_SESSION['password'])) {
        $password = $_SESSION['password'];
    }
    if((isset($_SESSION['email']) && $_SESSION['email'] != "") || (isset($_SESSION['password']) && $_SESSION['password'] != "")) {
        $sess = session_id();
        $query = "select * from applied where stu_sess_id = '$sess'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        if(mysqli_num_rows($result) >= 1) {
            echo "You can purchase by selecting items from the menu!";
        } else {
            
            $internship_id = $_REQUEST['id'];
            $title = $_REQUEST['title'];
            $emp_id = $_REQUEST['emp_id'];
            echo "If you\'ve finished shopping, ";
            echo "<a href=\"apply.php?&id=$internship_id&title=$title&emp_id=$emp_id\">Click here</a> to supply shipping information ";
            echo "Or you can keep shopping!";
        }
    } else {
        ?>
        <html>
            <head></head>
            <body>
                <h3>Not logged in yet?</h3>
                <p>You are currently not logged in. You can purchase only if you are logged in!<br>If you have already registered, <a href="signin.php">click here </a>to log in, or if you want to register, <a href="signup.php">click here</a> to register.</p>
            </body>
        </html>
        <?php
    }
?>