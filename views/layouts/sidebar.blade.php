<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="{{asset("assets/dist/assets/images/logo/logo.png")}}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Kategori Yönetimi</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="{{route("admin.category.edit")}}">Kategori Ekle</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route("admin.category.index")}}">Kategori Listesi</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Ürün Yönetimi</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="{{route("admin.product.edit")}}">Ürün Ekle</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route("admin.product.index")}}">Ürün Listesi</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Kullanıcı Yönetimi</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="{{route("admin.user.edit")}}">Kullanıcı Ekle</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route("admin.user.index")}}">Kullanıcı Listesi</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Satış Yönetimi</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item ">
                            <a href="{{route("admin.cart.edit")}}">Satış Ekle</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="{{route("admin.cart.index")}}">Satış Listesi</a>
                        </li>
                    </ul>
                </li>




            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
