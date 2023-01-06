<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
      <style>
        body 
        {
          background-image : url(<?php echo base_url('assets/images/gambar_2.jpg') ?>);
          background-repeat : no-repeat;
          background-size : cover;
          height: 100%;
        }
        #container
        {
          position:relative;
          min-height: 100%;
        }
        #footer
        {
          width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    position: absolute;
    bottom: 0px;
        }
      </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">
  </head>
  <body>
  <?php $this->load->view('menu'); ?><br/> 
  <div class="container">
        <div id="header">
        <br>
                <h2 style="text-align: center; color: white;"> Hai, Selamat Datang Di <br/>
                STIKVINC Disposisi <br/><?php echo $this->session->userdata('ses_nama'); ?>
                </h2>
        </div>
        <div id="content">
        <br>
        <img src="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>" width="20%" height="20%" style="display: block; margin: auto;">
        </div>
        <!-- <div id="footer">
          <h3 style="text-align: center;">Created By Stefanus Andre</h3>
        </div> -->
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>