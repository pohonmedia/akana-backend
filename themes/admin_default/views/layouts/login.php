<!DOCTYPE html>
<html lang="en">
    <head>
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
        <link rel="stylesheet" href="<?php echo $admin_assets . 'js/iCheck/square/blue.css'; ?>">
        <!-- Ionicons -->
        <?php if (ENVIRONMENT == 'production') { ?>
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <?php } ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico'); ?>">
    </head>
    <body<?php echo!empty($body_class) ? $body_class : ""; ?>>
        <?php echo $template['body']; ?>
        <!-- / -->
        <script src="<?php echo $admin_assets . 'js/jQuery-2.1.4.min.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/bootstrap.min.js'; ?>"></script>
        <script src="<?php echo $admin_assets . 'js/iCheck/icheck.min.js'; ?>"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>