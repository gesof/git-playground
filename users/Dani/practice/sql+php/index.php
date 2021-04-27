<?php
//baza de date

$conn = mysqli_connect("localhost","root","");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$db = "CREATE DATABASE myDaB";
if ($conn->query($db) === TRUE) {
  echo nl2br("Database created successfully\n");
} else {
  echo nl2br("Error creating database: " . $conn->error."\n");
}


$conn = mysqli_connect("localhost","root","","myDaB");


// sql to create table
$table1 = "CREATE TABLE member (
idMember INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
idM INT(10) NOT NULL
)";

if ($conn->query($table1) === TRUE) {
  echo nl2br("Table member created successfully\n");
} else {
  echo "Error creating table: " . $conn->error;
}
$table2 = "CREATE TABLE movie (
idMovie INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
year INT(4)
)";

if ($conn->query($table2) === TRUE) {
  echo nl2br("Table movie created successfully\n");
} else {
  echo "Error creating table: " . $conn->error;
}

//inserare in tabele 
$sql1 = "INSERT INTO member (lastname, email, idM)
VALUES ('Dani', 'trandafirdaniela5@gmail.com','2')";

if ($conn->query($sql1) === TRUE) {
  echo nl2br("New record created successfully\n");
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}
$sql2 = "INSERT INTO movie (name, year)
VALUES ('titanic', '1986')";
if ($conn->query($sql2) === TRUE) {
  echo nl2br("New record created successfully\n");
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}
$sql3 = "INSERT INTO movie (name, year)
VALUES ('ultimele dorinte', '2007')";

if ($conn->query($sql3) === TRUE) {
  echo nl2br("New record created successfully\n");
} else {
  echo "Error: " . $sql3 . "<br>" . $conn->error;
}

$leftjoin="SELECT  member.lastname,member.email,movie.name,movie.year
FROM member
LEFT JOIN movie ON movie.idMovie = member.idM";

if ($conn->query($leftjoin) === TRUE) {
  echo nl2br("leftjoin created successfully\n");
} else {
  echo "Error: " . $leftjoin . "<br>" . $conn->error;
}


//stergere tabele
// $delete1 = "DROP TABLE member";
//  if ($conn->query($delete1) === TRUE) {
//   echo nl2br("Delete member table\n");
// } else {
//   echo "Error: " . $delete1 . "<br>" . $conn->error;
// }
// $delete2 = "DROP TABLE movie";
//  if ($conn->query($delete2) === TRUE) {
//   echo nl2br("Delete movie table\n");
// } else {
//   echo "Error: " . $delete2 . "<br>" . $conn->error;
// }


$conn->close();
?>