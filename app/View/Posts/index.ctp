<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">Dashboard</li>
    </ol>
</div><!--/.row-->

<br/><br/>

<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Blog Posts</h3>
                  <div class="box-tools">
                    <div class="input-group">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>Post ID</th>
                        <th>Post Title</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo $post['Post']['id']; ?></td>
                            <td>
                                <?php echo $post['Post']['title']; ?>
                            </td>
                            <td><?php echo $post['Post']['created']; ?></td>
                            <td>
                                <span class="label label-info"><?php
                                echo $this->Html->link(
                                        'View', array('action' => 'view', $post['Post']['id'])
                                );
                                ?></span>
                                
                                <span class="label label-warning"><?php
                                echo $this->Html->link(
                                        'Edit', array('action' => 'edit', $post['Post']['id'])
                                );
                                ?></span>

                                <span class="label label-danger"><?php
                                echo $this->Form->postLink(
                                        'Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')
                                );
                                ?></span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php unset($post); ?>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-left">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>              
              </div><!-- /.box -->
            </div>
          </div>
<script>
    $(function () {
        $('#hover, #striped, #condensed').click(function () {
            var classes = 'table';

            if ($('#hover').prop('checked')) {
                classes += ' table-hover';
            }
            if ($('#condensed').prop('checked')) {
                classes += ' table-condensed';
            }
            $('#table-style').bootstrapTable('destroy')
                .bootstrapTable({
                    classes: classes,
                    striped: $('#striped').prop('checked')
                });
        });
    });

    function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];

        if (index % 2 === 0 && index / 2 < classes.length) {
            return {
                classes: classes[index / 2]
            };
        }
        return {};
    }
</script>
<!--<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Advanced Table</div>
            <div class="panel-body">
                <table>
                    <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Post Title</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                            <?php foreach ($posts as $post): ?>
                            <tr>
                                <td><?php echo $post['Post']['id']; ?></td>
                                <td>
                                    <?php echo $this->Html->link($post['Post']['title'],
                        array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
                                </td>
                                <td><?php echo $post['Post']['created']; ?></td>
                                <td>
                                    <?php
                                        echo $this->Html->link(
                                            'Edit',
                                            array('action' => 'edit', $post['Post']['id'])
                                        );
                                    ?>

                                    <?php
                                        echo $this->Form->postLink(
                                            'Delete',
                                            array('action' => 'delete', $post['Post']['id']),
                                            array('confirm' => 'Are you sure?')
                                        );
                                    ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php unset($post); ?>                    
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->




