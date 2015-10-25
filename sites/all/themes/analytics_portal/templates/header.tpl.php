<?php
global $user;
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_path();?>">Analytics Portal</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            $menuData = @menu_tree_all_data('main-menu', null, 4);
            $menuDataOutput = @menu_tree_output($menuData);
            if(isset($menuDataOutput)):?>
            <?php print drupal_render($menuDataOutput); ?>
            <?php endif;?>
            <ul class="menu-right">
                <li><a href="<?php echo base_path();?>messages"><i class="fa fa-envelope-o"></i> (<?php echo privatemsg_unread_count($user);?>)</a></a></li>
                <li><a href="<?php echo base_path().'user/logout';?>"><i class="fa fa-sign-out"></i></a></a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
