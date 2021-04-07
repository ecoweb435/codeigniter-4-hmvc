<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/css/bootstrap.css">
    <!-- SImple Datatable -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/vendors/simple-datatables/style.css">
    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/vendors/choices.js/choices.min.css" />
    
    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin')?>/css/app.css">
    <link rel="shortcut icon" href="<?php echo base_url('assets/admin')?>/images/favicon.svg" type="image/x-icon">
    <!--Font Goolge-->
    

</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="<?php echo base_url('assets/admin')?>/images/logo.svg" alt="" srcset="">
    </div>
    
    <!--Sidebar-->
    <?= $this->include('Modules\AdminLayout\Views\sidebar') ?> 
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

    
</div>
        </div>
        <div id="main">
          <!--Navbar-->
          <?= $this->include('Modules\AdminLayout\Views\navbar') ?> 
            
<div class="main-content container-fluid">

    <div class="page-title">
        <h3><?php echo $title ?></h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    
    <!--Content-->
    
    <?= $this->renderSection('content') ?>
    
</div>

    <!--Footer-->
    <?= $this->include('Modules\AdminLayout\Views\footer') ?> 


        </div>
    </div>

    <script src="<?php echo base_url('assets/admin')?>/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url('assets/admin')?>/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url('assets/admin')?>/js/app.js"></script>
    
    <script src="<?php echo base_url('assets/admin')?>/vendors/chartjs/Chart.min.js"></script>
    <script src="<?php echo base_url('assets/admin')?>/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url('assets/admin')?>/js/pages/dashboard.js"></script>
    <!-- Simple Datatable -->
    <script src="<?php echo base_url('assets/admin')?>/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url('assets/admin')?>/js/vendors.js"></script>
    <!-- Include Choices JavaScript -->
    <script src="<?php echo base_url('assets/admin')?>/vendors/choices.js/choices.min.js"></script>

    <script src="<?php echo base_url('assets/admin')?>/js/main.js"></script>
</body>
</html>
