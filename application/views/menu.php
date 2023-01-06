<nav class="navbar navbar-expand-sm navbar-dark bg-success">
<a class="navbar-brand" href="<?php echo base_url('index.php/page'); ?>">
    <img src="<?php echo base_url('assets/images/Logo STIKVINC.png');?>" width="30" height="30" class="d-inline-block align-top" alt="">
    STIKVINC Disposisi
</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('index.php/page') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> -->
                    <!-- akses untuk admin -->
                <?php if($this->session->userdata('akses')=='1') : ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Admin</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="<?php echo base_url('index.php/Disposisi/tampilDisposisi'); ?>">Surat Masuk</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/Surat_keluar/tampil_surat_keluar'); ?>">Surat Keluar</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/Disposisi/KelolaAkun'); ?>">Kelola Akun</a>
                    <a class="dropdown-item" href="<?php echo base_url('index.php/Disposisi/Sk'); ?>">Surat SK</a>
                </div>
            </li>
                <?php elseif($this->session->userdata('akses')=='2') : ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Kepala</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="<?php echo base_url('index.php/Disposisi_kepala/tampil_disposisi_kepala'); ?>">Data Kepala Disposisi</a>
                </div>
            </li>   
                <?php else : ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu Staff</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="<?php echo base_url('index.php/Disposisi_staff/tampil_disposisi_staff') ?>">Lihat Disposisi</a> 
                </div>
            </li>
                    <?php endif; ?>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('index.php/Login/logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>

    