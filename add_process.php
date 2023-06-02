<?php
//check if  submit button is clicked
 if(isset($_POST["submit"])) {
     //prepare database connection
     $hostName = "localhost";
     $hostUsername = "root";
     $hostPassword = ""; 
     $hostDB = "mydbphonebook";
    //connect to database
    $con = mysqli_connect($hostName, $hostUsername, $hostPassword, $hostDB) or die("Error in database connection...");
    //get value from textfield
    $name = $_POST["txtname"];
    $phonenumber = $_POST["txtnumber"];
    //prepare SQL statements to add record
    $sql = "INSERT INTO tblphonebook(fullname, phonenumber) VALUES ('$name', '$phonenumber')";
    //execute insertion of records
    $result = mysqli_query($con, $sql) or die("error in insert statement and query execution...");

    if ($result) {
        echo "contact has been succesfully added";
    }
 }  else {
    header("Location:/usingmydbimperial");
 }
   ?>