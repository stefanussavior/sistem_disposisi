<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keluar</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">
</head>
<body>
  <?php $this->load->view('menu'); ?>
  <br/>
  <h2 style="text-align: center;">Surat Keluar</h2>
  <br/>
      <!-- button membuka modal -->
      <!-- button membuka modal -->
      <div class="pull-right">
      <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#largeModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Surat Keluar</a>
      <a href="<?php echo base_url('index.php/Surat_keluar/data_tampil_surat_keluar'); ?>" target='_blank' class="btn btn-danger">Cetak Data Semua Surat Keluar</a>
      </div>
      <br/>
      <br/>
  <!-- table -->
  <table id="tabel_id" class="display">
    <thead> 
      <tr>
        <th>No</th>
        <th>Tanggal Surat Keluar</th>
        <th>Nomor Surat Keluar</th>
        <th>Perihal Surat</th>
        <th>Tujuan Surat Keluar</th>
        <th style="text-align: center; width: 20%;">Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
$no=0;
  foreach ($surat_keluar->result_array() as $s) :
    $no++;
    $id = $s['id'];
    $tanggal_surat_keluar = $s['tanggal_surat_keluar'];
    $nomor_surat_keluar = $s['nomor_surat_keluar'];
    $perihal_surat_keluar = $s['perihal_surat_keluar'];
    $tujuan_surat = $s['tujuan_surat'];
    // $datetime = $s['datetime'];

?>

<tr>
    <td style="text-align:center;"><?php echo $no; ?></td>
    <td><?php echo tanggal($tanggal_surat_keluar); ?></td>
    <td><?php echo $nomor_surat_keluar; ?></td>
    <td><?php echo $perihal_surat_keluar; ?></td>
    <td><?php echo $tujuan_surat; ?></td>
    <td style="text-align:center;">
    <a class="btn btn-warning" href="#modalEditSuratKeluar<?php echo $id?>" data-toggle="modal" title="Edit"><span class="fa fa-edit">Edit</span></a>
    <a class="btn btn-danger" href="#modalHapusSuratKeluar<?php echo $id?>" data-toggle="modal" title="Hapus"><span class="fa fa-hapus">Hapus</span></a>
    <a class="btn btn-primary" href="#modalLihatSuratKeluar<?php echo $id?>" data-toggle="modal" title="Lihat"><span class="fa fa-lihat">Lihat Data Surat Keluar</span></a>
    </td>
</tr>
<?php endforeach; ?>
    </tbody>
  </table>

      <!-- modal add -->
  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labellledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel">Tambah Data Surat Keluar</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          </div>
            <?php 
            if ($this->session->flashdata('error') != '') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
            
            ?>

              <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Surat_keluar/simpan_surat_keluar'); ?>">
                  <div class="modal-body">  
                  <form method="post" id="form">
    <div class="form-group">
        <label for="tanggal_surat_keluar">Tanggal Surat Keluar : </label>
        <input type="date" class="form-control" name="tanggal_surat_keluar" placeholder="Masukkan Tanggal Surat Keluar">
    </div>
    <div class="form-group">
        <label for="nomor_surat_keluar">Nomor Surat Keluar : </label>
        <input type="text" class="form-control" name="nomor_surat_keluar" placeholder="Masukkan Nomor Surat Keluar...">
    </div>
    <div class="form-group">
        <label for="perihal_surat_keluar">Perihal Surat keluar : </label>
        <textarea name="perihal_surat_keluar" id="perihal_surat_keluar" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="tujuan_surat">Tujuan Surat : </label>
        <textarea name="tujuan_surat" id="tujuan_surat" cols="30" rows="10" class="form-control"></textarea>
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

      <!-- modal edit -->
<?php 
  foreach ($surat_keluar->result_array() as $s) :
    $id = $s['id'];
    $tanggal_surat_keluar = $s['tanggal_surat_keluar'];
    $nomor_surat_keluar = $s['nomor_surat_keluar'];
    $perihal_surat_keluar = $s['perihal_surat_keluar'];
    $tujuan_surat = $s['tujuan_surat'];
