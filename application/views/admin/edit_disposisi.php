
<form method="post" id="form">
<input type="hidden" name="id" value="<?php echo $disposisi->id; ?>">
    <div class="form-group">
        <label for="nomor_surat_masuk">Nomor Surat Masuk : </label>
        <input type="text" class="form-control" name="nomor_surat_masuk" value="<?php echo $disposisi->nomor_surat_masuk; ?>">
    </div>
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima : </label>
        <input type="date" class="form-control" name="tanggal_terima" value="<?php echo $disposisi->tanggal_terima; ?>">
    </div>
    <h5 style="text-align: center;">PENGIRIM</h5>
    <div class="form-group">
        <label for="tanggal_pengirim">Tanggal Pengirim : </label>
        <input type="date" class="form-control" name="tanggal_pengirim" value="<?php echo $disposisi->tanggal_pengirim; ?>">
    </div>
    <div class="form-group">
        <label for="nomor_pengirim">Nomor Pengirim : </label>
        <input type="text" class="form-control" name="nomor_pengirim" value="<?php echo $disposisi->nomor_pengirim; ?>">
    </div>
    <div class="form-group">
        <label for="asal_pengirim">Asal Pengirim : </label>
        <textarea class="form-control" name="asal_pengirim" id="asal_pengirim" cols="5" rows="2"><?php echo $disposisi->asal_pengirim; ?></textarea>
    </div>
    <div class="form-group">
        <label for="perihal_pengirim">Perihal Pengirim : </label>
        <textarea class="form-control" name="perihal_pengirim" id="perihal_pengirim" cols="5" rows="2"><?php echo $disposisi->perihal_pengirim; ?></textarea>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <input type="text" class="form-control" name="ditujukkan_kepada" id="ditujukkan_kepada" value="<?php echo $disposisi->ditujukkan_kepada; ?>">
    </div>
    <!-- <div class="form-group">
        <label for="kondisi">Kondisi : </label>
        <br/>
        <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-success active" for="rahasia"> Rahasia :
                <input type="checkbox" name="kondisi[]" id="checkbox" value="rahasia" autocomplete="off">
            </label> <br/>
            <label class="btn btn-success" for="segera"> Segera : 
                <input type="checkbox" name="kondisi[]" id="checkbox" value="segera" autocomplete="off">
            </label> <br/>
            <label class="btn btn-success" for="biasa"> Biasa : 
                <input type="checkbox" name="kondisi[]" id="checkbox" value="biasa" autocomplete="off">
            </label>
         </div> -->
         <h5 style="text-align: center;">DISPOSISI</h5>
         <div class="form-group">
            <label for="tanggal_disposisi">Tanggal Disposisi : </label>
            <input type="date" class="form-control" name="tanggal_disposisi" value="<?php echo $disposisi->tanggal_disposisi; ?>">
         </div>
         <div class="pemberi_disposisi">Pemberi Disposisi</div>
         <input type="text" class="form-control" name="pemberi_disposisi" id="pemberi_disposisi" value="<?php echo $disposisi->pemberi_disposisi; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="penerima_disposisi">Penerima Disposisi : </label>
        <textarea class="form-control" name="penerima_disposisi" id="penerima_disposisi" cols="2" rows="5"><?php echo $disposisi->penerima_disposisi; ?></textarea>
    </div>
    <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali : </label>
                <input class="form-control" type="date" name="tanggal_kembali" value="<?php echo $disposisi->tanggal_kembali; ?>">
    </div>
    <div class="form-group">
                <label for="instruksi">Instruksi : </label>
                <textarea class="form-control" name="instruksi" id="instruksi" cols="2" rows="5"><?php echo $disposisi->instruksi; ?></textarea>
    </div>
    <button id="tombol_edit" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
</form>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#tombol_edit').click(function(){
        var data = $('#form').serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/Disposisi/editDataDisposisi',
            data: data,
            cache : false,
            success: function (data) {
                $('#tampil').load("<?php echo base_url(); ?>index.php/Disposisi/tampilDisposisi");
                window.location.reload();
            }
        });
    });
});
</script>
