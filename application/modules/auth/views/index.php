<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo site_url() ?>">Login <b>Admin</b>Dashboard</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Login Akun Manajemen Web</p>
        <?php echo form_open("auth/login"); ?>
        <?php if (!empty($message)) { ?>
            <div id="infoMessage" class="alert alert-danger"><?php echo $message; ?></div>
        <?php } ?>
        <div class="form-group has-feedback">
            <input type="text" name="identity" class="form-control" placeholder="Username" required="" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required="" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <?php echo form_hidden('ref_form', 'admin'); ?>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
        </div>
        <?php echo form_close(); ?>
        <div class="social-auth-links text-center">
            <small><b>PM</b>CMS <span class="label label-danger">beta</span> v 0.9.8</small>

            <p>&copy; <?php echo mdate("%Y", now())?> <a href="<?php echo base_url(); ?>"><?php echo $this->config->item('website_name'); ?></a></p>
        </div>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->