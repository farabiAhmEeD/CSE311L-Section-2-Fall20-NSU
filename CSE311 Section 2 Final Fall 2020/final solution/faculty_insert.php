<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//INSERT_faculty_table

$sql = "INSERT INTO faculty VALUES(142519864,'Ivana Teach',20);
INSERT INTO faculty VALUES(242518965,'James Smith',68);
INSERT INTO faculty VALUES(254099823,'Patricia Jones',68);
INSERT INTO faculty VALUES(489456522,'Linda Davis',20);
INSERT INTO faculty VALUES(287321212,'Michael Miller',12);
INSERT INTO faculty VALUES(248965255,'Barbara Wilson',12);
INSERT INTO faculty VALUES(090873519,'Elizabeth Taylor',11);
INSERT INTO faculty VALUES(489221823,'Richard Jackson',33);
INSERT INTO faculty VALUES(548977562,'Ulysses Teach',20)";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>