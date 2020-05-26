<?php
 
    $this->load->view('header');
    $this->load->view('sidebar');
    ?>
    <div id="page-wrapper" class="gray-bg form-panel">
 <?php 
 $this->load->view('topbar');
 echo $contents;
 
    $this->load->view('footer');
    
?>

<script>
    $(document).ready(function () {
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 49) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Orders";
            }
        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 97) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Orders";
            }
        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 50) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Claims";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 98) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Claims";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 51) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Products";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 99) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Products";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 52) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Principal";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 100) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Principal";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 53) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Customers";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 101) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Customers";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 54) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>PrincipalCustomer";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 102) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>PrincipalCustomer";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 55) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>FreightCompany";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 103) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>FreightCompany";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 56) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>ContactType";
            }

        });
        $(document).keydown(function(e) {
            if (e.altKey && e.which == 57) {
                e.preventDefault();
                window.location.href = "<?php echo base_url(); ?>Deals";
            }

        });
    
       
       
    });
</script>