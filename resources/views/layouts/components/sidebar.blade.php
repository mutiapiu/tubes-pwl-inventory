@php
    $menus = [
        (object) [
        "title" => "Beranda",
        "path" => "/",
        "icon" => "fas fa-th",
        ],
        (object) [
        "title" => "Jenis Barang",
        "path" => "categories",
        "icon" => "fas fa-th",
        ],
        (object) [
        "title" => "Stok Barang",
        "path" => "products",
        "icon" => "fas fa-th",
        ],
    ];
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
        <img src="{{ asset('templates/img/barang.png') }}" alt="Logo" style="max-width: 50px; margin-bottom: 3px;">
        <span class="brand-text font-weight-light">Inventory Barang</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                
                </div>
                <div class="info">
                <a href="#" class="d-block">Mutia </a>
                </div>
            </div>


            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @foreach ($menus as $menu)
                        <li class="nav-item">
                            <a href="{{ $menu->path[0] !== '/' ? '/' . $menu->path : $menu->path }}" class="nav-link {{ request()->path() === $menu->path ? 'active' : '' }}  ">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>
                                    {{ $menu->title }}
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </aside>