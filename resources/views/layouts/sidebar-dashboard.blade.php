<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-smile"></i>
        </div>
        <div class="sidebar-brand-text text-white mx-3">ABSENSI HIMA/UKM</div>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider">

    {{-- DINAMIS MENU UNTUK ADMIN DAN ADMINISTRATOR --}}

    <?
        // role admin
        // $role = 1; // administrator
        $role = 2; // admin ormawa

        // MENU
        $queryMenu = "  SELECT `admin_menu`.`id`, `menu`
                        FROM `admin_menu` JOIN `admin_access_menu`
                        ON `admin_menu`.`id` = `admin_access_menu`.`menu_id`
                        WHERE `admin_access_menu`.`role` = $role
                        ORDER BY `admin_access_menu`.`menu_id` ASC
        ";

        $menus = DB::select($queryMenu);
    ?>

    <? foreach ($menus as $menu) : ?>
    <div class="sidebar-heading">
        {{-- LOOPING MENU --}}
        <?= $menu->menu; ?>
    </div>

    {{-- sub menu --}}
    <?
            $menuId = $menu->id;
            $querySubMenu = " SELECT *
                              FROM `admin_sub_menu`
                              WHERE `menu_id` = $menuId
                              AND `is_active` = 1

            ";
            $subMenus = DB::select($querySubMenu)
        ?>
    <? foreach ($subMenus as $subMenu) : ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= $subMenu->url; ?>">
            <i class="<?= $subMenu->icon; ?>"></i>
            <span><?= $subMenu->title; ?></span></a>
    </li>
    <? endforeach; ?>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <? endforeach; ?>

    <!-- Nav Item - logout account -->
    <li class="nav-item">
        <a class="nav-link" href="/logout" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
