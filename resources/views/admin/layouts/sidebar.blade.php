<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Sidebar wrapper-->
    <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true"
        data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header"
        data-kt-scroll-offset="5px">
        <!--begin::Secondary menu-->
        <div id="kt_app_sidebar_menu"
            class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 py-4 py-lg-6 px-2 px-lg-6"
            data-kt-menu="true">
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu content-->
                <div class="menu-content">
                    <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home</span>
                </div>
                <!--end:Menu content-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ Route::currentRouteName() == 'admin.index' ? 'active' : '' }} "
                    href="{{ route('admin.index') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Dashboard</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link {{ Route::currentRouteName() == 'categories.index' ? 'active' : '' }} "
                    href="{{ route('categories.index') }}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Category</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                    <span class="menu-title">Careers</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="../../demo49/dist/pages/careers/list.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Careers List</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link" href="../../demo49/dist/pages/careers/apply.html">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Careers Apply</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div> --}}
            <!--end:Menu item-->
        </div>
        <!--end::Secondary menu-->
    </div>
    <!--end::Sidebar wrapper-->
</div>
<!--end::Sidebar-->


