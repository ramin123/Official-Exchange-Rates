<!DOCTYPE html>

<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> Официальные курсы валют на заданную дату, устанавливаемые ежедневно </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="<?=base_url()?>assets/img/logo.png" type="image/x-icon">
        
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN loginView MANDATORY STYLES -->
        <link href="<?=base_url();?>/assets/loginView/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/assets/loginView/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/assets/loginView/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=base_url();?>/assets/loginView/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        
        <!-- END loginView MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME loginView STYLES -->
        <link href="<?=base_url();?>/assets/loginView/css/components-md-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?=base_url();?>/assets/loginView/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME loginView STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?=base_url();?>/assets/loginView/pages/css/login-4-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img width="10%" src="<?=base_url();?>assets/img/logo.png"width="200" alt="" /> </a>
                <h4 class="form-title" style="text-align: center;font-weight:bold; font-family: Calibri; color:black"  ></h4>
                <h5 class="form-title" style="text-align: center;font-weight:bold; font-family: Calibri; color:black"  >Sign in </h5>

        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?=base_url()?>/loginController/auth" method="post">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Точно введите свою учетную запись и пароль. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">имя пользователя</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="имя пользователя" name="username" style="text-align:left;"/> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">пароль</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="пароль" name="password" style="text-align:left;" /> </div>
                </div>
                <div class="form-actions">
                    <!-- <label class="checkbox">
                        <input type="checkbox" name="remember" value="1" /> به خاطر سپردن ! </label> -->
                    <button type="submit" class="btn green pull-right"> войти </button>
                </div>
                <div class="login-options">
                    <h4></h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                        </li>
                        <li>
                            <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                        </li>
                    </ul>
                </div>
                <div class="forget-password">
                    <h4></h4>
                </div>
                <div class="create-account">
                    <p>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->

        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> 2022 &copy; Rohullah Amin</div>
        <!-- END COPYRIGHT -->
        
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?=base_url();?>/assets/loginView/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/assets/loginView/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?=base_url();?>/assets/loginView/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/assets/loginView/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?=base_url();?>/assets/loginView/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME loginView SCRIPTS -->
        <!-- END THEME loginView SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?=base_url();?>/assets/loginView/pages/scripts/login-4.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
<?php if (isset($error)) { ?>
    <div id="warning" class="modal fade " role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" style="color:#ffbb33;">Ошибка!</h3>
                </div>
                <div class="modal-body error">
                    <p style="color: red; font-size:18px">Ваше имя пользователя или пароль неверны: </p>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url()?>index.php/login" data-dismiss="modal" aria-label="Close" class="btn btn-warning">Попробуйте еще раз</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================================================== -->
    <script type="text/javascript">
        $(window).load(function () {
            $('#warning').modal('show');
        });
    </script>
<?php } ?>

</html>
