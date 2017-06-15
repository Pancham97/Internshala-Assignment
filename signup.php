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
                <h2>Sign Up to Internship!</h2><br>
                <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
                    <label for="email" class="sr-only">Email address</label>
                    <input class="form-control" placeholder="Email address" type="text" name="email"><span id="emailmsg"></span>

                    <br>

                    <label for="password" class="sr-only">Password</label>
                    <input class="form-control" placeholder="Password" type="password" name="password"><span id="passwdmsg"></span>

                    <br>

                    <label for="repassword" class="sr-only">Re-enter password</label>
                    <input class="form-control" placeholder="Retype Password" type="password" name="repassword"><span id="repasswdmsg"></span>

                    <br>

                    <label for="name" class="sr-only">Name</label>
                    <input class="form-control" placeholder="Name" type="text" name="name"><span id="usermsg"></span>

                    <br>

                    <label for="address1" class="sr-only">Address</label>
                    <input class="form-control" placeholder="Address 1" type="text" name="address1">

                    <br>

                    <label for="address2" class="sr-only">Address</label>
                    <input class="form-control" placeholder="Address 2" type="text" name="address2">

                    <br>

                    <label for="city" class="sr-only">City</label>
                    <input class="form-control" placeholder="City" type="text" name="city">

                    <br>

                    <label for="state" class="sr-only">State</label>
                    <input class="form-control" placeholder="State" type="text" name="state">

                    <br>

                    <label for="country" class="sr-only">Country</label>
                    <input class="form-control" placeholder="Country" type="text" name="country">

                    <br>

                    <label for="zipcode" class="sr-only">Zipcode</label>
                    <input class="form-control" placeholder="Zipcode" type="text" name="zipcode">

                    <br>

                    <label for="phone" class="sr-only">Phone Number</label>
                    <input class="form-control" placeholder="Phone Number" type="text" name="phone">

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
