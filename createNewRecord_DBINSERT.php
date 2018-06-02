<?php
require_once("config.php");

// Assigning $_POST values to individual variables for reuse.
    $F_Name = $_POST['F_Name'];
    $L_Name = $_POST['L_Name'];
    $Email = $_POST['Email'];
    $DOB = $_POST['DOB'];
    $cell_number = $_POST['Cell_number'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Zip = $_POST['Zip'];
    $Country = $_POST['Country'];

//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
//successfull and 0 when there is an error with executing the query .

$newuser = createNewUser($F_Name, $L_Name, $Email, $DOB, $cell_number, $Address, $City, $State, $Zip, $Country);

//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//insert is completed successfully.
echo $newuser;
?>
