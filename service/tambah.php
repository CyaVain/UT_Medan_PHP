<?php
class tambah
{

    public function __construct()
    {
        $db = new database;
        $this->conn = $db->conn;
    }
    public function create($inputData)
    {
        $data = "'" . implode("','", $inputData) . "'";

        $query = "INSERT INTO mahasiswa (name,address,age) VALUES($data)";
        $hasil = $this->conn->query($query);
        if ($hasil) {
            return true;
        } else {
            return false;
        }
    }
}
?>