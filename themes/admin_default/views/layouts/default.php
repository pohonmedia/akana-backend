<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Extra metadata -->
        <?php // echo $metadata; ?>
        <!-- / -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $template['title']; ?></title>
        <!--<meta name="description" content="<?php // echo $description;   ?>">-->
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- favicon.ico and apple-touch-icon.png -->

        <!-- Bootstrap core CSS  and Font Awesome-->
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo $admin_assets . 'css/bootstrap.min.css'; ?>">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $admin_assets . 'fonts/css/font-awesome.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo $admin_assets . 'css/AdminLTE.min.css'; ?>">
        <link rel="stylesheet" href="<?php echo $admin_assets . 'css/_all-skins.min.css'; ?>">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>">
    </head>
    <body<?php echo!empty($body_class) ? $body_class : ""; ?>>
        <div class="wrapper">
            <?php echo $template['partials']['header']; ?>
            <?php echo $template['partials']['sidebar']; ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php 
                            $string = str_replace($this->config->item('website_name'). ' | ', '', $template['title']);
                            echo $string; 
                        ?>
                        <small><?php echo !empty($page_desc) ? $page_desc : "" ;?></small>
                    </h1>
                    <?php echo $this->breadcrumbs->show(); ?>
                </section>
                <?php echo $template['body']; ?>
            </div>
            <?php echo $template['partials']['footer']; ?>
        </div>
        <script src="<?php echo $admin_assets . 'js/jQuery-2.1.4.min.js'; ?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
            var BASE_URL = '<?php echo base_url(); ?>';
        </script>
        <script src="<?php echo $admin_assets . 'js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/ckeditor/ckeditor.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/ckfinder/ckfinder.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/chained.min.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/app.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/custom.js'; ?>"></script>
    </body>
</html>