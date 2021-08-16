<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

    <div class="theme-logo">
        <a href="#">
            <img src="{{ url('fronts/assets/img/favicon.png') }}" class="navbar-logo" alt="logo">
            <span class="admin-logo">{{ ('SIOLA') }}<span></span></span>
        </a>
    </div>

    <div class="sidebarCollapseFixed">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
    </div>

    <nav id="compactSidebar">
        <ul class="menu-categories">
            @if(Auth::user()->role != 'admin')
            <li class="menu menu-single">
                <a href="{{ url('/user/view') }}" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-single">
                <a href="{{ url('/user/usulan_saya') }}" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <span>Usulan Saya</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-single">
                <a href="{{ url('/user/view-profile') }}" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <span>Profile</span>
                    </div>
                </a>
            </li>
            @else
            <li class="menu menu-single">
                <a href="{{ url('/admin/view') }}" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                        </div>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu menu-single">
                <a href="{{ url('/admin/users-management') }}" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <span>User Management</span>
                    </div>
                </a>
            </li>
            <li class="menu active submenu-closed">
                <a href="#menuFirst" id="menuFirst" data-active="false" class="menu-toggle">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                            </svg>
                        </div>
                        <span>Data</span>
                    </div>
                </a>
            </li>
            @endif
        </ul>
    </nav>
    <div id="compact_submenuSidebar" class="submenu-sidebar">

        <div class="submenu" id="starterKit">
            <ul class="submenu-list" data-parent-element="#starterKit">
                <li class="active">
                    <a href="{{ url('/user/view') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Beranda </a>
                </li>
                <li>
                    <a href="{{ url('/user/usulan_saya') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Usulan Saya </a>
                </li>
                <li>
                    <a href="{{ url('/user/view-profile') }}"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Profile </a>
                </li>
            </ul>
        </div>

        <div class="submenu" id="menuFirst">
            <ul class="submenu-list menu-block-submenu" data-parent-element="#menuFirst">
                <li class="menu-block">
                    <a href="{{ url('/admin/pemberhentian/') }}">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>Pemberhentian
                    </a>
                </li>
                <li class="menu-block">
                    <a href="{{ url('/admin/pengangkatan/') }}"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>Pengangkatan</a>
                </li>
            </ul>
        </div>

        <div class="submenu" id="menuSecond">
            <ul class="submenu-list" data-parent-element="#menuSecond">
                <li>
                    <a href="javascript:void(0);"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Submenu 1 </a>
                </li>
                <li>
                    <a href="javascript:void(0);"> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Submenu 2 </a>
                </li>
            </ul>
        </div>

        <div class="submenu" id="menuThird">
            <ul class="submenu-list" data-parent-element="#menuThird">
                <li>
                    <a href="dragndrop_dragula.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Submenu 1 </a>
                </li>
                <li>
                    <a href="charts_apex.html"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-commit">
                                <circle cx="12" cy="12" r="4"></circle>
                                <line x1="1.05" y1="12" x2="7" y2="12"></line>
                                <line x1="17.01" y1="12" x2="22.96" y2="12"></line>
                            </svg></span> Submenu 2 </a>
                </li>

                <li class="sub-submenu">
                    <a role="menu" class="collapsed" data-toggle="collapse" data-target="#auth" aria-expanded="false">
                        <div> <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                    </path>
                                </svg></span> Submenu 3 </div> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </a>
                    <ul id="auth" class="collapse" data-parent="#compact_submenuSidebar">
                        <li>
                            <a href="javascript:void(0)"> Sub-Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"> Sub-Submenu 2 </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</div>
<!--  END SIDEBAR  -->