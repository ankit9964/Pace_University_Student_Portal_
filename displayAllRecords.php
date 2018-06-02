<?php
?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN'
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        Display records
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
            color: blue;
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

<?php require_once("config.php");

$allrecords = fetchAllUsers();
?>

<!-- Table goes in the document BODY -->
<table class="table-style-three">
    <thead>
    <!-- display user details header  -->
    <th>UID</th>
    <th>F_Name</th>
    <th>L_Name</th>
    <th>E-mail</th>
    <th>DOB</th>
    <th>Cell_number</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Country</th>
    </thead>
    <tbody>
    <?php
    foreach ($allrecords as $displayRecords) { ?>
        <tr>
            <td>
                <a href="updateThisUser.php?UID=<?php print $displayRecords['UID']; ?>"><?php print $displayRecords['UID']; ?></a>
            </td>
            <td><?php print $displayRecords['F_Name']; ?></td>
            <td><?php print $displayRecords['L_Name']; ?></td>
            <td><?php print $displayRecords['Email']; ?></td>
            <td><?php print $displayRecords['DOB']; ?></td>
            <td><?php print $displayRecords['Cell_number']; ?></td>
            <td><?php print $displayRecords['Address']; ?></td>
            <td><?php print $displayRecords['City']; ?></td>
            <td><?php print $displayRecords['State']; ?></td>
            <td><?php print $displayRecords['Zip']; ?></td>
            <td><?php print $displayRecords['Country']; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>
</html>
