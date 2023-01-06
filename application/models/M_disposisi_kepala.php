<?php
class M_disposisi_kepala extends CI_Model
{
    function tampil_disposisi_kepala()
    {
        $this->db->order_by('nomor_surat_masuk','ASC');
        return $this->db->from('disposisi')->get()->result();
    }

    function GetNsm($nomor_surat_masuk = '')
    {
        return $this->db->get_where('disposisi',array('nomor_surat_masuk' => $nomor_surat_masuk))->row();
    }
}