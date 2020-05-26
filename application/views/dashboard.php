<?php $error_str = validation_errors(); ?>
<?php echo $this->session->flashdata('error'); ?>
<?php if ($error_str != '') { ?>
    <div class="alert alert-danger">
        <strong>OH!</strong> <?php echo $error_str; ?>
    </div>

    <?php
}

?>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <form role="form" class="form-horizontal" action="<?php echo base_url();?>dashboard/upload_cs_shortfile" method="post" enctype="multipart/form-data">
            <h2>Shopworks EDP file generator</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Select</label>
                        <div class="col-lg-2 paddingleftright">
                            <div class="col-lg-12 paddingleftright">
                                <select class="select2_demo_1 form-control" name="">
                                    
                                        <option  value="1">CS Short File</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <input type="file" name="cs_file">
                            
                        </div>
                        
                        <div class="col-lg-1 paddingleftright">
                            
                        </div>
                        
                            <button type="submit" class="btn btn-primary " >Import</button>
                        
                                    
                    </div>
                    
                </div> 
                <div class="col-lg-6">
                        <div class="form-group ">
                            <label class="col-lg-3 control-label">Save imported order to :</label>
                            
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-primary " >Clipboard</button>
                            </div>
                            <div class="col-lg-2">
                                <a href="<?php echo base_url();?>dashboard/download_cs_shortfile"><button type="button" class="btn btn-primary " >File</button></a>
                            </div>
                        
                                        
                        </div>
                    </div>
            </div>
            <div class="row m-t-30">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="row">
                            <div class="col-sm-12 paddingright">
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Purchase Order</label>
                                    <div class="col-lg-7 paddingleftright">
                                        <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">PO date</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Terms</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">FOB</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ref</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Vendor</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">PO Contact</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">PO Contact Email</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="row">
                            <div class="col-sm-12 paddingright">
                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Name</label>
                                    <div class="col-lg-7 paddingleftright">
                                        <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Address 1</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Address 2</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Address 3</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To State</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Zip</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Contact</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ship To Phone</label>
                                    <div class="col-lg-7 paddingleftright">
                                    <input type="text" name="test" value="" class="form-control " >
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
                
            </div>
            <div class="row">
                <div class="col-lg-12 table-responsive tab-flow " style="max-height: 300px; ">
                    <table class="table table-bordered table-hover datatable">
                        <thead>
                        <tr>
                            <th>PO Line</th>
                            <th>Customer's PN</th>
                            <th>Our PN</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Cost</th>
                            <th>Due Date</th>
                        </tr>
                        </thead>
                        </tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group pull-right" style="display: flex;">
                        

                        <button class="btn btn-danger">Delete</button>
                        
                        <div style="padding-left: 30px;">
                            <i class="fa fa-arrow-left"></i>
                            <span>2 of 12</span>
                            <i class="fa fa-arrow-right"></i>
                        </div>  
                    </div> 
                </div>
            </div>
           
            
        </form>
    </div>

</div>
    <div id="modal-customer" class="modal fade" aria-hidden="true" style="display: none;">
        <form class="" role="form" method="post" action="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="">
                            <h3 class="m-t-none m-b">Add/Edit Customer Contact</h3>
                            <div class="form-group">
                                <input type="hidden" id="cust_con_id">
                                <label class="col-lg-2 control-label">Type</label>
                                <div class="col-lg-10 paddingleftright">
                                    <select class="form-control" id="Type">
                                        <?php
                                        if ($contacttypes) {
                                            foreach ($contacttypes as $contacttype):
                                                ?>
                                                <option value="<?php echo $contacttype->CTTitle; ?>"><?php echo $contacttype->CTTitle; ?></option>
                                            <?php
                                            endforeach;
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">First Name</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="FirstName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Last Name</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="LastName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Phone</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="Phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 add-bankruptcybtn paddingleftright">
                                    <button type="button" id="save_contact" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-primary">Reset</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="button" onclick="delete_contact($('#cust_con_id').val());" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div id="modal-addresses" class="modal fade" aria-hidden="true" style="display: none;">
        <form class="" role="form" method="post" action="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="">
                            <h3 class="m-t-none m-b">Add/Edit Customer Ship To Address</h3>
                            <div class="form-group">
                                <input type="hidden" id="CAID">
                                <label class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="CAName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Desc</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="CADesc" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address 1</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="CAAddress1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address 2</label>
                                <div class="col-lg-10 paddingleftright">
                                    <input type="text" id="CAAddress2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-1 control-label paddingleftright">City</label>
                                <div class="col-lg-3 paddingleftright">
                                    <input type="text" id="CACity" class="form-control">
                                </div>
                            
                            
                                <label class="col-lg-1 control-label paddingleftright">State</label>
                                <div class="col-lg-3 paddingleftright">
                                    
                                    <select class="form-control" id="CAState">
                                            <?php foreach ($states as $state): ?>
                                                
                                                <option  value="<?php echo $state->Abbreviation ?>"><?php echo $state->Abbreviation ?></option>
                                            <?php endforeach; ?>

                                        </select>
                                </div>
                          
                            
                                <label class="col-lg-1 control-label paddingleftright">Zip</label>
                                <div class="col-lg-3 paddingleftright">
                                    <input type="text" id="CAZip" class="form-control">
                                    
                                </div>
                                
                            </div>
                          
                            <div class="form-group">
                                <div class="col-lg-12 add-bankruptcybtn paddingleftright">
                                    <button type="button" id="save_address" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-primary">Reset</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script type="text/javascript">

    $(document).ready(function () {

        // Add row the table
        $('#btnAddRow2').on('click', function () {
            var lastRow = $('#tblAddRow2 tbody tr:last').html();
            //alert(lastRow);
            $('#tblAddRow2 tbody').append('<tr>' + lastRow + '</tr>');
            $('#tblAddRow2 tbody tr:last input').val('');
        })
        $('.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: false,
            autoclose: true
        });
        $('.datatable').DataTable({
            "scrollY": "520px",
            "scrollX": "520px",
            "scrollCollapse": true,
            "paging": false,
            "searching": false,
        });

    });


    $('#modal-customer').on('hidden.bs.modal', function () {
        $('#cust_con_id').val('');
        $('#Type').val('');
        $('#FirstName').val('');
        $('#LastName').val('');
        $('#Email').val('');
        $('#Phone').val('');


    });



</script>
