
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Login</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="../../asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <!--link rel="shortcut icon" href="asset/img/logomi.png"-->

    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

      <div class="panel-body">
        <?php $atributos = array('id' => 'form', 'method'=> 'post', 'role'=> 'form','class'=> 'form-horizontal m-t-20');
        echo for_open('login/validarUsuario'. $atributos); ?>
        <?php if(isset($error)){ ?>
          <div class="errorHandler alert alert-danger ">
                        <i class="fa fa-remove-sign"></i> <?php echo $error ?>;
          </div>
        <?php} ?>

            <form class="form-signin">
              <div class="panel periodic-login">

                  <div class="panel-body text-center">
                      <p class="atomic-mass">Welcome</p>
                      <p class="element-name">Log in</p>

                      <i class="icons icon-arrow-down"></i>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="text" id="usuario" name="usuario" class="form-text" required>
                        <span class="bar"></span>
                        <label>Username</label>
                      </div>
                      <div class="form-group form-animate-text" style="margin-top:40px !important;">
                        <input type="password" id="pass"class="form-text" required>
                        <span class="bar"></span>
                        <label>Password</label>
                      </div>

                      <label class="pull-left">
                      <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                      </label>
                      <input type="submit" class="btn col-md-12" value="SignIn"/>
                  </div>
                    <div class="text-center" style="padding:5px;">
                        <a href="forgotpass.html">Forgot Password </a>
                        <a href="reg.html">| Signup</a>
                    </div>
              </div>
            </form>
      </div>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="asset/js/jquery.min.js"></script>
      <script src="asset/js/jquery.ui.min.js"></script>
      <script src="asset/js/bootstrap.min.js"></script>

      <script src="asset/js/plugins/moment.min.js"></script>
      <script src="asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>