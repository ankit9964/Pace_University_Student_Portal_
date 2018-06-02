<?php
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        PORTAL
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css" >
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;MySQL - UserManager@localhost
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
            color: #ffffff;
        }

        table.table-style-three a {
        }

        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
            text-decoration: none;
        }

        table.table-style-three tr:hover td {
            cursor: pointer;
        }

        table.table-style-three tr:nth-child(even) td {
            background-color: #F7CFCF;
        }

        table.table-style-three td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #ffffff;
        }
    </style>

</head>
<body style="background:url('pace image.jpg')">
<br></br>
<h1 style="color: red; text-align: center; font-family: castellar"> Pace University Portal</h1>
<hr>
<br/>
<br/>
<br/>
<br/>
<br/>

<?php require_once("config.php"); ?>

<!-- Table goes in the document BODY -->
<table class="table-style-three"
align="center">
    <thead>
    <!-- Display CRUD options in TH format -->
    <tr>
        <th><a href="displayAllRecords.php">Display Student record info</a></th>
    </tr>
    <tr>
        <th><a href="createNewRecord.php">Create Student info</a></th>
    </tr>
    <tr>
        <th><a href="courses.php">Display All Courses</a></th>
    </tr>
    <tr>
        <th><a href="displayAllRecords.php">Update Student record info</a></th>
    </tr>
    </thead>
</table>

</body>
</html>
