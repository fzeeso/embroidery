
<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-danger">
        <strong>OH!</strong> <?php echo $this->session->flashdata('error'); ?>
    </div>

    <?php
} ?>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
         <?php echo $this->session->flashdata('success'); ?>
    </div>

    <?php
} ?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="form-horizontal">
        <div class="alert alert-success" id="bs-alert" style="display: none;">
            <strong>Success!</strong> Saved Successfully.
        </div>
        <div class="container-fluid">
            <div class="row">
                <form action="<?php echo base_url();?>ChangeIDs/update_ids" method="POST"> 
                    <div class="col-md-8">
                        <div class="col-md-6" style="border:solid 1px grey; padding:20px;">
                            <h3>Select Action</h3>
                            <div style="padding-top:10px;">
                                <div class="form-group">
                                    <input type="radio" class="radio-inline" name="id_type" value="customer" checked>
                                    <label for="">Change Customer ID</label>
                                </div>
                                <div class="form-group">
                                    <input type="radio" class="radio-inline" name="id_type" value="principal">
                                    <label for="">Change Principal ID</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div style="padding-top:10px;">
                                <div class="form-group">
                                    <label for="">Present ID: </label>
                                    <select name="present_id" class="form-control" id="present_id" required>
                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Change To</label>
                                    <input type="text" class="form-control" id="new_id" name="new_id" onblur="" required>
                                </div>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {

        get_options_for_selected_type('customer')

       $('input[name="id_type"]').change(function (e) { 
           e.preventDefault();
           let id_type = $(this).val();
           get_options_for_selected_type(id_type);
           
       });
    });

    function get_options_for_selected_type(id_type){
        $.ajax({
            type: "POST",
            url: '<?php echo base_url()?>ChangeIDs/get_options_for_selected_type/' + id_type,
            data: {},
            dataType: "json",
            success: function (response) {
                $('#present_id').html(response.data);
            }
        });
    }

</script>