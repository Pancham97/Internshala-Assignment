<!DOCTYPE html>
<html>
    <head>
        <script  type="text/javascript">
            function updateUser(username) {
                var ajaxUser = document.getElementById("userinfo");
                ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log out</a>";
            }
        </script>
    </head>
    <body>
        <?php
            include('navbar.php');
            if(session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $connection = mysqli_connect("localhost", "root", "", "assignment") or die("Please, check your server connection");
            $query = "select email, password, name from students where email like '" .$_POST['email'] . "' and password like (PASSWORD('" . $_POST['password'] . "'))";
            

            $emp_query = "select email, password, name from employer WHERE email like '" . $_POST['email'] . "' and password like (PASSWORD('" . $_POST['password'] . "'))";
            
            if(mysqli_num_rows(mysqli_query($connection, $query)) == 1) {
                $result = mysqli_query($connection, $query) or die(mysql_error());
                while($row = mysqli_fetch_assoc($result)) {
                    extract($row);
                    echo "Welcome, " . $name . " to an amazing world of Internship!<br>";
                    echo "<script language=\"JavaScript\">updateUser('$name');</script>";
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['id'] = $row['id'];

                }
            } else if(mysqli_num_rows(mysqli_query($connection, $emp_query)) == 1) {
                $emp_result = mysqli_query($connection, $emp_query) or die (mysql_error());
                while($row = mysqli_fetch_assoc($emp_result)) {
                    extract($row);
                    echo "Welcome, " . $name . " (employer) to an amazing world of Internship!<br>";
                    echo "<script language=\"JavaScript\">updateUser('$name');</script>";
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['id'] = $row['id'];
                }
            } else {
                ?>
                Invalid email or password<br>
                Not registered?
                <a href="signup.php">Click here</a> to register.<br><br>
                Want to try again? <br>
                <a href="signin.php">Click here </a>to try login again!<br>
                <?php
            }
        ?>
    </body>
</html>
