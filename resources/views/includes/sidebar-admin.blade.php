<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Menu</div>
            <!-- Sidenav Link (Dashboard)-->
            <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                href="{{ route('admin-dashboard') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ request()->is('admin/department*') ? 'active' : '' }}"
                href="{{ route('department.index') }}">
                <div class="nav-link-icon"><i data-feather="home"></i></div>
                Struktur Prodi
            </a>
            <a class="nav-link {{ request()->is('admin/sender*') ? 'active' : '' }}" href="{{ route('sender.index') }}">
                <div class="nav-link-icon"><i data-feather="users"></i></div>
                Data Dosen
            </a>
            <a class="nav-link {{ request()->is('admin/letter/create') ? 'active' : '' }}"
                href="{{ route('letter.create') }}">
                <div class="nav-link-icon"><i data-feather="upload"></i></div>
                Tambah Dokumen
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-1') ? 'active' : '' }}"
                href="{{ route('kriteria-1') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 1
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-2') ? 'active' : '' }}"
                href="{{ route('kriteria-2') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 2
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-3') ? 'active' : '' }}"
                href="{{ route('kriteria-3') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 3
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-4') ? 'active' : '' }}"
                href="{{ route('kriteria-4') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 4
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-5') ? 'active' : '' }}"
                href="{{ route('kriteria-5') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 5
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-6') ? 'active' : '' }}"
                href="{{ route('kriteria-6') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 6
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-7') ? 'active' : '' }}"
                href="{{ route('kriteria-7') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 7
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-8') ? 'active' : '' }}"
                href="{{ route('kriteria-8') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 8
            </a>
            <a class="nav-link {{ request()->is('admin/letter/kriteria-9') ? 'active' : '' }}"
                href="{{ route('kriteria-9') }}">
                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                Kriteria 9
            </a>
            <a class="nav-link {{ request()->is('admin/user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                <div class="nav-link-icon"><i data-feather="user"></i></div>
                Data Pengguna
            </a>
            {{-- <a class="nav-link {{ request()->is('admin/setting*') ? 'active' : '' }}"
                href="{{ route('setting.index') }}">
                <div class="nav-link-icon"><i data-feather="settings"></i></div>
                Profile
            </a> --}}
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
        </div>
    </div>
</nav>
