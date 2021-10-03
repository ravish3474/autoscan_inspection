<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url()?>assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/login/css/style.css">

    <title>AutoScan | Login Panel</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('<?=base_url()?>assets/login/images/bg_1.jpg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login to <strong>AutoScan</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form action="<?=base_url()?>checkLogin" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" required="" name="username" placeholder="Your Username" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" required="" name="password" placeholder="Your Password" id="password">
                </div>
                  <div class="form-group last mb-3">
                    <label for="select_box">Login As</label>
                    <select class="form-control" id="select_box" name="login_as" required="">
                      <option value="1">Head Office</option>
                    </select>
                  </div>
                <input type="submit" value="Log In" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
<script src="<?=base_url()?>assets/login/js/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>assets/login/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/login/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/login/js/main.js"></script>
  </body>
</html>