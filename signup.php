<!DOCTYPE html>
<html>
<head>
    <title>Sign up for Internship</title>
    <script language="JavaScript" type="text/javascript" src="js/checkform.js"></script>
</head>

<body>
    <? include 'navbar.php'; ?>
    <div class="row signup">
        <div class="container">
            <div class="col-md-4"></div>
            <div class="col-md-4 form">
                <h2>Sign Up as an Employer!</h2><br>
                <form action="addcompany.php" method="post" onsubmit="return validate(this);">
                    <label for="name" class="sr-only">Name</label>
                    <input class="form-control" placeholder="Name" type="text" name="name" required="true"><span id="usermsg"></span>

                    <br>

                    <label for="org_name" class="sr-only">Organisation Name</label>
                    <input class="form-control" placeholder="Organisation Name" type="text" name="org_name" required="true">

                    <br>

                    <label for="email" class="sr-only">Email address</label>
                    <input class="form-control" placeholder="Email address" type="text" name="email"><span id="emailmsg"></span>

                    <br>

                    <label for="password" class="sr-only">Password</label>
                    <input class="form-control" placeholder="Password" type="password" name="password"><span id="passwdmsg"></span>

                    <br>

                    <label for="repassword" class="sr-only">Re-enter password</label>
                    <input class="form-control" placeholder="Retype Password" type="password" name="repassword"><span id="repasswdmsg"></span>

                    <br>

                    <label for="phone" class="sr-only">Phone Number</label>
                    <input class="form-control" placeholder="Phone Number" type="text" name="phone" required="true">

                    <br>


                    <!--
                    <div class="checkbox">
                    <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
        -->

        <button class="btn btn-primary" type="submit">Sign Up</button>
        <button class="btn btn-primary" type="reset">Reset</button>

    </form>
</div>

</div>
</div>

<? include 'footer.php'; ?>
</body>
</html>
