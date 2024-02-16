<aside id="sidebar" class="sidebar">
    <i class="bi bi-x-lg toggle-sidebar-btn d-block d-sm-block d-md-block d-lg-block d-xl-none"></i>

    <div class="sidebar-header">
        <a href="#">
            <img src="/assets/img/logo.png" class="sidebar-logo" alt="" />
        </a>
    </div>

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading">HOME</li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? '' : 'collapsed' }}" href="{{ url('/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-heading">MENU</li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('laboratories') ? '' : 'collapsed' }}" href="{{ url('/laboratories') }}">
                    <i class="bi bi-view-stacked"></i>
                    <span>Computer Lab</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('attendance') ? '' : 'collapsed' }}" href="{{ url('/attendance') }}">
                    <i class="bi bi-clipboard2-check"></i>
                    <span>Attendance</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('instructors') ? '' : 'collapsed' }}" href="{{ url('/instructors') }}">
                    <i class="bi bi-person-workspace"></i>
                    <span>Instructors</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('schedule') ? '' : 'collapsed' }}" href="{{ url('/schedule') }}">
                    <i class="bi bi-calendar2-week"></i>
                    <span>Class Schedule</span>
                </a>
            </li>
    
            <li class="nav-item">
                <a class="nav-link {{ request()->is('employees') ? '' : 'collapsed' }}"
                    href="{{ url('/employees') }}">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Reports</span>
                </a>
            </li>

            <li class="nav-heading">USER</li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('boarders') ? '' : 'collapsed' }}" href="{{ url('/boarders') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dormitories') ? '' : 'collapsed' }}"
                    href="{{ url('/dormitories') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>

            <li class="nav-heading">SETTINGS</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#"
                    aria-expanded="false">
                    <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>

                <ul id="icons-nav" class="nav-content collapse {{ Request::is('users/archived*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/users/archived') }}">
                            <i class="bi bi-circle"></i><span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/tenants/archived') }}">
                            <i class="bi bi-circle"></i><span>Logs</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dormitories/archived') }}">
                            <i class="bi bi-circle"></i><span>Archives</span>
                        </a>
                    </li>
                </ul>
        </li>
    </ul>
</aside>
