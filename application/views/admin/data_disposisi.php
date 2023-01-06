<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Masuk</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">
</head>
<body>
  <?php $this->load->view('menu'); ?>
  <br/>
  <h2 style="text-align: center;">Data Surat Masuk</h2>
  <!-- <img src="../../assets/image/logo_stikvinc.png" alt=""> -->
  <br/>
      <!-- button membuka modal -->
      <div class="pull-right">
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#largeModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Surat Disposisi</a>
      <a href="<?php echo base_url('index.php/Disposisi/cetak_surat_masuk'); ?>" target='_blank' class="btn btn-danger">Cetak Semua Data Disposisi</a>
      </div>
      <br/>
      <br/>
  <!-- table -->
  <table id="tabel_id" class="display">
    <thead> 
      <tr>
        <th>No</th>
        <th>Tanggal Terima Disposisi</th>
        <th>Nomor Surat Masuk</th>
        <th>Perihal Pengirim</th>
        <th>Asal Pengirim</th>
        <th>Penerima Disposisi</th>
        <th>Status</th>
        <th style="text-align: center; width: 20%;">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 

      $no=0;
        foreach ($disposisi->result_array() as $d) :
          $no++;
          $id = $d['id'];
          $nomor_surat_masuk = $d['nomor_surat_masuk'];
          $tanggal_terima = $d['tanggal_terima'];
          $tanggal_pengirim = $d['tanggal_pengirim'];
          $nomor_pengirim = $d['nomor_pengirim'];
          $asal_pengirim = $d['asal_pengirim'];
          $perihal_pengirim = $d['perihal_pengirim'];
          $ditujukkan_kepada = $d['ditujukkan_kepada'];
          $pemberi_disposisi = $d['pemberi_disposisi'];
          $penerima_disposisi = $d['penerima_disposisi'];
          $instruksi = $d['instruksi'];
          $status = $d['status'];
          $datetime = $d['datetime'];

      ?>

      <tr>
          <td style="text-align:center;"><?php echo $no; ?></td>
          <td><?php echo tanggal($tanggal_terima); ?></td>
          <td><?php echo $nomor_surat_masuk; ?></td>
          <td><?php echo $perihal_pengirim; ?></td>
          <td><?php echo $asal_pengirim; ?></td>
          <td><?php echo $penerima_disposisi; ?></td>
          <td><?php echo $status; ?></td>
          <td style="text-align:center;">
          <a class="btn btn-warning" href="#modalEditDisposisi<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit">Edit</span></a>
          <a class="btn btn-danger" href="#modalHapusDisposisi<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-hapus">Hapus</span></a>
          <a class="btn btn-primary" href="#modalLihatDisposisi<?php echo $id?>" data-toggle="modal" title="Lihat"><span class="fa fa-lihat">Lihat Data Surat Masuk</span></a>
          </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
    
      <!-- Modal ADD -->
      <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labellledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel">Tambah Data Surat Masuk</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Disposisi/simpanDataDisposisi'); ?>">
                  <div class="modal-body">
                  <form method="post" id="form">
    <div class="form-group">
        <label for="nomor_surat_masuk">Nomor Surat Masuk : </label>
        <input type="text" class="form-control" name="nomor_surat_masuk" placeholder="Masukkan Nomor Surat Masuk">
    </div>
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima : </label>
        <input type="date" class="form-control" name="tanggal_terima">
    </div>
    <h5 style="text-align: center;">PENGIRIM</h5>
    <div class="form-group">
        <label for="tanggal_pengirim">Tanggal Pengirim : </label>
        <input type="date" class="form-control" name="tanggal_pengirim" id="tanggal_pengirim">
    </div>
    <div class="form-group">
        <label for="nomor_pengirim">Nomor Pengirim : </label>
        <input type="text" class="form-control" name="nomor_pengirim" id="nomor_pengirim" placeholder="Masukkan Nomor Pengirim...">
    </div>
    <div class="form-group">
        <label for="asal_pengirim">Asal Pengirim : </label>
        <textarea class="form-control" name="asal_pengirim" id="asal_pengirim" cols="5" rows="2" placeholder="Masukkan asal pengirim..."></textarea>
    </div>
    <div class="form-group">
        <label for="perihal_pengirim">Perihal Pengirim : </label>
        <textarea class="form-control" name="perihal_pengirim" id="perihal_pengirim" cols="5" rows="2" placeholder="Masukkan asal pengirim..."></textarea>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <input type="text" class="form-control" name="ditujukkan_kepada" id="ditujukkan_kepada" placeholder="Masukkan Ditujukkan Kepada....">
    </div>
  
        <h5 style="text-align: center;">DISPOSISI</h5>
    <div class="form-group">
        <label for="pemberi_disposisi">Pemberi Disposisi</label>
        <input type="text" class="form-control" name="pemberi_disposisi" id="pemberi_disposisi" value="Arief Widya Prasetya, M.Kep., Ners" readonly>
    </div>
    <div class="form-group">
        <label for="penerima_disposisi">Penerima Disposisi : </label>
        <textarea class="form-control" name="penerima_disposisi" id="penerima_disposisi" cols="2" rows="5"></textarea>
    </div>
      
    <div class="form-group">
                <label for="instruksi">Instruksi : </label>
                <textarea class="form-control" name="instruksi" id="instruksi" cols="2" rows="5"></textarea>
    </div>
    <div class="form-group">
                <label for="status">Status : </label>
                <select name="status" id="status" class="form-control">
                    <option value=""></option>
                    <option value="BELUM">Belum</option>
                    <option value="PROSES">Proses</option>
                    <option value="SELESAI">Selesai</option>
                </select>
    </div>

    <div class="form-group">
            <label for="Output">Output : </label>
            <div class="form-check" style="text-align:left;">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Laporan Kegiatan">
                Laporan Kegiatan
              </label>
              <br/>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Sertifikat">
                Sertifikat
              </label>
              <br/>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Keterangan">
                Keterangan
              </label>
            </div>
    </div>

    
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
        <button class="btn btn-primary">Submit</button>
    </div>
