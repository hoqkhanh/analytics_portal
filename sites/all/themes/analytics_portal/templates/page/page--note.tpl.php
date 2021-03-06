
<?php
    $blog_post = get_list_of_note();

//kpr($blog_post);
?>
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h1 class="page-header">
            My Notes
            <small>Start business day</small>
        </h1>
        <?php foreach($blog_post as $post):?>
        <!-- First Blog Post -->
        <h2>
            <a href="<?php echo $post['url'];?>"><?php echo $post['title'];?></a>
        </h2>
        <p class="lead">
            by <a href="#"><?php echo $post['author'];?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post['date'];?></p>
        <hr>
        <p><?php echo $post['content'];?></p>
        <a class="btn btn-primary" href="<?php echo $post['url'];?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php endforeach;?>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">

        <!-- Blog Search Well -->
        <div class="well">
            <h4>Note Search</h4>
            <div class="input-group">
                <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
            </div>
            <!-- /.input-group -->
        </div>
        <div class="well">
            <h4>Create a note</h4>
            <a href="<?php echo base_path();?>node/add/note" class="btn btn-primary" role="button">Create note</a>
        </div>
        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>

</div>
<!-- /.row -->

<hr>