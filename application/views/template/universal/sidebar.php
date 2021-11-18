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
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Seksi Penghargaan - Fasilitasi Sarana prasanaran dan Kewirausahaan Pemuda">
                                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white <?php if ($tab == 'tab2') {
                                                                                                                            echo 'active';
                                                                                                                        } else {
                                                                                                                        } ?>" data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Communication/Group.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Seksi Kepramukaan dan Kelembagaan Pemuda">
                                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white <?php if ($tab == 'tab3') {
                                                                                                                            echo 'active';
                                                                                                                        } else {
                                                                                                                        } ?>" data-toggle="tab" data-target="#kt_aside_tab_3" role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Daftar Bursa kegiatan">
                                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white <?php if ($tab == 'tab4') {
                                                                                                                            echo 'active';
                                                                                                                        } else {
                                                                                                                        } ?>" data-toggle="tab" data-target="#kt_aside_tab_4" role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <circle fill="#000000" cx="12" cy="9" r="5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
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
                            <a href="#" class="btn btn-icon btn-icon-white btn-hover-transparent-white mb-3" id="kt_quick_actions_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Actions">
                                <span class="svg-icon svg-icon-xl">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                            <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                            <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                            <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a>
                            <!--end::Quick Actions-->
                            <!--begin::Quick Panel-->
                            <a href="#" class="btn btn-icon btn-icon-white btn-hover-transparent-white mb-3 position-relative" id="kt_quick_panel_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Panel">
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
                                <span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">3</span>
                            </a>
                            <!--end::Quick Panel-->
                            <!--begin::User-->
                            <?php if ($this->session->userdata('email')) : ?>
                                <a href="#" class="btn btn-icon btn-icon-white btn-hover-transparent-white w-40px h-40px" id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="<?= $user['nama'] ?>">
                                    <div class="symbol symbol-30 bg-gray-100">
                                        <div class="symbol-label">
                                            <img alt="Logo" src="<?= base_url('assets/img/account/' . $user['foto_user']) ?>" class="h-75 align-self-end" />
                                        </div>
                                        <i class="symbol-badge bg-success"></i>
                                    </div>
                                </a>
                            <?php else : ?>
                                <a href="<?= base_url('sign') ?>" class="btn btn-icon btn-icon-white btn-hover-transparent-white w-40px h-40px" title="Login">
                                    <div class="symbol symbol-30 bg-gray-100">
                                        <div class="symbol-label">
                                            <img alt="Logo" src="<?= base_url('assets/theme/demo5/dist/assets/media/users/blank.png') ?>" class="h-75 align-self-end" />
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
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
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program Berjalan Seksi Kepeloporan - Kepemimpinan dan Sumber daya Pemuda">Program Berjalan Kepeloporan - Kepemimpinan & Sumber Daya Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Paskibraka') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/paskibraka') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Paskibraka">Paskibraka</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Pemuda Pelopor') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/pemuda_pelopor') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Pemuda Pelopor">Pemuda Pelopor</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Pertukaran Pelajar Antar Negara') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/papn') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1" />
                                                                <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) " />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1" />
                                                                <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Pertukaran Pelajar Antar Negara">PAPN</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Lomba Baris Berbaris') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/lbb') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" opacity="0.3" x="5" y="8" width="2" height="8" rx="1" />
                                                                <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <rect fill="#000000" opacity="0.3" x="17" y="8" width="2" height="8" rx="1" />
                                                                <path d="M18,21 C19.1045695,21 20,20.1045695 20,19 C20,17.8954305 19.1045695,17 18,17 C16.8954305,17 16,17.8954305 16,19 C16,20.1045695 16.8954305,21 18,21 Z M18,23 C15.790861,23 14,21.209139 14,19 C14,16.790861 15.790861,15 18,15 C20.209139,15 22,16.790861 22,19 C22,21.209139 20.209139,23 18,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Lomba Baris Berbaris">LBB</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Lomba Tata Upacara Bendera') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/ltub') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Lomba Tata Upacara Bendera">LTUB</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Duta Pancasila') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1pbskksdp/duta_pancasila') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                                <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Duta Pancasila">Duta Pancasila</span>
                                                </a>
                                            </li>

                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1psdpb/psdpbanten') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Peta Sumber daya Pemuda Banten">Peta Sumber Daya Pemuda Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Kerjasama Seksi Kepeloporan - Kepemimpinan dan Sumber Daya Pemuda">Kerjasama Kepeloporan & Kepemimpinan Sumber Daya Pemuda Dispora Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Internal') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1kskksdp/internal') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-14.000000, -12.000000) " x="13" y="5" width="2" height="14" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="3" y="3" width="2" height="18" rx="1" />
                                                                <path d="M5.7071045,15.7071045 C5.3165802,16.0976288 4.68341522,16.0976288 4.29289093,15.7071045 C3.90236664,15.3165802 3.90236664,14.6834152 4.29289093,14.2928909 L10.2928909,8.29289093 C10.6714699,7.914312 11.2810563,7.90106637 11.6757223,8.26284357 L17.6757223,13.7628436 C18.0828413,14.136036 18.1103443,14.7686034 17.7371519,15.1757223 C17.3639594,15.5828413 16.7313921,15.6103443 16.3242731,15.2371519 L11.0300735,10.3841355 L5.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-11.000001, -11.999997) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Internal">Internal</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Eksternal') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1kskksdp/eksternal') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(10.000000, 12.000000) rotate(-90.000000) translate(-10.000000, -12.000000) " x="9" y="5" width="2" height="14" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="19" y="3" width="2" height="18" rx="1" />
                                                                <path d="M7.70710318,15.7071045 C7.31657888,16.0976288 6.68341391,16.0976288 6.29288961,15.7071045 C5.90236532,15.3165802 5.90236532,14.6834152 6.29288961,14.2928909 L12.2928896,8.29289093 C12.6714686,7.914312 13.281055,7.90106637 13.675721,8.26284357 L19.675721,13.7628436 C20.08284,14.136036 20.1103429,14.7686034 19.7371505,15.1757223 C19.3639581,15.5828413 18.7313908,15.6103443 18.3242718,15.2371519 L13.0300721,10.3841355 L7.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-12.999999, -11.999997) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Eksternal">Eksternal</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Capaian Target Program Kepeloporan - Kepemimpinan dan Sumber Daya Pemuda Dispora Banten">Data Capaian Target Program Kepeloporan - Kepemimpinan dan Sumber Daya Pemuda Dispora Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Tahun 2019') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2019') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Tahun 2019">Tahun 2019</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Tahun 2020') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2020') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Tahun 2020'">Tahun 2020</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Tahun 2021') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2021') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Tahun 2021'">Tahun 2021</span>
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
                            <div class="tab-pane <?php if ($tab == 'tab2') {
                                                        echo 'fade show active';
                                                    } else {
                                                    } ?>" id="kt_aside_tab_2">
                                <!--begin::Aside Menu-->
                                <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                                    <!--begin::Menu Container-->
                                    <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">
                                        <!--begin::Menu Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program Berjalan Seksi Penghargaan - Fasilitasi Sarana Prasarana Dan Kewirausahaan Pemuda">Data Program Berjalan Seksi Penghargaan - Fasilitasi Sarana Prasarana Dan Kewirausahaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Seleksi Kewirausahaan Muda Pemula') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2pbspfspkp/seleksi_kewirausahaan_muda_pemula') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Seleksi Kewirausahaan Muda Pemula">Seleksi Kewirausahaan Muda Pemula</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Gelar Karya Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2pbspfspkp/gelar_karya_pemuda') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Gelar Karya Pemuda">Data Gelar Karya Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Pelatihan Keterampilan Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2pbspfspkp/pelatihan_keterampilan_pemuda') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1" />
                                                                <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) " />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1" />
                                                                <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Pelatihan Keterampilan Pemuda">Data Pelatihan Keterampilan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Apresiasi keterampilan Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2pbspfspkp/apresiasi_penghargaan') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" opacity="0.3" x="5" y="8" width="2" height="8" rx="1" />
                                                                <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <rect fill="#000000" opacity="0.3" x="17" y="8" width="2" height="8" rx="1" />
                                                                <path d="M18,21 C19.1045695,21 20,20.1045695 20,19 C20,17.8954305 19.1045695,17 18,17 C16.8954305,17 16,17.8954305 16,19 C16,20.1045695 16.8954305,21 18,21 Z M18,23 C15.790861,23 14,21.209139 14,19 C14,16.790861 15.790861,15 18,15 C20.209139,15 22,16.790861 22,19 C22,21.209139 20.209139,23 18,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Apresiasi keterampilan Pemuda">Data Apresiasi keterampilan Pemuda</span>
                                                </a>
                                            </li>

                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2dkp/kewirausahaan_pemuda') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Kewirausahaan Pemuda">Data Kewirausahaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2ppbb/profil_pemuda_berprestasi_banten') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Profil Pemuda Berprestasi Banten">Data Profil Pemuda Berprestasi Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2ddfpskp/daya_dukungfpsskp') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Daya Dukung Fasilitas Penghargaan - Sarpras dan Kewirausahaan Pemuda">Data Daya Dukung Fasilitas Penghargaan - Sarpras dan Kewirausahaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2pspkkp/proposal_sarpras_kegiatan_kewirausahaan_pemuda') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Proposal Sarpras dan Kegiatan Kewirausahaan Pemuda">Proposal Sarpras dan Kegiatan Kewirausahaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Capaian Target Program Penghargaan - Fasilitasi Sarpras Dan Kewirausahaan Pemuda Dispora Banten">Data Capaian Target Program Penghargaan - Fasilitasi Sarpras Dan Kewirausahaan Pemuda Dispora Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2019') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2019') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-14.000000, -12.000000) " x="13" y="5" width="2" height="14" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="3" y="3" width="2" height="18" rx="1" />
                                                                <path d="M5.7071045,15.7071045 C5.3165802,16.0976288 4.68341522,16.0976288 4.29289093,15.7071045 C3.90236664,15.3165802 3.90236664,14.6834152 4.29289093,14.2928909 L10.2928909,8.29289093 C10.6714699,7.914312 11.2810563,7.90106637 11.6757223,8.26284357 L17.6757223,13.7628436 C18.0828413,14.136036 18.1103443,14.7686034 17.7371519,15.1757223 C17.3639594,15.5828413 16.7313921,15.6103443 16.3242731,15.2371519 L11.0300735,10.3841355 L5.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-11.000001, -11.999997) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian Target Program Penghargaan Tahun 2019">Tahun 2019</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2020') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2020') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-14.000000, -12.000000) " x="13" y="5" width="2" height="14" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="3" y="3" width="2" height="18" rx="1" />
                                                                <path d="M5.7071045,15.7071045 C5.3165802,16.0976288 4.68341522,16.0976288 4.29289093,15.7071045 C3.90236664,15.3165802 3.90236664,14.6834152 4.29289093,14.2928909 L10.2928909,8.29289093 C10.6714699,7.914312 11.2810563,7.90106637 11.6757223,8.26284357 L17.6757223,13.7628436 C18.0828413,14.136036 18.1103443,14.7686034 17.7371519,15.1757223 C17.3639594,15.5828413 16.7313921,15.6103443 16.3242731,15.2371519 L11.0300735,10.3841355 L5.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-11.000001, -11.999997) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian Target Program Penghargaan Tahun 2020">Tahun 2020</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2021') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2021') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-14.000000, -12.000000) " x="13" y="5" width="2" height="14" rx="1" />
                                                                <rect fill="#000000" opacity="0.3" x="3" y="3" width="2" height="18" rx="1" />
                                                                <path d="M5.7071045,15.7071045 C5.3165802,16.0976288 4.68341522,16.0976288 4.29289093,15.7071045 C3.90236664,15.3165802 3.90236664,14.6834152 4.29289093,14.2928909 L10.2928909,8.29289093 C10.6714699,7.914312 11.2810563,7.90106637 11.6757223,8.26284357 L17.6757223,13.7628436 C18.0828413,14.136036 18.1103443,14.7686034 17.7371519,15.1757223 C17.3639594,15.5828413 16.7313921,15.6103443 16.3242731,15.2371519 L11.0300735,10.3841355 L5.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-11.000001, -11.999997) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian Target Program Penghargaan Tahun 2021">Tahun 2021</span>
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
                            <div class="tab-pane <?php if ($tab == 'tab3') {
                                                        echo 'fade show active';
                                                    } else {
                                                    } ?>" id="kt_aside_tab_3">
                                <!--begin::Aside Menu-->
                                <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                                    <!--begin::Menu Container-->
                                    <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">
                                        <!--begin::Menu Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program Berjalan Seksi Kepramukaan dan Kelembagaan Pemuda">Data Program Berjalan Seksi Kepramukaan dan Kelembagaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Kemah Bakti Pramuka') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/kemah_bakti_pemula') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Kemah Bakti Pramuka">Kemah Bakti Pramuka</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Pelatihan Keterampilan Kepramukaan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/pelatihan_keterampilan_kepramukaan') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Pelatihan Keterampilan Kepramukaan">Pelatihan Keterampilan Kepramukaan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data KNPI dan Ornasisai Kepemudaan Lainnya') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/knpi_organisasi_kepemudaan_lainnya') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1" />
                                                                <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) " />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1" />
                                                                <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data KNPI dan Ornasisai Kepemudaan Lainnya">KNPI dan Ornasisai Kepemudaan Lainnya</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Latikan Dasar Kepemimpinan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/Ldk') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" opacity="0.3" x="5" y="8" width="2" height="8" rx="1" />
                                                                <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <rect fill="#000000" opacity="0.3" x="17" y="8" width="2" height="8" rx="1" />
                                                                <path d="M18,21 C19.1045695,21 20,20.1045695 20,19 C20,17.8954305 19.1045695,17 18,17 C16.8954305,17 16,17.8954305 16,19 C16,20.1045695 16.8954305,21 18,21 Z M18,23 C15.790861,23 14,21.209139 14,19 C14,16.790861 15.790861,15 18,15 C20.209139,15 22,16.790861 22,19 C22,21.209139 20.209139,23 18,23 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
                                                                <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Latikan Dasar Kepemimpinan">Data Latikan Dasar Kepemimpinan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Revitalisasi Kepemudaan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/revitalisasi_kepemudaan') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Revitalisasi Kepemudaan">Revitalisasi Kepemudaan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Evaluasi Kepemudaan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/evaluasi_kepemudaan') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.89442719,16.9422697 L8.10557281,16.0478425 C9.18098918,13.8970098 11.7963808,13.0252125 13.9472136,14.1006289 C14.7898516,14.5219479 15.4731082,15.2052045 15.8944272,16.0478425 L14.1055728,16.9422697 C13.8777812,16.4866865 13.5083696,16.1172749 13.0527864,15.8894833 C11.8899107,15.3080454 10.4758651,15.7793939 9.89442719,16.9422697 Z M21.9058667,8.11925961 C22.4393328,8.26220142 22.7559153,8.81053838 22.6129734,9.34400448 L20.9657703,15.4914504 C20.8228285,16.0249165 20.2744915,16.341499 19.7410254,16.1985572 C19.2075593,16.0556153 18.8909768,15.5072784 19.0339186,14.9738123 L20.6811218,8.82636639 C20.8240636,8.29290029 21.3724006,7.9763178 21.9058667,8.11925961 Z M2.09413334,8.11925961 C2.62759945,7.9763178 3.1759364,8.29290029 3.31887821,8.82636639 L4.87179248,14.6219213 C5.0147343,15.1553875 4.69815181,15.7037244 4.1646857,15.8466662 C3.6312196,15.989608 3.08288264,15.6730255 2.93994083,15.1395594 L1.38702656,9.34400448 C1.24408475,8.81053838 1.56066724,8.26220142 2.09413334,8.11925961 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path d="M6.5,20 C4.01471863,20 2,17.9852814 2,15.5 C2,13.0147186 4.01471863,11 6.5,11 C8.98528137,11 11,13.0147186 11,15.5 C11,17.9852814 8.98528137,20 6.5,20 Z M17.5,20 C15.0147186,20 13,17.9852814 13,15.5 C13,13.0147186 15.0147186,11 17.5,11 C19.9852814,11 22,13.0147186 22,15.5 C22,17.9852814 19.9852814,20 17.5,20 Z" fill="#000000" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Evaluasi Kepemudaan">Evaluasi Kepemudaan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Perijinan Organisasi Kepemudaan') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3pbspfspkp/perijinan_organisasi_kepemudaan') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000" />
                                                                <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Perijinan Organisasi Kepemudaan">Perijinan Organisasi Kepemudaan</span>
                                                </a>
                                            </li>

                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3dppk/data_program_pembinaan_kepramukaan') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program Pembinaan Kepramukaan">Data Program Pembinaan Kepramukaan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3dppkp/program_pembinaan_keorganisasian_pemuda') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program dan Pembinaan Keorganisasian Pemuda">Program dan Pembinaan Keorganisasian Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3dkkp/kreatifitas_kelembagaan_pemuda') ?>" class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Kreatifitas Kelembagaan Pemuda">Kreatifitas Kelembagaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item menu-item-active " aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Capaian Target Program Kepramukaan dan Kelembagaan Pemuda Dispora Banten">Data Capaian Target Program Kepramukaan dan Kelembagaan Pemuda Dispora Banten</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2019') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2019') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2019">Tahun 2019</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2020') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2020') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2020'">Tahun 2020</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2021') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2021') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path d="M9.26193932,16.6476484 C8.90425297,17.0684559 8.27315905,17.1196257 7.85235158,16.7619393 C7.43154411,16.404253 7.38037434,15.773159 7.73806068,15.3523516 L16.2380607,5.35235158 C16.6013618,4.92493855 17.2451015,4.87991302 17.6643638,5.25259068 L22.1643638,9.25259068 C22.5771466,9.6195087 22.6143273,10.2515811 22.2474093,10.6643638 C21.8804913,11.0771466 21.2484189,11.1143273 20.8356362,10.7474093 L17.0997854,7.42665306 L9.26193932,16.6476484 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(14.999995, 11.000002) rotate(-180.000000) translate(-14.999995, -11.000002) " />
                                                                <path d="M4.26193932,17.6476484 C3.90425297,18.0684559 3.27315905,18.1196257 2.85235158,17.7619393 C2.43154411,17.404253 2.38037434,16.773159 2.73806068,16.3523516 L11.2380607,6.35235158 C11.6013618,5.92493855 12.2451015,5.87991302 12.6643638,6.25259068 L17.1643638,10.2525907 C17.5771466,10.6195087 17.6143273,11.2515811 17.2474093,11.6643638 C16.8804913,12.0771466 16.2484189,12.1143273 15.8356362,11.7474093 L12.0997854,8.42665306 L4.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.999995, 12.000002) rotate(-180.000000) translate(-9.999995, -12.000002) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2021'">Tahun 2021</span>
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
                            <div class="tab-pane <?php if ($tab == 'tab4') {
                                                        echo 'fade show active';
                                                    } else {
                                                    } ?>" id="kt_aside_tab_4">
                                <!--begin::Aside Menu-->
                                <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                                    <!--begin::Menu Container-->
                                    <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">
                                        <!--begin::Menu Nav-->
                                        <ul class="menu-nav">
                                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                                <a class="menu-link">
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
                                                    <span class="menu-text text-uppercase" data-toggle="tooltip" data-placement="right" data-boundary="window" title="Data Program Berjalan Seksi Kepramukaan dan Kelembagaan Pemuda">Data Program Berjalan Seksi Kepramukaan dan Kelembagaan Pemuda</span>
                                                </a>
                                            </li>
                                            <li class="menu-item mb-3">
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/4bursa/kkp') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Bursa Kepeloporan Kepemimpinan dan Sumber Daya pemuda">Bursa KKSDP</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/4bursa/psarpraskwu') ?>" class="menu-link">
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
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda">Bursa Kewirausahaan</span>
                                                </a>
                                            </li>
                                            <li class="menu-item <?php if ($page == 'Bursa Kepramukaan dan Kelembagaan Pemuda') {
                                                                        echo 'menu-item-active';
                                                                    } else {
                                                                    }; ?>" aria-haspopup="true">
                                                <a href="<?= base_url('datacenter/4bursa/kepramukaan') ?>" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Home/Library.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(13.000000, 6.000000) rotate(-450.000000) translate(-13.000000, -6.000000) " x="12" y="8.8817842e-16" width="2" height="12" rx="1" />
                                                                <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) " />
                                                                <rect fill="#000000" opacity="0.3" transform="translate(11.000000, 18.000000) scale(1, -1) rotate(90.000000) translate(-11.000000, -18.000000) " x="10" y="12" width="2" height="12" rx="1" />
                                                                <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text" data-toggle="tooltip" data-placement="right" title="Bursa Kepramukaan dan Kelembagaan Pemuda">Bursa Kepramukaan</span>
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
                                <div class="m-0 text-dark-50 font-weight-bold font-size-lg"><?= $key['nama_aplikasi'] ?> - <span class="text-danger"><?= $page ?></span>
                                </div>
                            <?php endforeach ?>
                            <!--end::Description-->
                        </div>
                    </div>
                </div>
                <!--end::Subheader-->