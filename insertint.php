<!DOCTYPE html>
<html>
    <head>
        <title>Add Internships</title>
        <title>jQuery UI Datepicker - Default functionality</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#start-date" ).datepicker({
                    dateFormat: "yy-mm-dd"
                });
            } );

            $( function() {
                $( "#end-date" ).datepicker({
                    dateFormat: "yy-mm-dd"
                });
            } );
        </script>
    </head>

    <body>
        <form action="add_internship.php" method="post">
            Name: <input type="text" name="emp_name" required><br>
            Organisation: <input type="text" name="org_name" required><br>
            Title: <input type="text" name="title" required><br>
            Description: <textarea rows="4" cols="20" name="description" required></textarea><br>
            Start date: <input type="text" name="start_date" id="start-date"><span id="check_start"></span><br>
            End date: <input type="text" name="end_date" id="end-date"><span id="check_last"></span><br>

            <script type="text/javascript">
                var start_date = document.getElementById('start-date').value;
                var end_date = document.getElementById('end-date').value;

                if(end_date < start_date) {
                    document.getElementById('check_last').innerHTML = "End date can't be before start date. Please check.";
                }
            </script>

            <!-- Logo: <input type="file" name="logo"><br> -->
            <input type="submit" value="Submit">
        </form>


    </body>
</html>
