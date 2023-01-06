<?php 
defined('BASEPATH') or exit('No Access Scripted Allowed');
class M_surat_keluar extends CI_Model
{
    private $table = "surat_keluar";
    function tampil_surat_keluar()
    {
        $query = $this->db->query("SELECT * FROM surat_keluar ORDER BY tanggal_surat_keluar ASC");
        return $query;
    }

    function edit_surat_keluar($id,$tanggal_surat_keluar,$nomor_surat_keluar,$tujuan_surat,$perihal_surat_keluar)
    {
        $query = $this->db->query("UPDATE surat_keluar SET tanggal_surat_keluar='$tanggal_surat_keluar',nomor_surat_keluar='$nomor_surat_keluar',tujuan_surat='$tujuan_surat',perihal_surat_keluar='$perihal_surat_keluar' WHERE id='$id'");
        return $query;
    }

    function hapus_surat_keluar($id)
    {
        $query = $this->db->query("DELETE FROM surat_keluar WHERE id='$id'");
        return $query;
    }

    function get_cetak_surat_keluar($id)
    {
        return $this->db->get_where($this->table, ["id"=>$id])->row();
    }

    function get_tampil_surat_keluar()
    {
        return $this->db->get('surat_keluar')->result();
    }
}