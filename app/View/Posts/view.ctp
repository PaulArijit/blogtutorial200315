<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Dashboard</li>
    </ol>
</div><!--/.row-->
<br/><br/>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo h($post['Post']['title']); ?>
            </div>
            <div class="panel-body">
                <p><?php echo h($post['Post']['body']); ?></p>
            </div>
            <div class="panel-footer pull-right">
                <small>Created: <?php echo $post['Post']['created']; ?></small>
            </div>
        </div>
    </div>
</div>
