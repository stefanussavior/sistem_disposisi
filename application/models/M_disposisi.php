<?php
defined('BASEPATH') or exit('No Access Scripted Allowed');

class M_disposisi extends CI_Model {

    private $table = "disposisi";

    function tampilDisposisi()
    {
        $query = $this->db->query("SELECT * FROM disposisi ORDER BY tanggal_terima DESC");
        return $query;
    }

    function GetNsm($id = '')
    {
        return $this->db->get_where('disposisi',array('id' => $id))->row();
    }

    function hapusDisposisi($id)
    {
        $hasil = $this->db->query("DELETE FROM disposisi WHERE id='$id'");
        return $hasil;
    }

    function jumlah_data()
    {
        return $this->db->get('disposisi')->num_rows();
    }
    
    function view_row()
    {
        return $this->db->get('disposisi')->result();
    }

    function ambil_id($id = '')
    {
        return $this->db->get_where('disposisi',array('id' => $id))->row();
    }

    function suratKeluar()
    {
        $this->db->order_by("id","asc");
        return $this->db->get('surat_keluar')->result();
    }

    function get_surat_keluar($id)
    {
        return $this->db->get_where('surat_keluar',array('id'=>$id))->row();
    }

    function get_cetak_dokumen_disposisi($id)
    {
        return $this->db->get_where('disposisi',array('id'=>$id))->row();
    }

    function editDataDisposisi($id,$nomor_surat_masuk,$tanggal_terima,$tanggal_pengirim,$nomor_pengirim,$asal_pengirim,$perihal_pengirim,$ditujukkan_kepada,$penerima_disposisi,$instruksi,$status,$output)
    {
        $hasil = $this->db->query("UPDATE disposisi SET nomor_surat_masuk='$nomor_surat_masuk',tanggal_terima='$tanggal_terima',tanggal_pengirim='$tanggal_pengirim',nomor_pengirim='$nomor_pengirim',asal_pengirim='$asal_pengirim',perihal_pengirim='$perihal_pengirim',ditujukkan_kepada='$ditujukkan_kepada',penerima_disposisi='$penerima_disposisi',instruksi='$instruksi',status='$status',output='$output' WHERE id='$id'");
        return $hasil;
    }

    function get_cetak_surat_masuk($id)
    {
        return $this->db->get_where($this->table, ["id"=>$id])->row();
    }

    function cetak_surat_masuk()
    {
        $this->db->order_by("tanggal_terima","ASC");
        return $this->db->get('disposisi')->result();
    }
}