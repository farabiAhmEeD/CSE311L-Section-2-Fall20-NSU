<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
//INSERT_student_table
$sql="INSERT INTO student VALUES (051135593,'Maria White','English','SR',21);
INSERT INTO student VALUES(060839453,'Charles Harris','Architecture','SR',22);
INSERT INTO student VALUES(099354543,'Susan Martin','Law','JR',20);
INSERT INTO student VALUES(112348546,'Joseph Thompson','Computer Science','SO',19);
INSERT INTO student VALUES(115987938,'Christopher Garcia','Computer Science','JR',20);
INSERT INTO student VALUES(132977562,'Angela Martinez','History','SR',20);
INSERT INTO student VALUES(269734834,'Thomas Robinson','Psychology','SO',18);
INSERT INTO student VALUES(280158572,'Margaret Clark','Animal Science','FR',18);
INSERT INTO student VALUES(301221823,'Juan Rodriguez','Psychology','JR',20);
INSERT INTO student VALUES(318548912,'Dorthy Lewis','Finance','FR',18);
INSERT INTO student VALUES(320874981,'Daniel Lee','Electrical Engineering','FR',17);
INSERT INTO student VALUES(322654189,'Lisa Walker','Computer Science','SO',17);
INSERT INTO student VALUES(348121549,'Paul Hall','Computer Science','JR',18);
INSERT INTO student VALUES(351565322,'Nancy Allen','Accounting','JR',19);
INSERT INTO student VALUES(451519864,'Mark Young','Finance','FR',18);
INSERT INTO student VALUES(455798411,'Luis Hernandez','Electrical Engineering','FR',17);
INSERT INTO student VALUES(462156489,'Donald King','Mechanical Engineering','SO',19);
INSERT INTO student VALUES(550156548,'George Wright','Education','SR',21);
INSERT INTO student VALUES(552455318,'Ana Lopez','Computer Engineering','SR',19);
INSERT INTO student VALUES(556784565,'Kenneth Hill','Civil Engineering','SR',21);
INSERT INTO student VALUES(567354612,'Karen Scott','Computer Engineering','FR',18);
INSERT INTO student VALUES(573284895,'Steven Green','Kinesiology','SO',19);
INSERT INTO student VALUES(574489456,'Betty Adams','Economics','JR',20);
INSERT INTO student VALUES(578875478,'Edward Baker','Veterinary Medicine','SR',21)";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



//insert_catalog_table


$sql = "INSERT INTO catalog VALUES(1,3,0.50);
INSERT INTO catalog VALUES(1,4,0.50);
INSERT INTO catalog VALUES(1,8,11.70);
INSERT INTO catalog VALUES(2,3,0.55);
INSERT INTO catalog VALUES(2,8,7.95);
INSERT INTO catalog VALUES(2,1,16.50);
INSERT INTO catalog VALUES(3,8,12.50);
INSERT INTO catalog VALUES(3,9,1.00);
INSERT INTO catalog VALUES(4,5,2.20);
INSERT INTO catalog VALUES(4,6,1247548.23);
INSERT INTO catalog VALUES(4,7,1247548.23)";


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Close connection
mysqli_close($link);
?>