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
            @if (empty(auth()->user()->dataset->user_id))
                <a href="/verif_data" class="item-menu {{ Request::is('verif_data') ? 'active' : '' }}">
                    <img src="/icons/folder.png" width="30px" alt="" style="margin-right: 8px">
                    Verifikasi Data
                </a>
            @else
                <a href="/dashboard" class="item-menu {{ Request::is('dashboard') ? 'active' : '' }}">
                    <img src="/icons/dashboard.png" width="30px" alt="" style="margin-right: 8px">
                    Dashboard
                </a>
                <a href="/profil_user/{{ auth()->user()->dataset->id }}/edit"
                    class="item-menu {{ Request::is('profil_user', 'profil_user/*') ? 'active' : '' }}">
                    <img src="/icons/user3.png" width="30px" alt="" style="margin-right: 8px">
                    Profil
                </a>
                @if (empty(auth()->user()->dataset->datahitung->dataset_id))
                    <a href="/verif_datahitung" class="item-menu {{ Request::is('verif_datahitung') ? 'active' : '' }}">
                        <img src="/icons/input.png" width="30px" alt="" style="margin-right: 8px">
                        Verifikasi Data
                    </a>
                @else
                    <a href="/verif_datahitung" class="item-menu {{ Request::is('verif_datahitung') ? 'active' : '' }}">
                        <img src="/icons/input.png" width="30px" alt="" style="margin-right: 8px">
                        Edit Data
                    </a>
                @endif
                @if (empty(auth()->user()->dataset->file->dataset_id))
                    <a href="/upload" class="item-menu {{ Request::is('upload') ? 'active' : '' }}">
                        <img src="/icons/file-upload.png" width="30px" alt="" style="margin-right: 8px">
                        Upload Berkas
                    </a>
                @else
                    <a href="/upload" class="item-menu {{ Request::is('upload') ? 'active' : '' }}">
                        <img src="/icons/pencil.png" width="30px" alt="" style="margin-right: 8px">
                        Edit Berkas
                    </a>
                @endif
            @endif
        </div>
    </div>
</nav>
