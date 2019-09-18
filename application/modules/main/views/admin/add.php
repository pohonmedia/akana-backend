<!-- Toolbars -->
<section class="content-header">
    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/catalogs'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Products&nbsp;&nbsp;&nbsp;<span class="label label-success"><?php echo $count_data; ?></span></a>
    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/catalogs/categories'); ?>"><i class="fa fa-folder"></i>&nbsp;&nbsp;Categories</a>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Setting Section 1</h3>
        </div>
        <div class="box-body">
            <?php
            if (!empty($msg)) {
                echo $msg;
            }
            ?>
            <?php echo form_open_multipart(uri_string()); ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_img" class="control-label">Background Image</label>
                        <?php echo form_upload($img_section1); ?>
                        <p class="help-block"><small>Image Format : *.png, *.jpg, *.jpeg</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Desc</label>
                        <?php echo form_textarea($desc_section1); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Button URL</label>
                        <?php echo form_input($link_section1); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Setting Section 2</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_img" class="control-label">Background Image</label>
                        <?php echo form_upload($img_section2); ?>
                        <p class="help-block"><small>Image Format : *.png, *.jpg, *.jpeg</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Desc</label>
                        <?php echo form_textarea($desc_section2); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Button URL</label>
                        <?php echo form_input($link_section2); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Setting Section 3</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_img" class="control-label">Background Image</label>
                        <?php echo form_upload($img_section3); ?>
                        <p class="help-block"><small>Image Format : *.png, *.jpg, *.jpeg</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Desc</label>
                        <?php echo form_textarea($desc_section3); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Button URL</label>
                        <?php echo form_input($link_section3); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Setting Section 4</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_img" class="control-label">Background Image</label>
                        <?php echo form_upload($img_section4); ?>
                        <p class="help-block"><small>Image Format : *.png, *.jpg, *.jpeg</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Desc</label>
                        <?php echo form_textarea($desc_section4); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Button URL</label>
                        <?php echo form_input($link_section4); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Setting Section 5</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="product_img" class="control-label">Background Image</label>
                        <?php echo form_upload($img_section5); ?>
                        <p class="help-block"><small>Image Format : *.png, *.jpg, *.jpeg</small></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Desc</label>
                        <?php echo form_textarea($desc_section5); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="meta_keywords" class="control-label">Section Button URL</label>
                        <?php echo form_input($link_section5); ?>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <div class="box-tools">
                <button type="submit" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-save"></i> Create</button>
                <a class="btn btn-sm btn-flat btn-warning" style="margin-left: 5px;" href="<?php echo base_url('admin/catalogs'); ?>"><i class="fa fa-rotate-left"></i> Batal</a>
            </div>
        </div> <!--/.box-footer-->
        <?php echo form_close(); ?>
    </div><!-- /.box -->
</section><!-- /.content -->