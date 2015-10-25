
<!-- Page Content -->
<?php
    global $user;
?>

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Hello <?php  echo $user->name;?>. Welcome !</h1>
        <p>Start business day with Analytics Portal. You can create a blog, a note , more and more </p>
        <p><a class="btn btn-primary btn-large">Call to support!</a>
        </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>My features</h3>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-sm-4">
            <a href="<?php echo base_path().'blog';?>"><img class="img-circle img-responsive img-center" src="<?php echo base_path().drupal_get_path('theme','analytics_portal');?>/images/navigation/blog.jpg" alt=""></a>
            <h2>Blog</h2>
            <p>These marketing boxes are a great place to put some information.</p>
        </div>
        <div class="col-sm-4">
            <a href="<?php echo base_path().'blog';?>"><img class="img-circle img-responsive img-center" src="<?php echo base_path().drupal_get_path('theme','analytics_portal');?>/images/navigation/note.jpg" alt=""></a>
            <h2>Note</h2>
            <p>The images are set to be circular and responsive. Etiam porta sem malesuada magna mollis euismod.</p>
        </div>
        <div class="col-sm-4">
            <a href="#"><img class="img-circle img-responsive img-center" src="<?php echo base_path().drupal_get_path('theme','analytics_portal');?>/images/navigation/group.jpg" alt=""></a>
            <h2>Collaborate</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Etiam porta sem malesuada magna mollis euismod.</p>
        </div>
    </div>
    <!-- /.row -->

    <hr>

