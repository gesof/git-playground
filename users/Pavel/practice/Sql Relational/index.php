<?php

$conn = new mysqli("localhost", "root", "", "myDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE member (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
movie_id INT(6) NOT NULL 
)";

$sql2 = "CREATE TABLE movie (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30) NOT NULL,
category VARCHAR(30) NOT NULL
)";

$sql3 = "INSERT INTO member (id, first_name, last_name, movie_id)
VALUES (1, 'John', 'Doe', '6')";

$sql4 = "INSERT INTO  movie (id, title, category)
VALUES (5, 'Real Steel(2012)', 'Animations')";


$sql5 = "INSERT INTO movie (id, title, category)
VALUES (6, 'Safe(2012)', 'Action')";

$sql6 = "SELECT member.id, member.first_name, member.last_name, member.movie_id, movie.id, movie.title, movie.category
FROM member
LEFT JOIN movie ON member.movie_id = movie.id";

$result = $conn->query($sql6);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}

$sql7 = "DROP TABLE member";
$sql8 = "DROP TABLE movie";

$conn->close();