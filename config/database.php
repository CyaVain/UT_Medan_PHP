<?php
// $host = "localhost";
// $user = "root";
// $pass = "root";
// $database = "db_akademik";
// $db = new mysqli($host, $user, $pass, $database);
// if ($db->connect_error) {
//     die ("" . $db->connect_error);
// }

class Database
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (!$conn) {
            die ("Database Failed To Connect");
        }
        return $this->conn = $conn;
    }

}
?>