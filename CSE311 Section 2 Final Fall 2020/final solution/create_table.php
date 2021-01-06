<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "cse311_section_2");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
// student table
 $sql = "create table student(
snum numeric(9,0) primary key NOT NULL,
sname varchar(30),
major varchar(25),
level varchar(2),
age numeric(3,0)
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// faculty table
 $sql = " create table faculty(
    fid numeric(9,0) primary key NOT NULL,
    fname varchar(30),
    deptid numeric(2,0)
    )";

    if(mysqli_query($link, $sql)){
        echo "Table created successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

// class table
   $sql = " create table class(
        name varchar(40) primary key NOT NULL,
        meets_at varchar(20),
        room varchar(10),
        fid numeric(9,0),
        foreign key (fid) references faculty(fid)
        )";

    if(mysqli_query($link, $sql)){
        echo "Table created successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

   //enrolled table
   
  $sql = " create table enrolled(
    snum numeric(9,0),
    cname varchar(40),
    primary key(snum,cname),
    foreign key (snum) references
    student(snum),
    foreign key (cname) references
    class(name)
    )";

    if(mysqli_query($link, $sql)){
        echo "Table created successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // suppliers table
   $sql = " create table suppliers(
        sid int(9) primary key,
        sname varchar(30),
        address varchar(40)
        )";

        if(mysqli_query($link, $sql)){
            echo "Table created successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    // parts table
   $sql = " create table parts(
        pid int(9) primary key,
        pname varchar(40),
        color varchar(15)
        )";

        if(mysqli_query($link, $sql)){
            echo "Table created successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

       //catalog table
     $sql = "  create table catalog(
        sid int(9),
        pid int(9),
        cost int(10),
        primary key(sid,pid),
        foreign key(sid) references suppliers(sid),
        foreign key(pid) references parts(pid)
         )"; 

        if(mysqli_query($link, $sql)){
            echo "Table created successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
 
// Close connection
mysqli_close($link);
?>