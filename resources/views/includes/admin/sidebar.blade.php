<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-header">MENU</li>
        <li class="nav-item">
            <a href="/admin/posts" class="nav-link">

                <i class="nav-icon fas fa-solid fa-database"></i>
                <p>
                    DATABASE
                    <span class="badge badge-info right">{{ \App\Models\Post::all()->count()}}</span>
                </p>
            </a>
        </li>

    </ul>
</nav>