?>
<div class="modal fade" id="modalEditSuratKeluar<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labellledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel">Edit Data Surat Keluar</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Surat_keluar/edit_surat_keluar'); ?>">
                  <div class="modal-body">
                  <form method="post" id="form">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="tanggal_surat_keluar">Tanggal Surat Keluar : </label>
        <input type="date" class="form-control" name="tanggal_surat_keluar" value="<?php echo $tanggal_surat_keluar; ?>">
    </div>
    <div class="form-group">
        <label for="nomor_surat_keluar">Nomor Surat Keluar : </label>
        <input type="text" class="form-control" name="nomor_surat_keluar" value="<?php echo $nomor_surat_keluar; ?>">
    </div>
    <div class="form-group">
        <label for="perihal_surat_keluar">Perihal Surat keluar : </label>
        <textarea name="perihal_surat_keluar" id="perihal_surat_keluar" cols="30" rows="10" class="form-control"><?php echo $perihal_surat_keluar; ?></textarea>
    </div>
    <div class="form-group">
        <label for="tujuan_surat">Tujuan Surat : </label>
        <textarea name="tujuan_surat" id="tujuan_surat" cols="30" rows="10" class="form-control"><?php echo $tujuan_surat; ?></textarea>
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
<?php endforeach; ?>

    <!-- Modal Hapus -->

    <?php 
    foreach ($surat_keluar->result_array() as $s) :
    $id = $s['id'];
    $tanggal_surat_keluar = $s['tanggal_surat_keluar'];
    $nomor_surat_keluar = $s['nomor_surat_keluar'];
    $perihal_surat_keluar = $s['perihal_surat_keluar'];
    $tujuan_surat = $s['tujuan_surat'];
        
      ?>

<div id="modalHapusSuratKeluar<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

    <h3 class="modal-title" id="myModalLabel">Hapus Data Surat Keluar</h3>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

</div>
        <form class="form-horizontal" action="<?php echo base_url('index.php/Surat_keluar/hapus_surat_keluar') ?>" method="post">
          <div class="modal-body">
              <p>Apakah Yakin anda meghapus data surat masuk ini...?</p>
              <p>Dengan Nomor Surat keluar : <?php echo $nomor_surat_keluar; ?></p>
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
      <?php endforeach; ?>

      <!-- modal lihat surat keluar -->
      <?php 
  foreach ($surat_keluar->result_array() as $s) :
    $id = $s['id'];
    $tanggal_surat_keluar = $s['tanggal_surat_keluar'];
    $nomor_surat_keluar = $s['nomor_surat_keluar'];
    $perihal_surat_keluar = $s['perihal_surat_keluar'];
    $tujuan_surat = $s['tujuan_surat'];
?>
<div class="modal fade" id="modalLihatSuratKeluar<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labellledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h3 class="modal-title" id="myModalLabel">Lihat Data Surat Keluar</h3>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          </div>
              <form class="form-horizontal" method="post" action="#">
                  <div class="modal-body">
                  <form method="post" id="form">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
        <label for="tanggal_surat_keluar">Tanggal Surat Keluar : </label>
        <h4><?php echo tanggal($tanggal_surat_keluar); ?></h4>
    </div>
    <div class="form-group">
        <label for="nomor_surat_keluar">Nomor Surat Keluar : </label>
        <h3><?php echo $nomor_surat_keluar; ?></h3>
    </div>
    <div class="form-group">
        <label for="perihal_surat_keluar">Perihal Surat keluar : </label>
        <h4><?php echo $perihal_surat_keluar; ?></h4>
    </div>
    <div class="form-group">
        <label for="tujuan_surat">Tujuan Surat : </label>
        <h4><?php echo $tujuan_surat; ?></h4>
    </div>
    <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
        <a class="btn btn-info" href="<?php echo base_url();?>index.php/Surat_keluar/get_cetak_surat_keluar/<?php echo $id;?>" target="_blank">Cetak Surat Keluar</a>
    </div>
</form>
                  </div>
              </form>
          </div>
          </div>
      </div>
<?php endforeach; ?>

  <!-- <script src="sweetalert2.min.js"></script> -->
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