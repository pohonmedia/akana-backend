<!-- Toolbars -->
<section class="content-header">
    <a class="btn btn-sm btn-default btn-flat" style="margin-right: 5px;" href="<?php echo base_url('admin/pages'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Pages&nbsp;&nbsp;&nbsp;<span class="label label-success"><?php echo $count_data; ?></span></a>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Add New Page</h3>
        </div>
        <div class="box-body">
            <?php
            if (!empty($msg)) {
                echo $msg;
            }
            ?>
            <?php echo form_open(uri_string()); ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="hal_title" class="control-label">Title</label>
                        <?php echo form_input($hal_title); ?>
                    </div>
                    <div class="form-group">
                        <label for="hal_desc" class="control-label">Deskripsi</label>
                        <?php echo form_textarea($hal_desc); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="hal_meta_desc" class="control-label">Meta Description</label>
                        <?php echo form_textarea($hal_meta_desc); ?>
                    </div>
                    <div class="form-group">
                        <label for="hal_meta_key" class="control-label">Meta Keywords</label>
                        <?php echo form_textarea($hal_meta_key); ?>
                    </div>
                    <div class="form-group">
                        <label for="hal_meta_author" class="control-label">Meta Author</label>
                        <?php echo form_input($hal_meta_author); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="box-tools">
                <button type="submit" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Create</button>
                <a class="btn btn-sm btn-flat btn-warning" style="margin-left: 5px;" href="<?php echo base_url('admin/pages'); ?>"><i class="fa fa-rotate-left"></i> Batal</a>
            </div>
        </div> <!--/.box-footer-->
        <?php echo form_close(); ?>
    </div><!-- /.box -->
</section><!-- /.content -->