<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('img/blog.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('img/favicon/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Blog Story</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <link href=<?php echo e(asset('theme/css/jasny-bootstrap.min.css')); ?> rel="stylesheet"/>

    
    <link href=<?php echo e(asset('theme/css/bootstrap.min.css')); ?> rel="stylesheet"/>

    
    <link href=<?php echo e(asset('theme/css/light-bootstrap-dashboard.css')); ?> rel="stylesheet"/>

    
    <link href=<?php echo e(asset('theme/css/style.css')); ?> rel="stylesheet"/>


    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=<?php echo e(asset('theme/css/pe-icon-7-stroke.css')); ?> rel="stylesheet"/>

    <style>
        .main-panel > .content {
            min-height: calc(100vh - 136px)
        }

        .main-panel > .footer, .main-panel > .footer .copyright {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .footer .copyright {
            margin-top: 0;
            margin-bottom: 0;
        }

        .singularity-credit-logo {
            width: 300px;
        }

        textarea {
            max-width: 100%;
        }

        .batb-logo {
            height: 50px;
        }

        .navbar-nav .batb-logo {
            height: 60px;
            padding: 5px;
        }

        .main-panel > .navbar {
            background: #c7cbc1;
            background: -moz-linear-gradient(top, #cb0a0e 0%, #cb0a0e 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #cb0a0e), color-stop(100%, #cb0a0e));
            background: -webkit-linear-gradient(top, #cb0a0e 0%, #cb0a0e 100%);
            background: -o-linear-gradient(top, #cb0a0e 0%, #cb0a0e 100%);
            background: -ms-linear-gradient(top, #cb0a0e 0%, #cb0a0e 100%);
            background: linear-gradient(to bottom, #ff1015 0%, #cb0a0e 100%);
        }

        .navbar-brand, .navbar-nav li a {
            color: white !important;
        }

        .navbar-nav .dropdown-menu li a {
            color: black !important;
        }

        .inline-block {
            display: inline-block;
        }

        .video-preview .thumbnail {
            line-height: 4em !important;
        }

        .video-preview.fileinput-exists .fileinput-exists.thumbnail {
            display: block;
        }

        .video-preview.fileinput-new .fileinput-new.thumbnail {
            display: block;
        }
    </style>

    <style>
        .select2 {
            width: 100% !important;
        }

        .select2-label-fix {
            margin-top: 0;
        }

        .select2.select2-container {
            margin-bottom: 7px !important;
            border: 0 !important;
            background-image: linear-gradient(60deg, #eef5eb, rgba(243, 238, 245, 0.98)), linear-gradient(#D2D2D2, #D2D2D2) !important;
            background-size: 0 2px, 100% 1px !important;
            background-repeat: no-repeat !important;
            background-position: center bottom, center calc(100% - 1px) !important;
            background-color: transparent !important;
            transition: background 0s ease-out !important;
            float: none !important;
            box-shadow: none !important;
            border-radius: 0 !important;
            font-weight: 400 !important;
        }

        .select2-container--default .select2-selection--single {
            border: none;
            border-bottom: 1px solid #aaa;
            border-radius: 0;
            height: 36px;
            display: none;
        }
    </style>

    <style>
        .dataTables_wrapper {
            position: relative;
            clear: both;
            *zoom: 1;
            zoom: 1;
        }

        .dataTables_wrapper .dataTables_length {
            float: left;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
        }

        .dataTables_wrapper .dataTables_filter input {
            margin-left: 0.5em;
        }

        .dataTables_wrapper .dataTables_info {
            clear: both;
            float: left;
            padding-top: 0.755em;
        }

        .dataTables_wrapper .dataTables_paginate {
            float: right;
            text-align: right;
        }

        .pagination > li > a, .pagination > li > span, .pagination > li:first-child > a, .pagination > li:first-child > span, .pagination > li:last-child > a, .pagination > li:last-child > span {
            border-radius: 20px;
        }

        .dataTables_filter input[type="search"] {
            font-size: 16px !important;
            line-height: 20px !important;
            height: 35px !important;
        }

    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red">
        

        <div class="logo">
            <a href="#" class="logo-text">


                Key Management

            </a>
        </div>
        

        <div class="sidebar-wrapper">

            <ul class="nav">

                <?php if(Auth::user()->role=='admin'): ?>
                    <li class="<?php echo e(is_active('users*')); ?>">
                    <a href="<?php echo e(route('users.index')); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Users</p>
                    </a>
                </li>

                    <li class="<?php echo e(is_active('tickets*')); ?>">
                        <a href="<?php echo e(route('tickets.index')); ?>">
                            <i class="fa fa-address-book-o"></i>
                            <p> All Tickets</p>
                        </a></li>
                    <li class="<?php echo e(is_active('pops*')); ?>">
                        <a href="<?php echo e(route('pops.index')); ?>">
                            <i class="fa fa-address-book-o"></i>
                            <p> All Pop</p>
                        </a></li>
                    <li class="<?php echo e(is_active('sub_centres*')); ?>">
                        <a href="<?php echo e(route('sub_centres.index')); ?>">
                            <i class="fa fa-address-book-o"></i>
                            <p> All Sub Centres</p>
                        </a></li>
                    <li class="<?php echo e(is_active('designations*')); ?>">
                        <a href="<?php echo e(route('designations.index')); ?>">
                            <i class="fa fa-address-book-o"></i>
                            <p> All Designations</p>
                        </a></li> <li class="<?php echo e(is_active('assigncreate*')); ?>">
                        <a href="<?php echo e(route('tickets.assignbyme')); ?>">
                            <i class="fa fa-history" aria-hidden="true"></i>
                            <p>Event History</p>
                        </a></li>

                <?php endif; ?>
                <li class="<?php echo e(is_active('ticketscreate*')); ?>">
                    <a href="<?php echo e(route('tickets.create')); ?>">
                        <i class="fa fa-ticket" aria-hidden="true"></i>

                        <p> Create Ticket</p>
                    </a></li>

                    <?php if(Auth::user()->role=='user'): ?>
                <li class="<?php echo e(is_active('assigncreate*')); ?>">
                    <a href="<?php echo e(route('tickets.assignbyme')); ?>">
                        <i class="fa fa-history" aria-hidden="true"></i>
                        <p>Ticket Status</p>
                    </a></li>
<?php endif; ?>
            </ul>
        </div>
    </div>


    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-white btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Key Management </a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>


                        </li>

                        <li class="dropdown dropdown-with-icons">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-list"></i>
                                <p class="hidden-md hidden-lg">
                                    More
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu dropdown-with-icons">

                                <li>
                                    <a href="#">
                                        <i class="pe-7s-tools"></i> Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo e(route('auth.logout')); ?>" class="text-danger">
                                        <i class="pe-7s-close-circle"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-left">
                    <a href="http://www.singularitybd.com">
                        <img class="batb-logo" src="<?php echo e(asset('img/logo.png')); ?>"
                             alt="Summit Communications Ltd.">
                    </a>
                </p>
                <p class="copyright pull-right">Developed By

                    <a href="http://www.singularitybd.com">
                        <img class="singularity-credit-logo" src="<?php echo e(asset('img/4.png')); ?>" style="width: 350px; height: 80px; float: right; "
                             alt="Singularity Interactive Ltd., Apps &amp; Software">
                    </a>
                </p>

            </div>
        </footer>

    </div>
</div>

<?php $__env->startSection('after-content'); ?>
<?php echo $__env->yieldSection(); ?>

<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="<?php echo e(asset('theme/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/js/jquery-ui.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('theme/js/bootstrap.min.js')); ?>" type="text/javascript"></script>


<!--  Forms Validations Plugin -->
<script src="<?php echo e(asset('theme/js/jquery.validate.min.js')); ?>"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo e(asset('theme/js/moment.min.js')); ?>"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="<?php echo e(asset('theme/js/bootstrap-datetimepicker.js')); ?>"></script>

<!--  Select Picker Plugin -->
<script src="<?php echo e(asset('theme/js/bootstrap-selectpicker.js')); ?>"></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="<?php echo e(asset('theme/js/bootstrap-checkbox-radio-switch-tags.js')); ?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo e(asset('theme/js/chartist.min.js')); ?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo e(asset('theme/js/bootstrap-notify.js')); ?>"></script>

<!-- Sweet Alert 2 plugin -->
<script src="<?php echo e(asset('theme/js/sweetalert2.js')); ?>"></script>

<!-- Vector Map plugin -->
<script src="<?php echo e(asset('theme/js/jquery-jvectormap.js')); ?>"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Wizard Plugin    -->
<script src="<?php echo e(asset('theme/js/jquery.bootstrap.wizard.min.js')); ?>"></script>

<!--  bootstrap Table Plugin    -->
<script src="<?php echo e(asset('theme/js/bootstrap-table.js')); ?>"></script>

<!--  Plugin for DataTables.net  -->
<script src="<?php echo e(asset('theme/js/jquery.datatables.js')); ?>"></script>


<!--  Full Calendar Plugin    -->
<script src="<?php echo e(asset('theme/js/fullcalendar.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/jasny-bootstrap/js/jasny-bootstrap.min.js')); ?>"></script>

<!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="<?php echo e(asset('theme/js/light-bootstrap-dashboard.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>