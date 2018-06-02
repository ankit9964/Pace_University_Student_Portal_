<?php
?>


<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        Create New Record
    </title>
    <!-- Style -- Can also be included as a file usually style.css -->
    <style type="text/css">
        table.table-style-three {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #3A3A3A;
            border-collapse: collapse;
        }

        table.table-style-three th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA6A6;
            background-color: #D56A6A;
            color: #ffffff;
        }

        table.table-style-three a {
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

<?php require_once("config.php"); ?>

<form name="createNewRecord" action="createNewRecord_DBINSERT.php" method="post">
    <!-- Table goes in the document BODY -->
    <table class="table-style-three">
        <thead>
        <!-- Display CRUD options in TH format -->
        <tr>
            <th>F_Name</th>
            <td><input type="text" name="F_Name" value=""></td>
        </tr>

        <tr>
            <th>L_Name</th>
            <td><input type="text" name="L_Name" value=""></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><input type="text" name="Email" value=""></td>
        </tr>

        <tr>
            <th>DOB</th>
            <td><input type="text" name="DOB" value=""></td>
        </tr>

        <tr>
            <th>Cell_number</th>
            <td><input type="text" name="Cell_number" value=""></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><input type="text" name="Address" value=""></td>
        </tr>
        <tr>
            <th>City</th>
            <td><input type="text" name="City" value=""></td>
        </tr>
        <tr>
            <th>State</th>
            <td><input type="text" name="State" value=""></td>
        </tr>
        <tr>
            <th>Zip</th>
            <td><input type="text" name="Zip" value=""></td>
        </tr>
        <tr>
            <th>Country</th>
            <td><input type="text" name="Country" value=""></td>
        </tr>

        <tr>
            <td><input type="Submit" name="submit" value="create record"></td>
        </tr>
        </thead>
    </table>
</form>
</body>
</html>