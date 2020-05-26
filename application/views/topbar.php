<div class="row border-bottom">
	<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<!--<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="javascript:void(0)"><i class="fa fa-bars"></i> </a>-->
		</div>
		<ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="<?php echo base_url();?>Dashboard/Help">Help</a>
            </li>
			<li>
                            <span class="m-r-sm text-muted welcome-message"><?php echo $this->session->userdata('email');?> &nbsp; | <a href="<?php echo base_url();?>Login/logout" style="color: #fff">Logout</a></span>
			</li>
		</ul>
	</nav>
</div>