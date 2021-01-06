<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO parts VALUES (1,'Left Handed Bacon Stretcher Cover','Red');
INSERT INTO parts VALUES (2,'Smoke Shifter End','Black');
INSERT INTO parts VALUES (3,'Acme Widget Washer','Red');
INSERT INTO parts VALUES (4,'Acme Widget Washer','Silver');
INSERT INTO parts VALUES (5,'I Brake for Crop Circles Sticker','Translucent');
INSERT INTO parts VALUES (6,'Anti-Gravity Turbine Generator','Cyan');
INSERT INTO parts VALUES (7,'Anti-Gravity Turbine Generator','Magenta');
INSERT INTO parts VALUES (8,'Fire Hydrant Cap','Red');
INSERT INTO parts VALUES (9,'7 Segment Display','Green')";


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>