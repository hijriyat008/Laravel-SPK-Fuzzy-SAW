<!-- Nav Sidebar -->
<nav class="sidebar offcanvas-md offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false">
    <div class="d-flex justify-content-end m-3 d-block d-md-none">
        <button aria-label="Close" data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4">
            <i class="fas fa-close"></i>
        </button>
    </div>
    <div class="d-flex justify-content-center mt-md-5 mb-5">
        <div class="logo d-flex">
            <img src="/img/ksaj.png" alt="" width="50" height="45" class="d-inline-block align-text-top">
            <h2 style="">KSAJ</h2>
        </div>
    </div>
    <div class="pt-2 d-flex flex-column gap-5">
        <div class="menu p-0">
            <p>Daily Use</p>
            <a href="/admin/dashboard" class="item-menu {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <img src="/icons/dashboard1.png" width="30px" alt="" style="margin-right: 8px">
                Dashboard
            </a>
            <a href="/admin/datasets" class="item-menu {{ Request::is('admin/datasets') ? 'active' : '' }}">
                <img src="/icons/folder3.png" width="30px" alt="" style="margin-right: 8px">
                Data Target
            </a>
            @if (auth()->user()->level == 'pimpinan')
                <a href="/admin/kriteria" class="item-menu {{ Request::is('admin/kriteria') ? 'active' : '' }}">
                    <img src="/icons/criteria.png" width="30px" alt="" style="margin-right: 8px">
                    Kriteria
                </a>
                <a href="/admin/proses_hitung"
                    class="item-menu {{ Request::is('admin/proses_hitung', 'admin/convert', 'admin/normalisasi', 'admin/prefensi', 'admin/hasil') ? 'active' : '' }}">
                    <img src="/icons/process.png" width="30px" alt="" style="margin-right: 8px">
                    Proses
                </a>
            @endif
            <a href="/admin/datahasils" class="item-menu {{ Request::is('admin/datahasils') ? 'active' : '' }}">
                <img src="/icons/authenticity.png" width="30px" alt="" style="margin-right: 8px">
                Data Lolos
            </a>
            <a href="/admin/datapenerima" class="item-menu {{ Request::is('admin/datapenerima') ? 'active' : '' }}">
                <img src="/icons/search.png" width="30px" alt="" style="margin-right: 8px">
                Data Penerima
            </a>
        </div>
        <div class="menu">
            <p>Others</p>
            <a href="/admin/data_users" class="item-menu {{ Request::is('admin/data_users') ? 'active' : '' }}">
                <img src="/icons/personal-data.png" width="30px" alt="" style="margin-right: 8px">
                Data User
            </a>
            <a href="#" class="item-menu">
                <img src="/icons/settings.png" width="30px" alt="" style="margin-right: 8px">
                Settings
            </a>
            <a href="#" class="item-menu">
                <img src="/icons/help-web-button.png" width="30px" alt="" style="margin-right: 8px">
                Help
            </a>
        </div>
    </div>
</nav>
