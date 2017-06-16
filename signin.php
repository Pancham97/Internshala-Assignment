d<?php
    include('navbar.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login to Internship</title>
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="col-md-4"></div>

                <div class="col-md-4 form">
                    <h2>Login to Internship!</h2><br>
                    <form action="validateuser.php" method="post">
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>

                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>

<!--
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
-->
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>

<!--Form end-->
        <? include 'footer.php'; ?>
    </body>
</html>
