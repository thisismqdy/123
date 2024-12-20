<?php
include_once 'buku.php';
class LokerBuku extends Buku
{
    public function tampilDataBuku($loker_buku)
    {
        $hasil = [];
        $data = mysqli_query(
            $this->conn,
            "SELECT * FROM buku
             WHERE loker_buku='" . $loker_buku . "'"
        );
        while ($row = mysqli_fetch_assoc($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
?>
