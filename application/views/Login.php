<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/Logo STIKVINC.png'); ?>">
    <style>
      body {
        background-image : url("../../assets/images/Disposisi-Surat-2.png");
        background-repeat : no-repeat;
        background-size : cover
      }
      card text-center
      {
        margin : 5px auto;
        width : 400px;
        padding : 10px;
      }
    </style>
  </head>
  <body>
  <br><br>
    <div class="container">
    <br/><br/> 
    <img src="<?php echo base_url('assets/images/Logo STIKVINC.png') ?>" width="20%" height="30%" style="display: block; margin: auto;"> 
    <br/><br/>
    <div class="card text-center" style="width: 28rem; margin: 5px auto;">
        <!-- <div class="col-md-4 col-md-offset-4"> --> 
        <div class="card-body">
            <form class="form-signin" action="<?php echo base_url().'index.php/login/auth' ?>" method="POST">
                <h2 class="form-signin-heading" style="text-color: white;">STIKVINC Disposisi</h2>
                <?php echo $this->session->flashdata('msg');?> <br/>
                <label for="username" class="sr-only">Username : </label> <br/>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="password" class="sr-only">Password : </label> <br/>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <br/>
                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
            </form>
          </div>
        <!-- </div> -->
        </div>    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>