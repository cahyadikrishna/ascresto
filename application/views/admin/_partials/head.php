<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

 <title><?php echo SITE_NAME ." - ". ucfirst($this->uri->segment(1)) ." || ". ucfirst($this->uri->segment(2)) ?> - We Swear By The Pledge</title>

    <style type="text/css">
        
        .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input {
    background: transparent;
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

    </style>

    
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url('assets/template/back/vendor') ?>/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/template/back/css') ?>/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/template/back/dist') ?>/sweetalert.css">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url('assets/template/back/vendor') ?>/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
  <link rel="icon" type="image/png" href="<?php echo base_url('img/fav.png') ?>"/>

  <script src="<?php echo base_url('assets/template/back/dist') ?>/sweetalert.min.js"></script>

    <script src="<?php echo base_url('assets/template/back/dist') ?>/sweetalert-dev.js"></script>

 <link href="<?php echo base_url('assets/template/back/css') ?>/animate.min.css" rel="stylesheet"> 

</head>