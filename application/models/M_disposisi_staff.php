<?php 
class M_disposisi_staff extends CI_Model
{
    function tampil_disposisi_staff()
    {
        return $this->db->get('disposisi')->result();
    }

    function lihat_disposisi_staff()
    {
        return $this->db->get('disposisi')->result();
    }
}