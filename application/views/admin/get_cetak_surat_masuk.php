<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">
    <title>Cetak Surat Masuk</title>
</head>
<body onload="window.print()">
<br/>
<div class="container">
        <div style="align: justify; line-height: 1px;">
            <!-- header -->
            <img src="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>" width="15%" height="15%" style="float: left">
            <br/>
            <br/>
            <h4 style="text-align: center;">YAYASAN PENDIDIKAN KESEHATAN ARNOLDUS</h4>
            <h2 style="text-align: center;">SEKOLAH TINGGI ILMU KESEHATAN KATOLIK</h2>
            <h2 style="text-align: center;">ST.VINCENTIUS A PAULO SURABAYA</h2>
            <br>
            <br/>
            <br/>
            <h4 style="text-align: center;"><strong>SURAT DISPOSISI</strong></h4>
            <br/>
            <br/>
            <hr/>
        </div>
</div>
    <!-- form -->
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><h4><strong>Nomor Surat Masuk : </strong></h4></td>
            <td></td>
            <td><h4><strong>Asal Pengirim : </strong></h4></td>
          </tr>
          <tr>
            <td><h3><?php echo $disposisi->nomor_surat_masuk; ?></h3></td>
            <td></td>
            <td><h3><?php echo $disposisi->asal_pengirim; ?></h3></td>
          </tr>
          <tr>
            <td><h4><strong>Tanggal Terima :  </strong></h4></td> 
            <td></td>
            <td><h4><strong>Perihal Pengirim : </strong></h4></td>
          </tr>
          <tr>
            <td>
                <h3><?php echo tanggal($disposisi->tanggal_terima); ?></h3>
            </td>
            <td></td>
            <td><h3><?php echo $disposisi->perihal_pengirim; ?></h3></td>
          </tr>
          <tr>
            <td><h4><strong>Tanggal Pengirim : </strong></h4></td>
            <td></td>
            <td><h4><strong>Ditujukkan Kepada : </strong></h4></td>
          </tr>
          <tr>
            <td><h3><?php echo tanggal($disposisi->tanggal_pengirim); ?></h3></td>
            <td></td>
            <td><h3><?php echo $disposisi->ditujukkan_kepada; ?></h3></td>
          </tr>
          <tr>
            <td><h2><strong>Penerima Disposisi : </strong></h2></td>
          </tr>
          <tr>
            <td><h4><?php echo $disposisi->penerima_disposisi; ?></h4></td>
          </tr>
          <tr>
          </tr>
        </tbody>
      </table>
      <div class="container">
      <label for="Instruksi"><h3><strong>Instruksi : </strong></h3></label>
      <h4><?php echo $disposisi->instruksi; ?></h4>
      </div>
    </div>
  <br/><br/>
  <h5 style="text-align :right;">Yang Mengetahui</h5>
  <br><br><br><br/>
  <h5 style="text-align: right;">Arief Widya Prasetya, M.Kep., Ners</h5>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>
</html>