</form>
                  </div>
              </form>
          </div>
          </div>
      </div>


      <!-- Modal Hapus -->

      <?php 
        foreach ($disposisi->result_array() as $d) {
          $id = $d['id'];
          $nomor_surat_masuk = $d['nomor_surat_masuk'];
          $tanggal_terima = $d['tanggal_terima'];
          $tanggal_pengirim = $d['tanggal_pengirim'];
          $nomor_pengirim = $d['nomor_pengirim'];
          $asal_pengirim = $d['asal_pengirim'];
          $perihal_pengirim = $d['perihal_pengirim'];
          $ditujukkan_kepada = $d['ditujukkan_kepada'];
          $pemberi_disposisi = $d['pemberi_disposisi'];
          $penerima_disposisi = $d['penerima_disposisi'];
          $instruksi = $d['instruksi'];
          $status = $d['status'];
          $datetime = $d['datetime'];
        
      ?>

<div id="modalHapusDisposisi<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

    <h3 class="modal-title" id="myModalLabel">Hapus Data Surat Masuk</h3>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
        <form class="form-horizontal" action="<?php echo base_url('index.php/Disposisi/hapusDisposisi') ?>" method="post">
          <div class="modal-body">
              <p>Apakah Yakin anda meghapus data surat masuk ini...?</p>
              <p>Dengan Nomor Surat Masuk : <?php echo $nomor_surat_masuk; ?></p>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
          </div>
          <div class="modal-footer">
        <button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Batal</button>
        <button class="btn btn-danger">Hapus</button>
    </div>
        </form>
        </div>
        </div>
      </div>
      <?php } ?>

          <!-- Modal Edit -->
          <?php 
        foreach ($disposisi->result_array() as $d) {
          $id = $d['id'];
          $nomor_surat_masuk = $d['nomor_surat_masuk'];
          $tanggal_terima = $d['tanggal_terima'];
          $tanggal_pengirim = $d['tanggal_pengirim'];
          $nomor_pengirim = $d['nomor_pengirim'];
          $asal_pengirim = $d['asal_pengirim'];
          $perihal_pengirim = $d['perihal_pengirim'];
          $ditujukkan_kepada = $d['ditujukkan_kepada'];
          $pemberi_disposisi = $d['pemberi_disposisi'];
          $penerima_disposisi = $d['penerima_disposisi'];
          $instruksi = $d['instruksi'];
          $status = $d['status'];
          $output = $d['output'];
          $datetime = $d['datetime'];
        
      ?>
          <div id="modalEditDisposisi<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="myModalLabel">Edit Data Disposisi</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <form class="form-horizontal" action="<?php echo base_url('index.php/Disposisi/editDataDisposisi') ?>" method="post">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nomor_surat_masuk">Nomor Surat Masuk : </label>
        <input type="text" class="form-control" name="nomor_surat_masuk" value="<?php echo $nomor_surat_masuk; ?>">
    </div>
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima : </label>
        <input type="date" class="form-control" name="tanggal_terima" value="<?php echo $tanggal_terima; ?>">
    </div>
    <h5 style="text-align: center;">PENGIRIM</h5>
    <div class="form-group">
        <label for="tanggal_pengirim">Tanggal Pengirim : </label>
        <input type="date" class="form-control" name="tanggal_pengirim" id="tanggal_pengirim" value="<?php echo $tanggal_pengirim; ?>">
    </div>
    <div class="form-group">
        <label for="nomor_pengirim">Nomor Pengirim : </label>
        <input type="text" class="form-control" name="nomor_pengirim" id="nomor_pengirim" value="<?php echo $nomor_pengirim; ?>">
    </div>
    <div class="form-group">
        <label for="asal_pengirim">Asal Pengirim : </label>
        <textarea class="form-control" name="asal_pengirim" id="asal_pengirim" cols="5" rows="2"><?php echo $asal_pengirim; ?></textarea>
    </div>
    <div class="form-group">
        <label for="perihal_pengirim">Perihal Pengirim : </label>
        <textarea class="form-control" name="perihal_pengirim" id="perihal_pengirim" cols="5" rows="2"><?php echo $perihal_pengirim; ?></textarea>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <input type="text" class="form-control" name="ditujukkan_kepada" id="ditujukkan_kepada" value="<?php echo $ditujukkan_kepada ?>">
    </div>
  
        <h5 style="text-align: center;">DISPOSISI</h5>
    <div class="form-group">
        <label for="pemberi_disposisi">Pemberi Disposisi</label>
        <input type="text" class="form-control" name="pemberi_disposisi" id="pemberi_disposisi" value="Arief Widya Prasetya, M.Kep., Ners" readonly>
    </div>
    <div class="form-group">
        <label for="penerima_disposisi">Penerima Disposisi : </label>
        <textarea class="form-control" name="penerima_disposisi" id="penerima_disposisi" cols="2" rows="5"><?php echo $penerima_disposisi;?></textarea>
    </div>
      
    <div class="form-group">
                <label for="instruksi">Instruksi : </label>
                <textarea class="form-control" name="instruksi" id="instruksi" cols="2" rows="5"><?php echo $instruksi; ?></textarea>
    </div>
    <div class="form-group">
                <label for="status">Status : </label>
                <select name="status" id="status" class="form-control">
                    <option value=""></option>
                    <option value="BELUM">Belum</option>
                    <option value="PROSES">Proses</option>
                    <option value="SELESAI">Selesai</option>
                </select>
    </div>

    <div class="form-group">
            <label for="Output">Output : </label>
            <div class="form-check" style="text-align:left;">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Laporan Kegiatan">
                Laporan Kegiatan
              </label>
              <br/>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Sertifikat">
                Sertifikat
              </label>
              <br/>
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="output[]" value="Keterangan">
                Keterangan
              </label>
            </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
        <button class="btn btn-primary">Submit</button>
    </div>

                </div>
            </form>
            </div>
            </div>
          </div>
      <?php } ?>

      <!-- Modal Lihat Disposisi -->
      <?php 
        foreach ($disposisi->result_array() as $d) {
          $id = $d['id'];
          $nomor_surat_masuk = $d['nomor_surat_masuk'];
          $tanggal_terima = $d['tanggal_terima'];
          $tanggal_pengirim = $d['tanggal_pengirim'];
          $nomor_pengirim = $d['nomor_pengirim'];
          $asal_pengirim = $d['asal_pengirim'];
          $perihal_pengirim = $d['perihal_pengirim'];
          $ditujukkan_kepada = $d['ditujukkan_kepada'];
          $pemberi_disposisi = $d['pemberi_disposisi'];
          $penerima_disposisi = $d['penerima_disposisi'];
          $instruksi = $d['instruksi'];
          $status = $d['status'];
          $output = $d['output'];
          $datetime = $d['datetime'];
        
      ?>
          <div id="modalLihatDisposisi<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
            <h3 class="modal-title" id="myModalLabel">Lihat Data Surat Masuk</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            </div>
            <form class="form-horizontal" action="#" method="post">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nomor_surat_masuk">Nomor Surat Masuk : </label>
          <h3><?php echo $nomor_surat_masuk;?></h3>
    </div>
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima : </label>
        <h4><?php echo tanggal($tanggal_terima);?></h4>
    </div>
    <h5 style="text-align: center;">PENGIRIM</h5>
    <div class="form-group">
        <label for="tanggal_pengirim">Tanggal Pengirim : </label>
        <h4><?php echo tanggal($tanggal_pengirim); ?></h4>
    </div>
    <div class="form-group">
        <label for="nomor_pengirim">Nomor Pengirim : </label>
          <h4><?php echo $nomor_pengirim; ?></h4>
    </div>
    <div class="form-group">
        <label for="asal_pengirim">Asal Pengirim : </label>
        <p><?php echo $asal_pengirim; ?></p>
    </div>
    <div class="form-group">
        <label for="perihal_pengirim">Perihal Pengirim : </label>
        <p><?php echo $perihal_pengirim; ?></p>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <p><?php echo $ditujukkan_kepada; ?></p>
    </div>
  
        <h5 style="text-align: center;">DISPOSISI</h5>
    <div class="form-group">
        <label for="pemberi_disposisi">Pemberi Disposisi : </label>
        <h4>Arief Widya Prasetya, M.Kep., Ners</h4>
    </div>
    <div class="form-group">
        <label for="penerima_disposisi">Penerima Disposisi : </label>
        <h4><?php echo "<br/>" . $penerima_disposisi; ?></h4>
    </div>
      
    <div class="form-group">
                <label for="instruksi">Instruksi : </label>
              <p><?php echo $instruksi; ?></p>
    </div>
    <div class="form-group">
                <label for="status">Status : </label>
                <h4><?php echo $status; ?></h4>
    </div>
    <div class="form-group">
            <label for="output">Output : </label>
            <h4><?php echo $output; ?></h4>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
        <a class="btn btn-info" href="<?php echo base_url();?>index.php/Disposisi/get_cetak_surat_masuk/<?php echo $id;?>" target="_blank">Cetak Surat Masuk</a>
    </div>
                </div>
            </form>
            </div>
            </div>
          </div>
      <?php } ?>



  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function () {
      
      $('#tabel_id').DataTable();

    });
  </script>
</body>
</html>