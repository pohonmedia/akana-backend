<!-- Toolbars -->
<section class="content-header">
    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/pages'); ?>"><i class="fa fa-list"></i>&nbsp;&nbsp;Pages&nbsp;&nbsp;&nbsp;<span class="label label-success"><?php echo $count_data; ?></span></a>
    <a class="btn btn-sm btn-default btn-flat" href="<?php echo base_url('admin/pages/add'); ?>"><i class="fa fa-plus-square"></i>&nbsp;&nbsp;New Page</a>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h3 class="box-title">List All Pages</h3>
        </div>
        <div class="box-body table-responsive">
            <?php
            if (!empty($msg)) {
                echo $msg;
            }
            ?>

            <div>
                <?php echo form_open(uri_string()); ?>
                <div class="input-group">
                    <input type="text" name="pages_search" class="form-control input-sm pull-right" placeholder="Search by Title">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default btn-flat"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <?php
                    if (!empty($search)) {
                ?>
                <div class="input-group">
                    <p class="help-block">Search query : <strong>"<?php echo $search; ?>"</strong></p>
                </div>
                <?php } ?>
                </form>
            </div>
            <br />

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center" width="70">#</th>
                        <th width="300">Title </th>
                        <th>Deskripsi </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($list)) {
                        foreach ($list as $key => $value) {
                            echo '<tr>';
                            echo '<td class="text-center">' . ($key + 1) . '</td>';
                            echo '<td>';
                            echo '<a class="text-info" href="' . base_url('admin/pages/edit/' . $value->id) . '"><strong>' . $value->hal_title . '</strong></a>';
                            echo '<div class="block"><small>';
                            echo '<a target="_blank" class="text-info" href="' . base_url('pages/read/' . $value->hal_slug) . '"><i class="fa fa-eye"></i> Preview</a>';
                            echo '&nbsp;&nbsp;-&nbsp;&nbsp;';
                            echo '<a class="text-info" href="' . base_url('admin/pages/edit/' . $value->id) . '"><i class="fa fa-edit"></i> Edit</a>';
                            echo '&nbsp;&nbsp;-&nbsp;&nbsp;';
                            echo '<a class="text-danger" href="' . base_url('admin/pages/del/' . $value->id) . '" onclick="return getConfirmation(\'Apakah anda akan menghapus data ini\')"><i class="fa fa-trash"></i> Delete</a>';
                            echo '</small></div>';
                            echo '</td>';
                            echo '<td>' . character_limiter(strip_tags($value->hal_desc), 80) . '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr>';
                        echo '<td colspan="3"><span class="text-danger">Tidak ada data</span></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>

            </table>
        </div><!-- /.box-body -->
        <div class="box-footer text-center">
            <?php echo $template['partials']['pagination'] ?>
        </div>
    </div><!-- /.box -->
</section><!-- /.content -->