<?php
require_once("config.php");

// print_r is to display the contents of an array() in PHP.
//print_r($_POST);

// Assigning $_POST values to individual variables for reuse.
$F_Name = $_POST['F_Name'];
$L_Name = $_POST['L_Name'];
$Email = $_POST['Email'];
$DOB = $_POST['DOB'];
$Cell_number = $_POST['Cell_number'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$Country = $_POST['Country'];
$UID = $_GET['UID'];

//Creating a variable to hold the "@return boolean value returned by function updateThisRecord - is boolean 1 with
//successfull and 0 when there is an error with executing the query .
$updatedRecord = updateThisRecord($F_Name, $L_Name, $Email, $DOB, $Cell_number, $Address, $City, $State, $Zip, $Country, $UID);


//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//update is completed successfully.
echo $updatedRecord;
