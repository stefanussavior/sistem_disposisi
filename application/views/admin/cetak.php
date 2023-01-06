<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">

</head>
<body>
    <div class="container">
        <div style="align: justify; line-height: 8px;">
            <!-- header -->
            <img src="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>" width="21%" height="21%" style="float: left">
            <br/>
            <br/>
            <h2 style="text-align: center; font-size:12px;">YAYASAN PENDIDIKAN KESEHATAN ARNOLDUS</h2>
            <h2 style="text-align: center; font-size:15px;">SEKOLAH TINGGI ILMU KESEHATAN KATOLIK</h2>
            <h2 style="text-align: center; font-size:15px;">ST.VINCENTIUS A PAULO SURABAYA</h2>
            <br>
            <hr/>
            <h3 style="text-align: center;"><strong>LEMBAR DISPOSISI</strong></h3> 
            <!-- body -->
        <table class="table" border="0">
            <thead>
                <tr>
                    <th>Disposisi</th>
                    <th></th>
                    <th>Coba 2</th>
                </tr>
            </thead>
            <tbody>
<?php 
  foreach ($disposisi->result_array() as $d) :
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
                    <td scope="row" style="line-height:10px;">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    Nomor Surat Masuk : <br/><br/><br/><?php echo $nomor_surat_masuk; ?> 
                    <br/>
                    Tanggal Terima : <br/><br/><br/><?php echo $tanggal_terima; ?>
                    <br/>
                    Tanggal Pengirim : <br/><br/><br/><?php echo $tanggal_pengirim; ?>
                    <br/>
                    </td>
                    <td></td>
                    <td style="line-height:15px;">
                    <br/>
                    Pemberi Disposisi : <br/> <?php echo $pemberi_disposisi ?>
                    <br/>
                    Penerima Disposisi : <br/> <?php echo $penerima_disposisi ?>
                    <br/>
                    Instruksi : <?php echo $instruksi ?>
                    <br/>
                    </td>
                    </tr>
            </tbody>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>Coba 1</th>
                </tr>
                    <tr>
                        <td style="line-height:15px">
                        Asal Pengirim : <br/><br/><br/> <?php echo $asal_pengirim; ?>
                        <br/>
                        Perihal Pengirim : <?php echo $perihal_pengirim; ?>
                        <br/>
                        Ditujukkan Kepada : <br/><br/><br/> <?php echo $ditujukkan_kepada; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
               </tbody>
           </table>
        </div>
            <h4 style="text-align: left;">Status Pekerjaan : <?php echo $status; ?> Selesai </h4>
        <p style="text-align: right; font-size:12px;">Yang Mengetahui </p>
        <br>
        <p style="text-align : right;">Arief Widya Prasetya, M.Kep., Ners</p>
    </div>
</body>
</html>