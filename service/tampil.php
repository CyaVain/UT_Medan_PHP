<?php
class tampil
{

    public function __construct()
    {
        $db = new database;
        $this->conn = $db->conn;
    }
    public function TampilData()
    {
        $query = "SELECT * FROM mahasiswa";
        $hasil = $this->conn->query($query);
        if ($hasil->num_rows > 0) {
            return $hasil;
        } else {
            return false;
        }
    }
}
?>