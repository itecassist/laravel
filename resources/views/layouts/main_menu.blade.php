<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-child-indent" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item {{ request()->is('stock-control*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('stock-control*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Stock Control
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('stock-control.categories') }}" class="nav-link {{ request()->is('stock-control/categories') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('stock-control.units') }}" class="nav-link {{ request()->is('stock-control/units') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Units</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('stock-control.items') }}" class="nav-link {{ request()->is('stock-control/items*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Items</p>
                    </a>
                </li>
            </ul>
        </li>
        @canany(['user_management', 'sa'])
        <li class="nav-item {{ request()->is('user-management*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('user-management*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-users"></i>
                <p>
                    User Management
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                @canany(['users_access', 'sa'])
                <li class="nav-item">
                    <a href="{{ route('user-management.users') }}"
                        class="nav-link {{ request()->is('user-management/users') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Users</p>
                    </a>
                </li>
                @endcanany
                @canany(['permissions_access', 'sa'])
                <li class="nav-item">
                    <a href="{{ route('user-management.permissions') }}"
                        class="nav-link {{ request()->is('user-management/permissions') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Permissions</p>
                    </a>
                </li>
                @endcanany
                @canany(['roles_access', 'sa'])
                <li class="nav-item">
                    <a href="{{ route('user-management.roles') }}"
                        class="nav-link {{ request()->is('user-management/roles') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Roles</p>
                    </a>
                </li>
                @endcanany
            </ul>
        </li>
    @endcanany

        <li class="nav-item {{ request()->is('settings*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ request()->is('settings*') ? 'active' : '' }}">
                <i class="nav-icon fa fa-users"></i>
                <p>
                    Settings
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('settings.counters') }}"
                       class="nav-link {{ request()->is('settings/counters') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Counters</p>
                    </a>
                </li>
                @can('sa')
                <li class="nav-item">
                    <a href="{{ route('settings.enums') }}"
                       class="nav-link {{ request()->is('settings/enums') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lookups</p>
                    </a>
                </li>
                @endcan
            </ul>

        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
