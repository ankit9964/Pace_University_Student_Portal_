<?php

require_once("config.php");

$thisUID = $_GET['UID'];
$foundUser = fetchThisUser($thisUID);
$thisUID = $_GET['UID'];
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
       Update record
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
<body>

<form name="getUserDetails" method="post" action="processUpdateUser.php?UID=<?php print $thisUID ?>">
    <table class="table-style-three">
        <?php foreach ($foundUser as $userdetails) { ?>
        <tr>
            <td>F_Name :</td>
            <td><input type="text" name="F_Name" value="<?php print $userdetails['F_Name']; ?>"></td>
        </tr>
        <tr>
            <td>L_Name :</td>
            <td><input type="text" name="L_Name" value="<?php print $userdetails['L_Name']; ?>"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="Email" value="<?php print $userdetails['Email']; ?>"></td>
        </tr>
        <tr>
            <td>DOB :</td>
            <td><input type="text" name="DOB" value="<?php print $userdetails['DOB']; ?>"></td>
        </tr>
        <tr>
            <td>Cell_number :</td>
            <td><input type="text" name="Cell_number" value="<?php print $userdetails['Cell_number']; ?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="Address" value="<?php print $userdetails['Address']; ?>"></td>
        </tr>
        <tr>
            <td>City :</td>
            <td><input type="text" name="City" value="<?php print $userdetails['City']; ?>"></td>
        </tr>
        <tr>
            <td>State:</td>
            <td><input type="text" name="State" value="<?php print $userdetails['State']; ?>"></td>
        </tr>
        <tr>
            <td>Zip :</td>
            <td><input type="text" name="Zip" value="<?php print $userdetails['Zip']; ?>"></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><input type="text" name="Country" value="<?php print $userdetails['Country']; ?>"></td>
        </tr>
        <?php } ?>
    </table>

    <input type="submit" name="submit" value="Update Me">

</form>


</body>
</html>