<?php
//Retrieve information for all users
/**
 * @return array
 */
function fetchAllUsers()
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
    UID,
    F_Name,
    L_Name,
    Email,
    DOB,
    Cell_number,
    Address,
    City,
    State,
    Zip,
    Country
		
		FROM " . $db_table_prefix . "student_info"
    );
    $stmt->execute();
    $stmt->bind_result(
        $UID,
        $F_Name,
        $L_Name,
        $Email,
        $DOB,
        $Cell_number,
        $Address,
        $City,
        $State,
        $Zip,
        $Country
    );

    while ($stmt->fetch()) {
        $row[] = array(
            'UID' => $UID,
            'F_Name' => $F_Name,
            'L_Name' => $L_Name,
            'Email' => $Email,
            'DOB' => $DOB,
            'Cell_number' => $Cell_number,
            'Address' => $Address,
            'City' => $City,
            'State' => $State,
            'Zip' => $Zip,
            'Country' => $Country
        );
    }
    $stmt->close();
    return ($row);
}

//create New User function
function createNewUser($F_Name, $L_Name, $Email, $DOB, $cell_number, $Address, $City, $State, $Zip, $Country)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . " student_info(
		F_Name,
        L_Name,
        Email,
        DOB,
        Cell_number,
        Address,
        City,
        State,
        Zip,
        Country
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("ssssssssss", $F_Name, $L_Name, $Email,$DOB, $cell_number, $Address, $City, $State, $Zip, $Country);
    $result = $stmt->execute();
    $stmt->close();
    return $result;

}


//fetch courses

function fetchcourses()
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
    Course_id,
    Course_name,
    Course_type
	FROM " . $db_table_prefix . "Courses"
    );
    $stmt->execute();
    $stmt->bind_result(
        $Course_id,
        $Course_name,
        $Course_type
    );

    while ($stmt->fetch()) {
        $row[] = array(
            'Course_id' => $Course_id,
            'Course_name' => $Course_name,
            'Course_type' => $Course_type,
        );
    }
    $stmt->close();
    return ($row);
}

//found this user function
function fetchThisUser($userid){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
    F_Name,
    L_Name,
    Email,
    DOB,
    Cell_number,
    Address,
    City,
    State,
    Zip,
    Country
    FROM " . $db_table_prefix . "student_info
    WHERE
    UID = ?
    LIMIT 1"
    );
    $stmt->bind_param("s", $userid);
    $stmt->execute();
    $stmt->bind_result($F_Name, $L_Name, $Email, $DOB, $cell_number, $Address, $City, $State, $Zip, $Country);
    $stmt->execute();
    while ($stmt->fetch()) {
        $row[] = array(
            'F_Name' => $F_Name,
            'L_Name' => $L_Name,
            'Email' => $Email,
            'DOB' => $DOB,
            'Cell_number' => $cell_number,
            'Address' => $Address,
            'City' => $City,
            'State' => $State,
            'Zip' => $Zip,
            'Country' => $Country
        );
    }
    $stmt->close();
    return ($row);
}

//Update record

function updateThisRecord($F_Name, $L_Name, $Email, $DOB, $Cell_number, $Address, $City, $State, $Zip, $Country, $UID)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "Student_info
      SET
      F_Name = ?,
      L_Name = ?,
      Email = ?,
      DOB = ?,
      Cell_number = ?,
      Address = ?,
      City = ?,
      State = ?,
      Zip = ?,
      Country = ?
      WHERE
      UID = ?
      LIMIT 1"
    );
    $stmt->bind_param("sssssssssss", $F_Name, $L_Name, $Email, $DOB, $Cell_number, $Address, $City, $State, $Zip, $Country, $UID);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}
