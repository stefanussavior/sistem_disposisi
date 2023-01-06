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
  <table class="table" border="0">
    <thead> 
      <tr>
        <th>No</th>
        <th>Tanggal Surat keluar</th>
        <th>Nomor Surat keluar</th>
        <th>Perihal Surat</th>
        <th>Tujuan Surat</th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
      $no = 1;
      foreach ($surat_keluar as $s) {
      ?>
      <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo tanggal($s->tanggal_surat_keluar); ?></td>
      <td><?php echo $s->nomor_surat_keluar; ?></td>
      <td><?php echo $s->perihal_surat_keluar; ?></td>
      <td><?php echo $s->tujuan_surat; ?></td>
      </tr>
        <?php } ?>
    </tbody>
  </table>
  <br/><br/>
  <h5 style="text-align :right;">Yang Mengetahui</h5>
  <br><br><br><br/>
  <h5 style="text-align: right;">Sr. Ignata Yuliati, SSpS.,MAN.,DNSc</h5>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
</body>
</html>