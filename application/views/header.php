<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php if($this->uri->segment(2) == 'add_edit_order' && isset($order->OrderCustPONo)) {?>
        <title><?php echo 'Orders : ' . $order->OrderCustPONo ?></title>
    <?php } else {?>
    <title><?php echo $this->uri->segment(1); ?></title>
    <?php }?>
    
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/pnotify.custom.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" rel="stylesheet">



	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.bootstrap.wizard.js"></script>

    <script src="<?php echo base_url() ?>assets/js/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ckeditor/adapters/jquery.js"></script>


</head>

<body class="pace-done">
    <div id="wrapper">