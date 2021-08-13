<div class="header-container">
                                <header class="header navbar navbar-expand-sm">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                                            <div class="bt-menu-trigger">
                                                <span></span>
                                            </div>
                                        </a>
                                        <div class="page-header">
                                            <div class="page-title">
                                                <h3>
                                                @if(Auth::user()->role == 'admin')    
                                                    {{ __('History Permohonan Layanan Administrasi Saya') }}
                                                @else
                                                    {{ __('Usulan') }}
                                                @endif
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="header-actions">

                                        <div class="nav-item dropdown user-profile-dropdown">
                                            <a href="#" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                                                data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                                <div class="media">
                                                <svg viewBox="0 0 24 24" width="200" height="200" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    <div class="media-body align-self-center">
                                                        <h6>{{ Auth::user()->name }}</h6>
                                                    </div>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu position-absolute"
                                                aria-labelledby="userProfileDropdown">
                                                <div class="user-profile-section">
                                                    <div class="media mx-auto">
                                                        <div class="media-body">
                                                            <h5>{{ ('Hak Akses:') }} {{ Auth::user()->role }}</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-item">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-log-out">
                                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                            <polyline points="16 17 21 12 16 7"></polyline>
                                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                                        </svg> <span>Log Out</span>
                                                    </a>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </header>
                            </div>