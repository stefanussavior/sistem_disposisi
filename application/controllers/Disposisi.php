<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_disposisi');
        $this->load->helper(array('url'));
        $this->load->library('Pdf');
        $this->load->helpers('stefanus_helper');
        // $this->load->library('form_validation');
    }

    function tampilDisposisi()
    {
        $data['disposisi'] = $this->M_disposisi->tampilDisposisi();
        $this->load->view('admin/data_disposisi',$data);
    }

    function tampil_data_disposisi()
    {
        $data = $this->M_disposisi->tampil_data_disposisi();
        echo json_encode($data);
    }

    function tambahDisposisi()
    {
        $aksi = $this->input->post('aksi');
        $this->load->view('admin/tambah_disposisi',$aksi);
    }

    function editDisposisi()
    {
        $id = $this->input->post('id');
        $data['disposisi'] = $this->M_disposisi->GetNsm($id);
        $this->load->view('admin/edit_disposisi',$data);
    }

    // function hapusDisposisi()
    // {
    //     $id = $this->input->post('id');
    //     $data['disposisi'] = $this->M_disposisi->GetNsm($id);
    //     $this->load->view('admin/hapus_disposisi',$data);
    // }

    function simpanDataDisposisi()
    {
        $date = date('Y-m-d');
        $checkbox = $this->input->post('output');
        $output = implode(" , " , $checkbox);
            $data = array(
                'nomor_surat_masuk' => $this->input->post('nomor_surat_masuk'),
                'tanggal_terima' => $this->input->post('tanggal_terima'),
                'tanggal_pengirim' => $this->input->post('tanggal_pengirim'),
                'nomor_pengirim' => $this->input->post('nomor_pengirim'),
                'asal_pengirim' => $this->input->post('asal_pengirim'),
                'perihal_pengirim' => $this->input->post('perihal_pengirim'),
                'ditujukkan_kepada' => $this->input->post('ditujukkan_kepada'),
                'pemberi_disposisi' => $this->input->post('pemberi_disposisi'),
                'penerima_disposisi' => $this->input->post('penerima_disposisi'),
                'instruksi' => $this->input->post('instruksi'),
                'status' => $this->input->post('status'),
                'output' => $output,
            );
        $this->db->set('datetime',$date);
        $this->db->insert('disposisi',$data);
        redirect('Disposisi/tampilDisposisi');
        
    }

    function editDataDisposisi()
    {
        $date = date('Y-m-d');
        $checkbox = $this->input->post('output');



        $id = $this->input->post('id');
        $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
        $tanggal_terima = $this->input->post('tanggal_terima');
        $tanggal_pengirim = $this->input->post('tanggal_pengirim');
        $nomor_pengirim = $this->input->post('nomor_pengirim');
        $asal_pengirim = $this->input->post('asal_pengirim');
        $perihal_pengirim = $this->input->post('perihal_pengirim');
        $ditujukkan_kepada = $this->input->post('ditujukkan_kepada');
        $penerima_disposisi = $this->input->post('penerima_disposisi');
        $instruksi = $this->input->post('instruksi');
        $status = $this->input->post('status');
        $output = implode(" , " , $checkbox);
        $this->db->set('datetime',$date);
        $this->M_disposisi->editDataDisposisi($id,$nomor_surat_masuk,$tanggal_terima,$tanggal_pengirim,$nomor_pengirim,$asal_pengirim,$perihal_pengirim,$ditujukkan_kepada,$penerima_disposisi,$instruksi,$status,$output);
        
        redirect('Disposisi/tampilDisposisi');
    }

    // function hapusDataDisposisi()
    // {
    //     $id = $this->input->post('id');
    //     $this->db->delete('disposisi',array('id' => $id));
    // }

    function lihatDataDisposisi()
    {
        $id = $this->input->post('id');
        $data['disposisi'] = $this->M_disposisi->GetNsm($id);
        $this->load->view('admin/lihat_data_disposisi',$data);
    }


    function accDisposisi()
    {
        $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
        // $this->db->delete('disposisi',array('nomor_surat_masuk' => $nomor_surat_masuk));
        $data = array(
            'status' => '3'
        );
        $this->db->where('nomor_surat_masuk',$nomor_surat_masuk);
        $this->db->update('disposisi',$data);
    }

    function userdata($user)
    {
        $this->session->set_userdata('ses_nama',$user);
    }

    function cetak()
    {
        $pdf = new FPDF('L','mm','Letter');
        $pdf->AddPage();



        // kop atas
        $pdf->SetFont('Arial','B',16);
        $pdf->image('assets/images/Logo STIKVINC.png',10,3,20,20);
        $pdf->Cell(0,3,'DAFTAR DATA DISPOSISI',0,1,'C');
        $pdf->Cell(0,10,'STIKES KATOLIK ST.VIINCENTIUS A PAULO',0,1,'C');
        $pdf->Cell(10,10,'',0,1);

        $pdf->SetFont('Arial','B',10);
        
        $pdf->Cell(8,6,'No',1,0,'C');
        $pdf->Cell(50,6,'Tanggal Disposisi Dibuat',1,0,'C');
        $pdf->Cell(50,6,'Perihal Pengirim',1,0,'C');
        $pdf->Cell(50,6,'Asal Pengirim',1,0,'C');
        $pdf->Cell(100,6,'Ditujukkan Kepada',1,1,'C');

        $pdf->SetFont('Arial','',10);
        $disposisi = $this->db->get('disposisi')->result();
        $no = 0;

        foreach ($disposisi as $d) {
            $pdf->Cell(8,6,$no,1,0,'C');
            $pdf->Cell(50,6,$d->datetime,1,0,'C');
            $pdf->Cell(50,6,$d->perihal_pengirim,1,0,'C');
            $pdf->Cell(50,6,$d->asal_pengirim,1,0,'C');
            $pdf->Cell(100,6,$d->ditujukkan_kepada,1,1,'C');
            $no++;
        }
        $pdf->Cell(10,10,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(0,0,'Yang Mengetahui',0,1,'R');

        $pdf->Cell(20,20,'',0,1);

        $pdf->Cell(0,0,$this->session->userdata('ses_nama'),0,1,'R');
        $filename = 'Data Disposisi.pdf';
        $pdf->Output($filename, 'D');
    }

    function get_cetak_dokumen_disposisi($id)
    {
        $data['disposisi'] = $this->M_disposisi->get_cetak_dokumen_disposisi($id);
        $this->load->view('admin/cetak',$data);
    }
    function cetak_id()
    {
        $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
        $data['disposisi'] = $this->M_disposisi->GetNsm($nomor_surat_masuk);
        $this->load->view('admin/cetak',$data);
    }

    function suratKeluar()
    {
        $data['surat_keluar'] = $this->M_disposisi->suratKeluar();
        $this->load->view('admin/surat_keluar/surat_keluar',$data);
    }

    function tambah_surat_keluar()
    {
        $aksi = $this->input->post('aksi');
        $this->load->view('admin/surat_keluar/tambah_surat_keluar',$aksi);
    }

    function simpan_surat_keluar()
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nomor_surat_keluar' => $this->input->post('nomor_surat_keluar'),
            'perihal_surat' => $this->input->post('perihal_surat'),
            'ditujukkan_kepada' => $this->input->post('ditujukkan_kepada')
        );
        $this->db->set('tanggal_surat_keluar',$date);
        $this->db->insert('surat_keluar',$data);
    }

    function hapus_surat_keluar()
    {
        $id = $this->input->post('id');
        $data['surat_keluar'] = $this->M_disposisi->get_surat_keluar($id);
        $this->load->view('admin/surat_keluar/hapus_surat_keluar',$data);
    }

    function delete_surat_keluar()
    {
        $id = $this->input->post('id');
        $this->db->delete('surat_keluar',array('id'=>$id));
    }

    function edit_surat_keluar()
    {
        $id = $this->input->post('id');
        $data['surat_keluar'] = $this->M_disposisi->get_surat_keluar($id);
        $this->load->view('admin/surat_keluar/edit_surat_keluar',$data);
    }

    function update_surat_keluar()
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'id' => $this->input->post('id'),
            'nomor_surat_keluar' => $this->input->post('nomor_surat_keluar'),
            'perihal_surat' => $this->input->post('perihal_surat'),
            'ditujukkan_kepada' => $this->input->post('ditujukkan_kepada')
        );
        $id = $this->input->post('id');
        $this->db->set('tanggal_surat_keluar',$date);
        $this->db->where('id',$id);
        $this->db->update('surat_keluar',$data);
    }

    function cetak_surat_keluar($id)
    {
        $data['surat_keluar'] = $this->M_disposisi->get_surat_keluar($id);
        $this->load->view('admin/surat_keluar/cetak_surat_keluar',$data);
    }

    function get_cetak_surat_masuk($id)
    {
        $data['disposisi'] = $this->M_disposisi->get_cetak_surat_masuk($id);
        $this->load->view('admin/get_cetak_surat_masuk',$data);
    }

    function hapusDisposisi()
    {
        $id = $this->input->post('id');
        $this->M_disposisi->hapusDisposisi($id);
        redirect('Disposisi/tampilDisposisi');
    }

    function cetak_surat_masuk()
    {
        $data['disposisi'] = $this->M_disposisi->cetak_surat_masuk();
        $this->load->view('admin/cetak_surat_masuk',$data);
    }
}