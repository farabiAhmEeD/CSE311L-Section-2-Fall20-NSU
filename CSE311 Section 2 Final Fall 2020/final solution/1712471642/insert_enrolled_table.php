<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO enrolled VALUES(112348546,'Database Systems');
INSERT INTO enrolled VALUES(115987938,'Database Systems');
INSERT INTO enrolled VALUES(348121549,'Database Systems');
INSERT INTO enrolled VALUES(322654189,'Database Systems');
INSERT INTO enrolled VALUES(552455318,'Database Systems');
INSERT INTO enrolled VALUES(455798411,'Operating System Design');
INSERT INTO enrolled VALUES(552455318,'Operating System Design');
INSERT INTO enrolled VALUES(567354612,'Operating System Design');
INSERT INTO enrolled VALUES(112348546,'Operating System Design');
INSERT INTO enrolled VALUES(115987938,'Operating System Design');
INSERT INTO enrolled VALUES(322654189,'Operating System Design');
INSERT INTO enrolled VALUES(567354612,'Data Structures');
INSERT INTO enrolled VALUES(552455318,'Communication Networks');
INSERT INTO enrolled VALUES(455798411,'Optical Electronics');
INSERT INTO enrolled VALUES(301221823,'Perception');
INSERT INTO enrolled VALUES(301221823,'Social Cognition');
INSERT INTO enrolled VALUES(301221823,'American Political Parties');
INSERT INTO enrolled VALUES(556784565,'Air Quality Engineering');
INSERT INTO enrolled VALUES(099354543,'Patent Law');
INSERT INTO enrolled VALUES(574489456,'Urban Economics')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>