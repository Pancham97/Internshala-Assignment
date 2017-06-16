
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internships</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <script language="JavaScript" type="text/javascript">
        function makeRequestObject() {
            var xmlhttp = false;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    var ajaxCart = document.getElementById("cartcountinfo");
                    ajaxCart.innerHTML = xmlhttp.responseText;
                }
            }
            return xmlhttp;
        }

        function updateAppliedStatus() {
            var xmlhttp = makeRequestObject();
            xmlhttp.onreadystatechange = function() {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    var ajaxCart = document.getElementById("cartcountinfo");
                    ajaxCart.innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "totalcount.php", true);
            xmlhttp.send();
        }
    </script>
</head>

<!--<body>-->
<!--
    <table width="100%" cellspacing="0">
        <tr>
-->

<!-- Top navigation bar STARTS -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img src="http://placehold.it/200x200">&nbsp;<span>Internship</span></a>
            </div>
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-left" method="post" action="searchitems.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="tosearch">
                </div>
                <button type="submit" class="btn btn-default search-button">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                if(isset($_SESSION['email'])) {
                    echo "<li><a href='profile.php'>Welcome " . $_SESSION['name'] . "</a></li>";
                    echo "<li><a href=\"logout.php\">Logout</a></li>";
                } else {
                    echo "<li><a href='signin.php'>Login</a></li>";
                    echo "<li><a href=\"student-signup.php\">Sign Up</a></li>";
                }
            ?>
            </ul>
        </div>
    </nav>

    <!-- Top navbar ENDS -->
    <!-- Navigation bar ENDS -->

<!--
                <tr>
                    <td style="font-size: 35px; color: blue;">
                        <b>Online Store</b>
                    </td>

                    <td>
                        <form method="post" action="searchitems.php">
                            <input size="50" type="text" name="tosearch">
                            <input type="submit" name="submit" value="Search">
                        </form>
                    </td>

                    <td>
                        <a href="cart.php"><img style="max-width: 40px; max-height: 40px; width: auto; height: auto;" src="images/corner-logo.png"><span id="cartcountinfo"></span></a>
                    </td>
                </tr>
    </table>

    <div class="container">
        <nav>
            <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <a href="#">Electronics</a>
                    <ul>
                        <li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
                        <li><a href="itemlist.php?category=Laptops">Laptops</a></li>
                        <li><a href="itemlist.php?category=Camera">Cameras</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Home &amp; Furniture</a>
                    <ul class="large">
                        <li><a href="index.php">Kitchen Essentials</a></li>
                        <li><a href="index.php">Bath Essentials</a></li>
                        <li><a href="index.php">Furniture</a></li>
                        <li><a href="index.php">Dining &amp; Serving</a></li>
                        <li><a href="index.php">Cookware</a></li>
                    </ul>
                </li>
                <li><a href="index.php">Books</a></li>
            </ul>
        </nav>
    </div>
<p></p>
-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
