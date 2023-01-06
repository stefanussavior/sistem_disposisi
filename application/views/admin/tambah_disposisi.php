<form method="post" id="form">
    <div class="form-group">
        <label for="nomor_surat_masuk">Nomor Surat Masuk : </label>
        <input type="text" class="form-control" name="nomor_surat_masuk" placeholder="Masukkan Nomor Surat Masuk">
    </div>
    <div class="form-group">
        <label for="tanggal_terima">Tanggal Terima : </label>
        <input type="date" class="form-control" name="tanggal_terima">
    </div>
    <h5 style="text-align: center;">PENGIRIM</h5>
    <div class="form-group">
        <label for="tanggal_pengirim">Tanggal Pengirim : </label>
        <input type="date" class="form-control" name="tanggal_pengirim" id="tanggal_pengirim">
    </div>
    <div class="form-group">
        <label for="nomor_pengirim">Nomor Pengirim : </label>
        <input type="text" class="form-control" name="nomor_pengirim" id="nomor_pengirim" placeholder="Masukkan Nomor Pengirim...">
    </div>
    <div class="form-group">
        <label for="asal_pengirim">Asal Pengirim : </label>
        <textarea class="form-control" name="asal_pengirim" id="asal_pengirim" cols="5" rows="2" placeholder="Masukkan asal pengirim..."></textarea>
    </div>
    <div class="form-group">
        <label for="perihal_pengirim">Perihal Pengirim : </label>
        <textarea class="form-control" name="perihal_pengirim" id="perihal_pengirim" cols="5" rows="2" placeholder="Masukkan asal pengirim..."></textarea>
    </div>
    <div class="form-group">
        <label for="ditujukkan_kepada">Ditujukkan Kepada : </label>
        <input type="text" class="form-control" name="ditujukkan_kepada" id="ditujukkan_kepada" placeholder="Masukkan Ditujukkan Kepada....">
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
        <!-- <div class="form-group">
            <label for="tanggal_disposisi">Tanggal Disposisi : </label>
            <input type="date" class="form-control" name="tanggal_disposisi" id="tanggal_disposisi">
         </div> -->
         <div class="pemberi_disposisi">Pemberi Disposisi</div>
         <input type="text" class="form-control" name="pemberi_disposisi" id="pemberi_disposisi" value="Arief Widya Prasetya, M.Kep., Ners" readonly>
    </div>
    <div class="form-group">
        <label for="penerima_disposisi">Penerima Disposisi : </label>
        <textarea class="form-control" name="penerima_disposisi" id="penerima_disposisi" cols="2" rows="5"></textarea>
    </div>
    <!-- <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali : </label>
                <input class="form-control" type="date" name="tanggal_kembali" id="tanggal_kembali" >
    </div> -->
    <div class="form-group">
                <label for="instruksi">Instruksi : </label>
                <textarea class="form-control" name="instruksi" id="instruksi" cols="2" rows="5"></textarea>
    </div>
    <div class="form-group">
                <label for="status">Status : </label>
                <select name="status" id="status" class="form-control">
                    <option value=""></option>
                    <option value="BELUM">Belum</option>
                    <option value="PROSES">Proses</option>
                    <option value="SELESAI">Selesai</option>
                </select>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
</form>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#tombol_tambah").click(function(){
            var data = $('#form').serialize();
            $.ajax({
                type : 'POST',
                url : "<?php echo base_url(); ?>index.php/Disposisi/simpanDataDisposisi",
                data : data,
                cache : false,
                success : function(data)
                {
                    $('#tampil').load("<?php echo base_url(); ?>index.php/Disposisi/tampilDisposisi");
                    window.location.reload();
                }
            });
        });
    });
</script>