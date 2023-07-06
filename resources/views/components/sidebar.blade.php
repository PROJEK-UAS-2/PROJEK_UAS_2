<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/master" class="app-brand-link">
            <i class="bx bxs-bus bx-lg"></i>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Blue Bus</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{request()->segment(1) == "index" ? "active" : ""}}">
            <a href="index" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Admin | Pages</span>
        </li>
        <!-- Bis -->
        <li class="menu-item {{request()->segment(1) == "bis" ? "active" : ""}}">
            <a href="/bis" class="menu-link">
                <i class="menu-icon tf-icons bx bx-bus bx-sm"></i>
                <div data-i18n="Basic">Bis</div>
            </a>
        </li>
        <!-- Supir -->
        <li class="menu-item  {{request()->segment(1) == "supir" ? "active" : ""}}">
            <a href="/supir" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user bx-sm"></i>
                <div data-i18n="Boxicons">Supir</div>
            </a>
        </li>
        <!-- Tipe Bis -->
        <li class="menu-item {{request()->segment(1) == "tipebis" ? "active" : ""}}">
            <a href="/tipebis" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-car-wash bx-sm"></i>
                <div data-i18n="Tables">Tipe Bis</div>
            </a>
        </li>
        <!-- Paket Bis -->
        <li class="menu-item  {{request()->segment(1) == "paketbis" ? "active" : ""}}">
            <a href="/paketbis" class="menu-link">
                <i class="menu-icon tf-icons bx bx-purchase-tag-alt bx-sm"></i>
                <div data-i18n="Tables">Paket Bis</div>
            </a>
        </li>
        <!-- Pembelian -->
        <li class="menu-item  {{request()->segment(1) == "pembelian" ? "active" : ""}}">
            <a href="/pembelian" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-food-menu bx-sm"></i>
                <div data-i18n="Tables">Pembelian</div>
            </a>
        </li>
    </ul>
</aside>