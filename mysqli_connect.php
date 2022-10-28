<?php
//This file provides information for accessing the database and connecting to MySQL
//Define constants:
Define ('DB_USER', 'root');
Define ('DB_PASSWORD', "");
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'simpledb');

//Assign connection to a variable $dbcon:
try {
    $dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    mysqli_set_charset($dbcon, 'utf8');
}
catch (Exception $e) //Handle any problems here
{
    //print "An Exception occurred. Message: " . $e->getMessage();
    print "The system is busy please try later";
}
catch (Error $e) {
    //print "An Error occurred. Message: " . $e->getMessage();
    print "The system is busy please try again later.";
}
