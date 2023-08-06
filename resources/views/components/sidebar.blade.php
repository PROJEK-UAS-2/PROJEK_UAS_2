<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/index" class="app-brand-link">
            <i class="bx bxs-bus bx-lg"></i>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Blue Bus</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>
        <!-- Dashboard -->
        <li class="menu-item {{request()->segment(1) == "index" ? "active" : ""}}">
            <a href="index" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home bx-sm"></i>
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
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Team Behind The Scene</span>
        </li>
        <li class="menu-item 
            {{request()->segment(1) == "fahmi" ? "open" : ""}} 
            {{request()->segment(1) == "alsya" ? "open" : ""}}
            {{request()->segment(1) == "iqlima" ? "open" : ""}}
            {{request()->segment(1) == "janet" ? "open" : ""}}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-group bx-sm"></i>
                <div data-i18n="Our Team">Our Team</div>
            </a>
            <ul class="menu-sub">   
                <li class="menu-item {{request()->segment(1) == "alsya" ? "active" : ""}}">
                    <a href="/alsya" class="menu-link">
                        <div data-i18n="Alsya Majandra">Alsya Majandra</div>
                    </a>
                </li>
                <li class="menu-item {{request()->segment(1) == "fahmi" ? "active" : ""}}">
                    <a href="/fahmi" class="menu-link">
                        <div data-i18n="Fahmi Alhafizh">Fahmi Alhafizh</div>
                    </a>
                </li>
                <li class="menu-item {{request()->segment(1) == "iqlima" ? "active" : ""}}">
                    <a href="/iqlima" class="menu-link">
                        <div data-i18n="Iqlima Fasha">Iqlima Fasha</div>
                    </a>
                </li>
                <li class="menu-item {{request()->segment(1) == "janet" ? "active" : ""}}">
                    <a href="/janet" class="menu-link">
                        <div data-i18n="Janet Berliana">Janet Berliana</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>