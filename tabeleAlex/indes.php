<?php
include "header.php";
require_once "connect.php";
?>
<h1>members</h1>
<?php
$comanda = isset($_REQUEST['comanda']) ? $_REQUEST['comanda'] : "";
if (!empty($comanda)) {
    switch ($comanda) {
        case 'add':
            $first_name = $_REQUEST["first_name"];
            $last_name = $_REQUEST["last_name"];
            $movie_id =$_REQUEST["movie_id"];
            $title =$_REQUEST["title"];
            $category=$_REQUEST["category"];
            
            $sql = "INSERT INTO members(first_name, last_name,movie_id) VALUES ('$first_name','$last_name','$movie_id')";
            
            if (!mysqli_query($conexiune, $sql)) {
                die('Error: ' . mysqli_error($conexiune));
            }
            echo "<div class='succes'>Intrare adaugata cu succes</div>";

            $sql="INSERT INTO movies(title,category) VALUES('$title','$category')";
            break;
        case 'delete':
            $id = $_REQUEST["id"];
            
            $sql = "DELETE FROM members WHERE id=$id";
            if (!mysqli_query($conexiune, $sql)) {
                die('Error: ' . mysqli_error($conexiune));
            }
            echo "<div class='succes'>Intrarea cu id-ul $id a fost stearsa cu succes</div>";
            break;
        case 'edit':
            $id = $_REQUEST["id"];
            
            $sql = "SELECT * FROM members WHERE id=$id";
            $result = mysqli_query($conexiune, $sql);
            if ($row = mysqli_fetch_array($result)) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $movie_id = $row['movie_id'];
?>
                
                <h3>Editare</h3>
                <form action="index.php" method="post">
                    <input name="comanda" type="hidden" value="update" />
                    <input name="id" type="hidden" value="<?php echo $id; ?>" />
                    first_name: <input type="text" name="first_name" value="<?php echo $nume; ?>" />
                    last_name: <input type="text" name="last_name" value="<?php echo $numar; ?>" />
                    movie_id:<input type="text" name="movie_id" value="<?php echo $movie_id; ?>"/>
                    <input type="submit" value="Update" />
                </form>
                
<?php
            } else {
                echo "<div class='error'>Intrarea cu id-ul $id nu exista!</div>";
            }
            break;
        case 'update':
            $id = $_REQUEST["id"];
            $first_name = $_REQUEST["first_name"];
            $last_name = $_REQUEST["last_name"];
            $movie_id =$_REQUEST["movie_id"];
            
            $sql = "UPDATE members SET first_name='$first_name', last_name='$last_name' ,movie_id ='$movie_id' WHERE id=$id";
            if (!mysqli_query($conexiune, $sql)) {
                die('Error: ' . mysqli_error($conexiune));
                
            } else {
                echo "<div class='succes'>Intrarea cu id-ul $id a fost actualizata cu succes!</div>";
            }
            break;
    }
}
?>
<?php

$query = "SELECT * FROM members";
$result = mysqli_query($conexiune, $query);
if (mysqli_num_rows($result)) {
    print("<table border='1' cellspacing='0'>\n");
    print("<tr>\n");
    print("<th>#</th><th width='300'>first_name</th><th width='100'>last_name</th><th width ='100'>movies_id</th><th>Sterge</th>
<th>Edit</th>");
    print("</tr>\n");
    while ($row = mysqli_fetch_array($result)) {
        print("<tr>\n");
        print("<td>" . $row['id'] . "</td>\n");
        print("<td>" . $row['first_name'] . "</td>\n");
        print("<td>" . $row['last_name'] . "</td>\n");
        print("<td>" .$row['movie_id'] ."</td\n");
        print("<td><a href='index.php?comanda=delete&id=" . $row['id'] . "'>Delete</a></td>\n");
        print("<td><a href='index.php?comanda=edit&id=" . $row['id'] . "'>Edit</a></td>\n");
        print("</tr>\n");
    }
    print("</table>");
} else {
    print "Nu exista intrari in tabela!";
}
?>


<form action="index.php" method="post">
    <input name="comanda" type="hidden" value="add" />
    first_name: <input type="text" name="first_name" />
    last_name: <input type="text" name="last_name" />
    movie_id:<input type="text" name="movie_id" />
    <input type="submit" value="members" />
</form>

<?php

$query = "SELECT * FROM movies";
$result = mysqli_query($conexiune, $query);
if (mysqli_num_rows($result)) {
    print("<table border='1' cellspacing='0'>\n");
    print("<tr>\n");
    print("<th>#</th><th width='300'>title</th><th width='100'>category</th><th>Sterge</th>
<th>Edit</th>");
    print("</tr>\n");
    while ($row = mysqli_fetch_array($result)) {
        print("<tr>\n");
        print("<td>" . $row['id'] . "</td>\n");
        print("<td>" . $row['title'] . "</td>\n");
        print("<td>" . $row['category'] . "</td>\n");
        print("<td><a href='index.php?comanda=delete&id=" . $row['id'] . "'>Delete</a></td>\n");
        print("<td><a href='index.php?comanda=edit&id=" . $row['id'] . "'>Edit</a></td>\n");
        print("</tr>\n");
    }
    print("</table>");
} else {
    print "Nu exista intrari in tabela!";
}
?>

<form action="index.php" method="post">
    <input name="comanda" type="hidden" value="add" />
    title: <input type="text" name="title" />
category: <input type="text" name="category" />
    <input type="submit" value="movies" />
</form>
