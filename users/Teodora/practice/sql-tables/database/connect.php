<?php

// Create connection
$conn = new mysqli("localhost", "root", "", "practica");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error) . "<br>". "<br>";
}

$sql_member = "CREATE TABLE member (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    movie_id INT NOT NULL)";

if ($conn->query($sql_member) === TRUE) {
    echo "Table Member created successfully" . "<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$sql_movie = "CREATE TABLE movie (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL)";

if ($conn->query($sql_movie) === TRUE) {
    echo "Table Movie created successfully" . "<br>". "<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$sql_insert_into_member = "INSERT INTO member (first_name, last_name, movie_id)
        VALUES ('Adam', 'Smith', 1)";

if ($conn->query($sql_insert_into_member) === TRUE) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql_insert_into_member . "<br>" . $conn->error . "<br>". "<br>";
}

$sql_insert_into_movie = "INSERT INTO movie (title, category)
        VALUES ('ASSASIN&apos;S CREED: EMBERS', 'Animation')";

if ($conn->query($sql_insert_into_movie) === TRUE) {
    echo "New record created successfully" . "<br>". "<br>";
} else {
    echo "Error: " . $sql_insert_into_movie . "<br>" . $conn->error . "<br>". "<br>";
}

$sql_show_member = "SELECT * FROM member";
$result_member = $conn->query($sql_show_member);
if ($result_member->num_rows > 0) {
    // output data of each row
    while($row = $result_member->fetch_assoc()) {
        echo "id: " . $row["id"] . "<br>" . "FirstName: " . $row["first_name"]. "<br>" . "LastName: " .
            $row["last_name"]. "<br>" . "Movie_ID: " . $row["movie_id"] . "<br>". "<br>";
    }
} else {
    echo "0 results". "<br>";
}

$sql_show_movie = "SELECT * FROM movie";
$result_movie = $conn->query($sql_show_movie);
if ($result_movie->num_rows > 0) {
    // output data of each row
    while($row = $result_movie->fetch_assoc()) {
        echo "id: " . $row["id"] . "<br>" . "Title: " . $row["title"]. "<br>" . "Category: " .
            $row["category"]. "<br>". "<br>";
    }
} else {
    echo "0 results". "<br>";
}

$update = "SELECT member.first_name, member.last_name, movie.title, movie.category
            From member 
            LEFT JOIN movie ON member.movie_id = movie.id";
$result_left_join = $conn->query($update);
if ($result_left_join->num_rows > 0) {
    // output data of each row
    while($row = $result_left_join->fetch_assoc()) {
        echo "FirstName: " . $row["first_name"] . "<br>" . "LastName: " . $row["last_name"]. "<br>"
            . "Category: " . $row["category"]. "<br>" . "Title: " . $row["title"] . "<br>". "<br>";
    }
} else {
    echo "0 results". "<br>";
}

$drop_movie = "DROP TABLE movie";
if ($conn->query($drop_movie) === TRUE) {
    echo "Table movie deleted successfully.". "<br>";
}

$drop_member = "DROP TABLE member";
if ($conn->query($drop_member) === TRUE) {
    echo "Table member deleted successfully.";
}

$conn->close();
