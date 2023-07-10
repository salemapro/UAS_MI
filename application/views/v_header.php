<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Class</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/js/adminlte.min.js">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.bundle.min.js">
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/f378cb2d22.js" crossorigin="anonymous"></script>
</head>
<body class="layout-top-nav dark-mode">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-black navbar-dark" style="width: 100%;">
            <div class="container">
                <div class="container-fluid">
                    <a href="" class="navbar-brand">
                        <img src="<?php echo base_url('image/MI.png') ?>" alt="Milogo" class="brand-image">
                        <span class="brand-text font-weight-light"> MI.co</span>
                    </a>
    
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
    
                    <ul class="navbar-nav ml-auto">
                        <!-- <ul class="navbar-nav"> -->
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="<?php echo base_url() . 'index.php/Sample/index' ?>" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="<?php echo base_url() . 'index.php/Sample/about' ?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="<?php echo base_url() . 'index.php/Sample/profile' ?>" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="<?php echo base_url() . 'index.php/Sample/jadwal' ?>" class="nav-link">Schedule</a>
                        </li> 
                    </ul>
    
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class=" btn btn-primary" href="<?php echo base_url('login/logout'); ?>" role="button">
                                <i class="fas fa-sign-out-alt"></i>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>