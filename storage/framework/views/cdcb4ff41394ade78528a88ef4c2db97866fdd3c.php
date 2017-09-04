<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/fbcci.jpg')); ?>">
    <link rel="manifest" href="<?php echo e(asset('img/favicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Company Name</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <link href=<?php echo e(asset('theme/css/bootstrap.min.css')); ?> rel="stylesheet" />

    
    <link href=<?php echo e(asset('theme/css/light-bootstrap-dashboard.css')); ?> rel="stylesheet"/>

    
    <link href=<?php echo e(asset('theme/css/demo.css')); ?> rel="stylesheet" />


    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=<?php echo e(asset('theme/css/pe-icon-7-stroke.css')); ?> rel="stylesheet" />

    <style>
        .footer .copyright {
            margin-top: 0;
            margin-bottom: 0;
        }
        .singularity-credit-logo {
            width: 300px;
        }

        .batb-logo {
            height: 70px;
            margin-top: -25px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="red" data-image="<?php echo e(asset('theme/img/background.jpg')); ?>">

        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                        <form method="POST" action="<?php echo e(route('auth.check')); ?>" class="form-inline">
                        <?php echo csrf_field(); ?>

                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center" style="padding-bottom: 5px;">
                                    <img src="<?php echo e(asset('img/logo.png')); ?>" alt="Harmony - Easy EHS" style="height: 40px;margin-right: 10px;">
                                    <span style="font-size: 26px;">Summit Communications Ltd</span>
                                </div>
                                <div class="content center" style="padding-left: 20%">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="name" placeholder="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" placeholder="password" class="form-control">
                                    </div>
                                </div>
                                <div class="footer" style="padding-left: 20%;">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <button type="submit" class="btn btn-fill btn-danger btn-wd"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>
                                        </div>
                                        <div class="col-md-1 col-sm-1" style="margin-right: 30px; "></div>
                                        <div class="col-md-3 col-sm-4">
                                            <a href="<?php echo e(route('registration.create')); ?>"
                                               class="btn btn-fill btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> Registration</a>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright pull-left">

                </p>
                <p class="copyright pull-right">

                </p>
            </div>
        </footer>
    </div>

</div>


</body>


<script src=<?php echo e(asset('theme/js/jquery.min.js')); ?> type="text/javascript"></script>
<script src=<?php echo e(asset('theme/js/jquery-ui.min.js')); ?> type="text/javascript"></script>
<script src=<?php echo e(asset('theme/js/bootstrap.min.js')); ?> type="text/javascript"></script>



<script src=<?php echo e(asset('theme/js/jquery.validate.min.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/moment.min.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/bootstrap-datetimepicker.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/bootstrap-selectpicker.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/bootstrap-checkbox-radio-switch-tags.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/chartist.min.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/bootstrap-notify.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/sweetalert2.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/jquery-jvectormap.js')); ?>></script>


<script src="https://maps.googleapis.com/maps/api/js"></script>


<script src=<?php echo e(asset('theme/js/jquery.bootstrap.wizard.min.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/bootstrap-table.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/jquery.datatables.js')); ?>></script>



<script src=<?php echo e(asset('theme/js/fullcalendar.min.js')); ?>></script>


<script src=<?php echo e(asset('theme/js/light-bootstrap-dashboard.js')); ?>></script>


<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->


<script type="text/javascript">
    $().ready(function(){
        lbd.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>