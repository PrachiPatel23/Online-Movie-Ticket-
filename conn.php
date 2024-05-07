<?php

class connec
{
    public $username = "root";
    public $password = "";
    public $server_name = "localhost";
    public $db_name = "movie_ticket_booking";
    public static $conn;

    function __construct()
    {
        self::$conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
        if (self::$conn->connect_error) {
            die("Connection Failed");
        }
    }

    function selectAll($table_name)
    {
        $sql = "SELECT * FROM $table_name";
        $result = self::$conn->query($sql);
        return $result;
    }

    function selectById($table_name, $id)
    {
        $sql = "SELECT * FROM $table_name WHERE id=$id";
        $result = self::$conn->query($sql);
        return $result;
    }

    function insert($query)
    {
        if($this->conn->query($query)===TRUE)
        {
            echo '<script> alert("We Will Contact You Soon On Your Email Address");</script>';
                //echo "interested";
        }
        else
        {
            echo '<script> alert("'.$this->conn->error.'");</script>';
                //echo $this->conn->error;
        }
    }
}
?>
