<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Disposisi Staff</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
</head>
<body>
  
  <?php $this->load->view('menu'); ?>
<BR/>
<h2 style="text-align: center;">DATA DISPOSISI</h2>
<br/>
  <!-- table -->
  <table id="tabel_id" class="display">
    <thead>
      <tr>
      <th>No</th>
        <th>Tanggal Dibuat Disposisi</th>
        <th>Perihal Pengirim</th>
        <th>Asal Pengirim</th>
        <th>Ditujukkan Kepada</th>
        <th>Status</th>
        <th style="text-align: center;">Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $no = 1;
          foreach ($disposisi as $d) {
        ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $d->datetime; ?></td>
            <td><?php echo $d->perihal_pengirim; ?></td>
            <td><?php echo $d->asal_pengirim; ?></td>
            <td><?php echo $d->ditujukkan_kepada; ?></td>
            <td><?php switch ($d->status) {
              case '1':
                echo "<h5>Belum</h5>";
                break;
              
              case '2' :
                echo "<h5>Proses</h5>";
                break;

              case '3':
                echo "<h5>Selesai</h5>";
                break;
            } ?></td>
            <td>
              <button type="button" nomor_surat_masuk="<?php echo $d->nomor_surat_masuk; ?>" class="lihat btn btn-warning">Lihat Data</button>
              <!-- <button type="button" nomor_surat_masuk="<?php echo $d->nomor_surat_masuk; ?>" class="acc btn btn-success">ACC</button>
              <button type="button" nomor_surat_masuk="<?php echo $d->nomor_surat_masuk; ?>" class="cetak btn btn-danger">Cetak</button> -->
            </td>
          </tr>
        <?php 
        $no++;
      } 
        ?>
    </tbody>
  </table>

      <!-- modal -->
      <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
              <h4 class="modal-title" id="judul"></h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- modal body -->
            <div class="modal-body">
              <div id="tampil_modal">
                <!-- data akan ditampilkan di sini -->
              </div>
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Keluar</button>
            </div>

          </div>
        </div>
      </div>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function () {
      
      $('#tabel_id').DataTable();

      $('.lihat').click(function(){
        var nomor_surat_masuk = $(this).attr("nomor_surat_masuk");
        $.ajax({
          method : 'POST',
          url: '<?php echo base_url(); ?>index.php/Disposisi_kepala/lihat_disposisi_kepala',
          data: {nomor_surat_masuk:nomor_surat_masuk},
          success: function (data) {
            $('#myModal').modal("show");
            $('#tampil_modal').html(data);
            document.getElementById("judul").innerHTML = 'Data Lengkap Disposisi';
          }
        });
      });
      
      // $('.acc').click(function(){
      //     var conf = confirm("Apakah anda yakin?");
      //     if (conf == true) {
      //       var nomor_surat_masuk = $(this).attr("nomor_surat_masuk");
      //       $.ajax({
      //         method : 'POST',
      //         url: '<?php echo base_url(); ?>index.php/Disposisi_kepala/acc',
      //         data: {nomor_surat_masuk:nomor_surat_masuk},
      //         success: function (data) {
      //           window.location.reload();
      //         }
      //       });
      //     }
      // });
    });
  </script>
</body>
</html>