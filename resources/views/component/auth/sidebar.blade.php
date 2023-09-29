<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="justify-content:center;height:100px;">
        <a href="index.html" class="app-brand-link">
            <img src="../assets/img/logoDinasPendidikan.png" width="145px" height="100px"/>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ $title === 'Dashboard' ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item {{ $title === 'Profile Sekolah' ? 'active' : '' }}  {{ $title === 'Data Pelengkap' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Account Settings">Profile</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $title === 'Profile Sekolah' ? 'active' : '' }}">
                    <a href="/profile/sekolah" class="menu-link">
                        <div data-i18n="Account">Profil Sekolah</div>
                    </a>
                </li>
                <li class="menu-item {{ $title === 'Data Pelengkap' ? 'active' : '' }}">
                    <a href="/profile/dataPelengkap" class="menu-link">
                        <div data-i18n="Notifications">Data Pelengkap</div>
                    </a>
                </li>                
            </ul>
        </li>
        <li class="menu-item {{ $title === 'Data PTK' ? 'active' : '' }} {{ $title === 'Data Siswa' ? 'active' : '' }} {{ $title === 'Data Sarpras' ? 'active' : '' }} {{ $title === 'Data Sanitasi' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle show" >
                <i class="menu-icon tf-icons bx bx-data"></i>
                <div data-i18n="Authentications">Rekapitulasi</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $title === 'Data PTK' ? 'active' : '' }}">
                    <a href="/Data/dataptk" class="menu-link" target="">
                        <div data-i18n="Basic">Data PTK</div>
                    </a>
                </li>
                <li class="menu-item {{ $title === 'Data Siswa' ? 'active' : '' }}">
                    <a href="/Data/datasiswa" class="menu-link" target="">
                        <div data-i18n="Basic">Data PD</div>
                    </a>
                </li>
                <li class="menu-item {{ $title === 'Data Sarpras' ? 'active' : '' }}">
                    <a href="/Data/prasarana" class="menu-link" target="">
                        <div data-i18n="Basic">Data Sarpras</div>
                    </a>
                </li>
                <li class="menu-item {{ $title === 'Data Sanitasi' ? 'active' : '' }}">
                    <a href="/Data/sanitasi" class="menu-link" target="">
                        <div data-i18n="Basic">Data Sanitasi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ $title === 'Kontak Sekolah' ? 'active' : '' }}">
            <a href="/profile/kontak" class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Misc">Kontak</div>
            </a>            
        </li>            
    </ul>
</aside>