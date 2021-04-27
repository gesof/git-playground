<?php
/**
 * @project: git-playground
 * @author: alexjorj
 * Date: 4/26/21
 * Time: 5:57 PM
 */

class DBService
{
    private $dbConfig;
    /** @var mysqli */
    private $conn;


    /**
     * DBService constructor.
     */
    public function __construct($dbConfig)
    {
        $this->dbConfig = $dbConfig;
    }

    public function connect()
    {
        if(!$this->conn) {
            // Create connection
            $this->conn = new mysqli( 'localhost', $this->dbConfig['username'], $this->dbConfig['password'] );

            // Check connection
            if ( $this->conn->connect_error ) {
                die( "Connection failed: " . $this->conn->connect_error );
            }
            $this->conn->select_db($this->dbConfig['database']);
        }
    }

    public function install()
    {
        $this->connect();
        $sql = "CREATE TABLE page (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `name` VARCHAR(30) NOT NULL,
            slug VARCHAR(30) NOT NULL,
            content text )";

        if ($this->conn->query($sql) !== TRUE) {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function readPage($slug)
    {
        $ret = null;
        $this->connect();
        $sql = "SELECT * FROM page WHERE slug='$slug'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $ret = $result->fetch_assoc();
        }
        return $ret;
    }

    public function savePage($name, $slug, $content)
    {
        $this->connect();
        // prepare and bind
        $stmt = $this->conn->prepare("INSERT INTO page (`name`, slug, content) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $slug, $content);

        $stmt->execute();

        return $this->conn->insert_id;
    }

    public function __destruct()
    {
        if($this->conn) {
            $this->conn->close();
        }
    }
}
