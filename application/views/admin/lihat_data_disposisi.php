<div class="container">
    <!-- <label for="nomor_surat_masuk">Nomor Surat Masuk : </label> -->
    <div>
    <h4>Nomor Surat Masuk : <br/><?php echo $disposisi->nomor_surat_masuk; ?></h4>
    </div>
        <p>Tanggal Terima : <br/><?php echo $disposisi->tanggal_terima; ?></p>
        <p>Tanggal Pengirim : <br/><?php echo $disposisi->tanggal_pengirim; ?></p>
        <p>Nomor Pengirim : <br/><?php echo $disposisi->nomor_pengirim; ?></p>
        <p>Asal Pengirim : <br/><?php echo $disposisi->asal_pengirim; ?></p>
        <p>Perihal Pengirim : <br/><?php echo $disposisi->perihal_pengirim; ?></p>
        <p>Ditujukkan Kepada : <br/><?php echo $disposisi->ditujukkan_kepada; ?></p>
        <p>Tanggal Disposisi : <br/><?php echo $disposisi->tanggal_disposisi; ?></p>
        <p>Pemberi Disposisi : <br/><?php echo $disposisi->pemberi_disposisi; ?></p>
        <p>Penerima Disposisi : <br/><?php echo $disposisi->penerima_disposisi; ?></p>
        <p>Tanggal Kembali : <br/><?php echo $disposisi->tanggal_kembali; ?></p>
        <p>Instruksi : <br/><?php echo $disposisi->instruksi; ?></p>
    <p>Status : <?php switch ($disposisi->status) {
        case 'BELUM' :
            echo '<h4>Belum</h4>';
            break;
        
        case 'PROSES' :
            echo '<h4>Proses</h4>';
            break;
        
        case 'SELESAI' :
            echo '<h4>Selesai</h4>';
            break;
    }  ?></p>
</div>