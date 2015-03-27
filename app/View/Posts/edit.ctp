<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Dashboard</li>
    </ol>
</div><!--/.row-->
<br/><br/>
<div class="row">
    <div class="col-lg-12">
            <div class="panel panel-default">
                    <div class="panel-heading">Edit Post</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo $this->Form->create('Post'); ?>
                            <div class="form-group">
                                <?php echo $this->Form->input('title', array('class'=>'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo $this->Form->input('body', array('rows' => '3', 'class'=>'form-control')); ?>
                            </div>                            
                            <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </div>
            </div>
    </div>
</div>
