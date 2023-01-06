<form id="form" method="post">
<input type="hidden" name="id" value="<?php echo $surat_keluar->id; ?>">
    <div class="form-group">
        <label for="nomor_surat_keluar">Nomor Surat Keluar : </label>
        <input type="text" class="form-control" name="nomor_surat_keluar" value="<?php echo $surat_keluar->nomor_surat_keluar; ?>">
    </div>
    <div class="form-group">
        <label for="perihal_surat">Perihal Surat : </label>
        <textarea name="perihal_surat" class="form-control" id="perihal_surat" cols="30" rows="10"><?php echo $surat_keluar->perihal_surat; ?></textarea>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <textarea name="ditujukkan_kepada" class="form-control" id="ditujukkan_kepada" cols="30" rows="10"><?php echo $surat_keluar->ditujukkan_kepada; ?></textarea>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
</form>
<script type="text/javascript">
    $(document).ready(function () {
        $('#tombol_tambah').click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>index.php/Disposisi/update_surat_keluar",
                data: data,
                cache : false,
                success: function (data) {
                    $('#tampil').load("<?php echo base_url(); ?>index.php/Disposisi/suratKeluar");
                    window.location.reload();
                }
            });
        });
    });
</script>