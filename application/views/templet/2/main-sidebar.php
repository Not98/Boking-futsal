<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() . 'assets/image/' . $user['image']; ?>" class="img-circle"
                    alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $user['nama'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <?php
            //memamnggil function sesasen user login
            $role_id    = $this->session->userdata('role_id');

            // rellasi 
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id`= $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- LOOPING MENU -->
            <?php foreach ($menu as $m) : ?>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-suitcase "></i>
                    <span><?= $m['menu']; ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>




                <!-- MENYIAPKAN SUB MENU SESUAI MENU -->
                <?php
                    $menuId = $m['id'];
                    $querySubMenu = " SELECT * FROM `user_sub_menu`
        JOIN `user_menu` ON `user_sub_menu`.`menu_id` =`user_menu`.`id`
        WHERE `user_sub_menu`.`menu_id`= $menuId 
        AND `user_sub_menu`.`is_active`=1
                    ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();


                    ?>



                <!-- Nav Item - Dashboard -->
                <?php foreach ($subMenu as $sm) : ?>


                <?php if ($titel == $sm['titel']) : ?>
            <li class="nav-item active">

                <?php else : ?>
                <?php endif; ?>
                <ul class="treeview-menu">

                    <li><a href="<?= base_url($sm['url']); ?>"><i class="fa fa-circle-o"></i> <?= $sm['titel']; ?></a>
                    </li>


                </ul>

                <?php endforeach; ?>





                <?php endforeach; ?>
                <!-- Divider -->



                <!-- /.sidebar -->
</aside>