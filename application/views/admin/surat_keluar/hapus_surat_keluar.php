<form action="post" id="form">
    <p>yakin anda ingin menghapus item ini? <?php echo $surat_keluar->perihal_surat; ?></p>
    <input type="hidden" name="id" value="<?php echo $surat_keluar->id; ?>">
    <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
</form>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function (){  
        $('#tombol_hapus').click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type : 'POST',
                url : "<?php echo base_url(); ?>index.php/Disposisi/delete_surat_keluar",
                data : data,
                cache : false,
                success : function(data)
                {
                    $('#tampil').load("<?php echo base_url(); ?>index.php/Disposisi/suratKeluar");
                    window.location.reload(); 
                }
            });
        });
    });
</script>   