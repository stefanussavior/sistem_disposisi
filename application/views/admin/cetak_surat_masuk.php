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
        <div style="align: justify; line-height: 8px;">
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
            <h4 style="text-align: center;">DATA SURAT MASUK</h4>
            <br/>
            <br/>
        </DIV>
</div>
  <!-- table -->
  <table>
    <thead>  
      <tr>
        <th>No</th>
        <th>Tanggal Terima</th>
        <th>No. Surat Masuk</th>
        <th>Tanggal Surat Pengirim</th>
        <th>No. Surat Pengirim</th>
        <th>Asal Pengirim</th>
        <th>Perihal</th>
        <th>Penerima Disposisi</th>
        <th>Instruksi/Informasi</th>
        <th colspan="3" style="text-align: center">Output</th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
      $no = 0;
      foreach ($disposisi as $d) {
      ?>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo tanggal($d->tanggal_terima); ?></td>
      <td><?php echo $d->nomor_surat_masuk; ?></td>
      <td><?php echo tanggal($d->tanggal_pengirim); ?></td>
      <td><?php echo $d->nomor_pengirim; ?></td>
      <td><?php echo $d->asal_pengirim; ?></td>
      <td><?php echo $d->perihal_pengirim; ?></td>
      <td><?php echo $d->penerima_disposisi; ?></td>
      <td><?php echo $d->instruksi;?></td>
      <td><?php echo $d->output; ?></td>
      </tr>
        <?php } ?>
    </tbody>
  </table>
  <br/><br/>
  <h5 style="text-align :right;">Yang Mengetahui</h5>
  <br><br><br><br/>
  <h5 style="text-align: right;">Arief Widya Prasetya, M.Kep., Ners</h5>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>
</html>