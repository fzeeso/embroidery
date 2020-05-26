<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="profile-element text-center">
                    <span>
                        <img alt="image" class="img-circle" src="<?php echo base_url()?>assets/img/profile_small.jpg" />
                    </span>
                </div>
                <div class="logo-element">
                    Candy
                </div>
            </li>
            <?php $page = $this->uri->segment(1);
            $dashboard = '';
            
            if($page=='Dashboard'){
                $dashboard = 'class="active"';
            }
            ?>
            <li <?php echo $dashboard;?>><a href="<?php echo base_url(); ?>Dashboard" title="Dashboard"><!--<i class="fa fa-cart-plus fa-2x"></i>--><span class="nav-label">Dashboard</span></a></li>
            

            </ul>
    </div>
</nav>