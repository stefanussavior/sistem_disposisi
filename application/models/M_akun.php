<?php
class M_akun extends CI_Model
{
    function tampil_data_akun()
    {
        $query = $this->db->query("SELECT * FROM admin");
        return $query;
    }
}