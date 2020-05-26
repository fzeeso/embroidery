</div>
</div>
<!-- Mainly scripts -->

<script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/dataTables/datatables.min.js"></script>
<!-- Data picker -->
<script src="<?php echo base_url() ?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<!-- Input Mask-->
<script src="<?php echo base_url() ?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>
<!-- Custom and plugin javascript -->
<script src="<?php echo base_url() ?>assets/js/inspinia.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/pnotify.custom.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chosen.js"></script>







<!-- Tree Structure javascript -->
<script src="<?php echo base_url() ?>assets/js/logger.js"></script>
<script src="<?php echo base_url() ?>assets/js/treeview.js"></script>
<script src="https://unpkg.com/imask"></script>

<script>
    $('#treeview-container').treeview({
        debug: true,
        data: ['3.2', '2.2.3']
    });
    $('#show-values').on('click', function () {
        $('#values').text(
                $('#treeview-container').treeview('selectedValues')
                );
    });


    $('#treeview-document').treeview({
        debug: true,
        data: ['3.2', '2.2.3']
    });
    $('#show-values').on('click', function () {
        $('#values').text(
                $('#treeview-document').treeview('selectedValues')
                );
    });

        



    // $(document).on('focus', '.select2', function (e) {
    //       if (e.originalEvent) {
    //         $(this).siblings('select').select2('open');    
    //       }      
    //     });

    $(document).ready(function() {
        
        $(".txtboxToFilter").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110,190]) !== -1 ||
                 // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
                 // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40 )) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57 )) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
        
    });

    function today_date_american_format(){
        var d = new Date();

        var month = d.getMonth()+1;
        var day = d.getDate();

        var output = (month<10 ? '0' : '') + month + '/' + (day<10 ? '0' : '') + day + '/' + d.getFullYear();

        return output;
    }


</script>




</body>
</html>