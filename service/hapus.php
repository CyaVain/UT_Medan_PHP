<?php
class hapus
{

    public function __construct()
    {
        $db = new database;
        $this->conn = $db->conn;
    }
    public function hapusMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = '$id' ";
        $hasil = $this->conn->query($query);
        if ($hasil) {
            return true;
        } else {
            return false;
        }
    }
}
?>