<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <i class="bx bxs-school"></i>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">APTECH</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-user"></i>
                <div data-i18n="Layouts">Members</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.member.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Members</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.member.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Members</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i  class=" bx bx-planet "></i>
                <div data-i18n="Layouts">Astronomical Entity</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.astronomicalentity.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Astronomical Entity</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.astronomicalentity.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Astronomical Entity</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i animation="spin" class=" bx bx-atom bx-spin"></i>
                <div data-i18n="Layouts">Solar System</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.ss.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Solar System</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.ss.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Solar System</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-user"></i>
                <div data-i18n="Layouts">Constellation</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.constellation.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Constellation</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.constellation.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Constellation</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class=" bx bx-user"></i>
                <div data-i18n="Layouts">Observatory</div>
            </a>

            <ul class="menu-sub">
                <li class="">
                    <a href="{{route('admin.observatory.index')}}" class="menu-link">
                        <i class="bx bx-list-ul"></i>
                        <div data-i18n="Without menu">List Observatory</div>
                    </a>
                </li>
                <li class="" >
                    <a href="{{route('admin.observatory.create')}}" class="menu-link">
                        <i class="bx bx-list-plus"></i>
                        <div data-i18n="Without navbar">Create Observatory</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
