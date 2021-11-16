<!--begin::Body-->

<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="<?= base_url('datacenter/universal') ?>">
            <?php foreach ($pengaturan as $key) : ?>
                <img alt="Logo" src="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" class="logo-default max-h-30px" />
            <?php endforeach ?>
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex coba flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left d-flex aside-fixed" id="kt_aside">
                <!--begin::Primary-->
                <?php foreach ($pengaturan as $key) : ?>
                    <div style="background-color: <?= $key['warna_sidebar'] ?>;" class="aside-primary d-flex flex-column align-items-center flex-row-auto">
                        <!--begin::Brand-->
                        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
                            <!--begin::Logo-->
                            <a href="<?= base_url('datacenter/universal') ?>">
                                <img alt="Logo" src="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" class="max-h-40px" />
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Nav Wrapper-->
                        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
                            <!--begin::Nav-->
                            <ul class="nav flex-column" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Seksi Kepeloporan Kepemimpinan dan Sumber Daya Pemuda">
                                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white <?php if ($tab == 'tab1') {
                                                                                                                            echo 'active';
                                                                                                                        } else {
                                                                                                                        } ?>" data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->

                                <!--end::Item-->
                                <!--begin::Item-->
                                <!--end::Item-->
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Nav Wrapper-->
                        <!--begin::Footer-->
                        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
                            <!--begin::Aside Toggle-->
                            <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Toggle Aside">
                                <i class="ki ki-bold-arrow-back icon-sm"></i>
                            </span>
                            <!--end::Aside Toggle-->
                            <!--begin::Quick Actions-->

                            <!--end::Quick Actions-->
                            <!--begin::Quick Panel-->

                            <!--end::Quick Panel-->
                            <!--begin::User-->
                            <a href="#" class="btn btn-icon btn-icon-white btn-hover-transparent-white w-40px h-40px" id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="<?= $user['nama'] ?>">
                                <div class="symbol symbol-30 bg-gray-100">
                                    <div class="symbol-label">
                                        <img alt="Logo" src="<?= base_url('assets/img/account/' . $user['foto_user']) ?>" class="h-75 align-self-end" />
                                    </div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                            </a>
                            <!--end::User-->
                        </div>
                        <!--end::Footer-->
                    </div>
                <?php endforeach ?>
                <!--end::Primary-->
                <!--begin::Secondary-->
                <div class="aside-secondary d-flex flex-row-fluid">
                    <!--begin::Workspace-->
                    <div class="aside-workspace scroll scroll-push my-2">
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tab Pane-->
                            <div class="tab-pane <?php if ($tab == 'tab1') {
                                                        echo 'fade show active';
                                                    } else {
                                                    } ?>" id="kt_aside_tab_1">
                                <!--begin::Aside Menu-->
                                <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                                    <!--begin::Menu Container-->
                                    <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">
                                        <!--begin::Menu Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item <?php if ($page == 'Dashboard') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('admin/dashboard') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Dashboard">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Pengaturan Tampilan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('admin/pengaturan') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M3.5,3 L5,3 L5,19.5 C5,20.3284271 4.32842712,21 3.5,21 L3.5,21 C2.67157288,21 2,20.3284271 2,19.5 L2,4.5 C2,3.67157288 2.67157288,3 3.5,3 Z" fill="#000000" />
                                                                <path d="M6.99987583,2.99995344 L19.754647,2.99999303 C20.3069317,2.99999474 20.7546456,3.44771138 20.7546439,3.99999613 C20.7546431,4.24703684 20.6631995,4.48533385 20.497938,4.66895776 L17.5,8 L20.4979317,11.3310353 C20.8673908,11.7415453 20.8341123,12.3738351 20.4236023,12.7432941 C20.2399776,12.9085564 20.0016794,13 19.7546376,13 L6.99987583,13 L6.99987583,2.99995344 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Pengaturan Tampilan">Pengaturan Tampilan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Manajemen Akses User') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('admin/user') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Manajemen Akses User">Manajemen User</span>
                                                </a>
                                            </li>


                                        </ul>
                                        <!--end::Menu Nav-->
                                    </div>
                                    <!--end::Menu Container-->
                                </div>
                                <!--end::Aside Menu-->
                                <!--end::List-->
                            </div>
                            <!--end::Tab Pane-->
                            <!--begin::Tab Pane-->
                            <!--end::Aside Menu-->
                            <!--end::List-->
                        </div>
                        <!--end::Tab Pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Workspace-->
            </div>
            <!--end::Secondary-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5">
                                    <!-- <?= $page; ?> -->
                                </h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <div class="d-flex align-items-center flex-wrap">
                            <!--begin::Dropdown-->

                            <!--end::Dropdown-->
                        </div>
                        <!--end::Toolbar-->

                    </div>
                </div>
                <div class="container">
                    <div class="card card-custom gutter-b">
                        <div class="card-body d-flex align-items-center py-5 py-lg-10">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative ml-5 mr-15 ml-lg-9">
                                <span class="svg-icon svg-icon-5x svg-icon-primary position-absolute opacity-15">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Layout/Layout-polygon.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">
                                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                            <path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="svg-icon svg-icon-2x svg-icon-primary position-absolute">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Tools/Compass.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Description-->
                            <?php foreach ($pengaturan as $key) : ?>
                                <div class="m-0 text-dark-50 font-weight-bold font-size-lg"><?= $key['nama_aplikasi'] ?>
                                </div>
                            <?php endforeach ?>
                            <!--end::Description-->
                        </div>
                    </div>
                    <p><?= $this->session->flashdata('message'); ?></p>
                </div>
                <!--end::Subheader-->