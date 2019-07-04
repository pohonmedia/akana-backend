<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">GENERAL</li>
                <?php
                foreach ($menu_list as $key => $value) {
                    $active = "";
                    if ($value['ids'] == $nav_active) {
                        $active = 'active';
                    }
                    $tree_view = "";
                    if ($value['is_header']) {
                        $tree_view = ' treeview';
                    }
                    echo '<li class="' . $active . $tree_view . '" id="' . $value['ids'] . '">';
                    echo '<a href="' . base_url($value['url']) . '">';
                    echo '<i class="' . $value['icon_class'] . '"></i> ';
                    echo '<span>' . $value['name'] . '</span>';
                    if ($value['is_header']) {
                        echo ' <i class="fa fa-angle-left pull-right"></i>';
                    }
                    echo '</a>';
                    if ($value['is_header']) {
                        echo '<ul class="treeview-menu">';
                        if(!isset($subnav_active)) {
                            $subnav_active = '';
                        }
                        if (!empty($value['child'])) {
                            foreach ($value['child'] as $k => $v) {
                                $sub_active = "";
                                if ($v->menu_id == $subnav_active) {
                                    $sub_active = 'active';
                                }
                                echo '<li class="' . $sub_active .  '" id="' . $v->menu_id . '"><a href="' . base_url($v->menu_link) . '"><i class="fa fa-circle-o"></i> ' . $v->menu_name . '</a></li>';
                            }
                        }
                        echo '</ul>';
                    }
                    echo '</li>';
                }
                ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>