<div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
    <div class="menu-item">
        <a class="menu-link" href="{{ route('admin.dashboard') }}">
            <span class="menu-title">Dashboard</span>
        </a>
    </div>
</div>
@if(request()->user()->admin)

    <div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
        <div class="menu-item">
            <a class="menu-link" href="{{ route('admin.users.index') }}">
                <span class="menu-title">Bayiler</span>
            </a>
        </div>
    </div>
@endif

<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
    <!--begin:Menu link-->
    <span class="menu-link">
        <span class="menu-title">İşlemler</span>
        <span class="menu-arrow d-lg-none"></span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" style="">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.process.success') }}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-kt-initialized="1">
                <span class="menu-title">Başarılı İşlemler</span>
            </a>
            <!--end:Menu link-->
        </div>
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.process.fails') }}"  data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-kt-initialized="1">
                <span class="menu-title">Başarısız İşlemler</span>
            </a>
            <!--end:Menu link-->
        </div>
        <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.process.pending') }}"  data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-kt-initialized="1">
                <span class="menu-title">Yarıda Kalan İşlemler</span>
            </a>
            <!--end:Menu link-->
        </div>

    </div>
    <!--end:Menu sub-->
</div>

<div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
    <div class="menu-item">
        <a class="menu-link" href="{{ route('admin.profile') }}">
            <span class="menu-title">Ayarlar</span>
        </a>
    </div>
</div>