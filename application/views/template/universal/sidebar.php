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
                                <!--                           
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Seksi Kepeloporan Kepemimpinan dan Sumber Daya Pemuda">
                                    <a href="#" class="nav-link btn btn-icon btn-icon-white btn-hover-transparent-white <?php if ($tab == 'tab1') {
                                                                                                                            echo 'active';
                                                                                                                        } else {
                                                                                                                        } ?>" data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                         
                                        </span>
                                    </a>
                                </li> -->
                                <!--end::Item-->
                                <!--begin::Item-->

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

                                            <li class="menu-item mb-3">
                                            </li>

                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text">Kepeloporan & Kepemimpinan</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Paskibraka') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/paskibraka') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Paskibraka</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Pemuda Pelopor') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/pemuda_pelopor') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pemuda Pelopor</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-item <?php if ($page == 'Data Pertukaran Pelajar Antar Negara') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/papn') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pertukaran Pelajar Antar Negara</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-item <?php if ($page == 'Data Lomba Baris Berbaris') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/lbb') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Lomba Baris Berbaris</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Lomba Tata Upacara Bendera') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/ltub') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Lomba Tata Upacara Bendera</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-item <?php if ($page == 'Data Duta Pancasila') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/1pbskksdp/duta_pancasila') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Duta Pancasila</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Peta Sumber Daya Pemuda Banten') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/1psdpb/psdpbanten') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Peta Sumber Daya Pemuda Banten</span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Kerjasama</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>

                                                            <!-- break -->
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item <?php if ($page == 'Data Internal') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/1kskksdp/internal') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Internal</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Eksternal') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/1kskksdp/eksternal') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Eksternal</span>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>



                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Capaian Target</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>

                                                            <!-- break -->
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item <?php if ($page == 'Data Tahun 2019') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2019') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">tahun 2019</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Tahun 2020') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2020') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2020</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Tahun 2021') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/1ctpkksdpdb/tahun2021') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2021</span>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>



                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text">Penghargaan & Sarpras Kewirausahaan</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Seleksi Kewirausahaan Muda Pemula') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2pbspfspkp/seleksi_kewirausahaan_muda_pemula') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Seleksi Kewirausahaan Muda Pemula</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Gelar Karya Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2pbspfspkp/gelar_karya_pemuda') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Gelar Karya Pemuda</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Peserta Pelatihan Keterampilan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2pbspfspkp/pelatihan_keterampilan_pemuda') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Peserta Pelatihan Keterampilan Pemuda</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Apresiasi keterampilan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2pbspfspkp/apresiasi_penghargaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Apresiasi keterampilan Pemuda</span>
                                                            </a>
                                                        </li>


                                                        <li class="menu-item <?php if ($page == 'Data Kewirausahaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2dkp/kewirausahaan_pemuda') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Kewirausahaan Pemuda</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Profil Pemuda Berprestasi Banten') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/2ppbb/profil_pemuda_berprestasi_banten') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Profil Pemuda Berprestasi Banten</span>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </div>

                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Daya Dukung Fasilitasi Penghargaan - Sarpras dan Kewirausahaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/2ddfpskp/daya_dukungfpsskp') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Daya Dukung Sarpras </span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Proposal Sarana Prasarana dan Kegiatan Kewirausahaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/2pspkkp/proposal_sarpras_kegiatan_kewirausahaan_pemuda') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Proposal Sarpras dan Kegiatan</span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Capaian Target</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>

                                                            <!-- break -->
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2019') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2019') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">tahun 2019</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2020') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2020') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2020</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Capaian Target Program Penghargaan Tahun 2021') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/2ctppfspkpdb/tahun2021') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2021</span>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>


                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text">Kepramukaan & Kelembagaan</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Kemah Bakti Pramuka') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/kemah_bakti_pemula') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Kemah Bakti Pramuka</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Pelatihan Keterampilan Kepramukaan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/pelatihan_keterampilan_kepramukaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Pelatihan Keterampilan Kepramukaan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data KNPI dan Ornasisai Kepemudaan Lainnya') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/knpi_organisasi_kepemudaan_lainnya') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">KNPI dan Ornasisai Kepemudaan Lainnya</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Latikan Dasar Kepemimpinan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/Ldk') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Latikan Dasar Kepemimpinan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Revitalisasi Kepemudaan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/revitalisasi_kepemudaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Revitalisasi Kepemudaan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Evaluasi Kepemudaan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/evaluasi_kepemudaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Evaluasi Kepemudaan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Perijinan Organisasi Kepemudaan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/3pbspfspkp/perijinan_organisasi_kepemudaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Perijinan Organisasi Kepemudaan</span>
                                                            </a>
                                                        </li>




                                                    </ul>
                                                </div>

                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Program dan Pembinaan Kepramukaan') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/3dppk/data_program_pembinaan_kepramukaan') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Program dan Pembinaan Kepramukaan </span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Program dan Pembinaan Keorganisasian Pemudaa') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/3dppkp/program_pembinaan_keorganisasian_pemuda') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Program dan Pembinaan Keorganisasian Pemuda</span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Data Kreatifitas Kelembagaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?>" aria-haspopup="true">
                                                            <a href="<?= base_url('datacenter/3dkkp/kreatifitas_kelembagaan_pemuda') ?>" class="menu-link">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Kreatifitas Kelembagaan Pemuda</span>

                                                            </a>
                                                        </li>

                                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="javascript:;" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Capaian Target</span>
                                                                <i class="menu-arrow"></i>
                                                            </a>

                                                            <!-- break -->
                                                            <div class="menu-submenu">
                                                                <i class="menu-arrow"></i>
                                                                <ul class="menu-subnav">
                                                                    <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2019') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2019') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">tahun 2019</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2020') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2020') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2020</span>

                                                                        </a>
                                                                    </li>

                                                                    <li class="menu-item <?php if ($page == 'Data Capaian target Kepramukaan dan Kelembagaan Pemuda Dispora Banten Tahun 2021') {
                                                                                                echo 'menu-item-active';
                                                                                            } else {
                                                                                            }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                        <a href="<?= base_url('datacenter/3ctpkkpdb/tahun2021') ?>" class="menu-link menu-toggle">
                                                                            <i class="menu-bullet menu-bullet-dot">
                                                                                <span></span>
                                                                            </i>
                                                                            <span class="menu-text">Tahun 2021</span>

                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>


                                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                <a href="javascript:;" class="menu-link menu-toggle">
                                                    <span class="svg-icon menu-icon">
                                                        <!--begin::Svg Icon | path:/keen/theme/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-text">Daftar Kegiatan Bidang Kepemudaan</span>
                                                    <i class="menu-arrow"></i>
                                                </a>
                                                <div class="menu-submenu">
                                                    <i class="menu-arrow"></i>
                                                    <ul class="menu-subnav">
                                                        <li class="menu-item menu-item-parent" aria-haspopup="true">
                                                            <span class="menu-link">
                                                                <span class="menu-text">Applications</span>
                                                            </span>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Seksi Kepeloporan, Kepemimpinan dan Sumber Daya Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/4bursa/kkp') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Bursa Kepeloporan & Kepemimpinan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Bursa Penghargaan Fasilitasi Sarana Prasarana dan Kewirausahaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/4bursa/psarpraskwu') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Bursa Penghargaan & Kewirausahaan</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-item <?php if ($page == 'Bursa Kepramukaan dan Kelembagaan Pemuda') {
                                                                                    echo 'menu-item-active';
                                                                                } else {
                                                                                }; ?> menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                            <a href="<?= base_url('datacenter/4bursa/kepramukaan') ?>" class="menu-link menu-toggle">
                                                                <i class="menu-bullet menu-bullet-line">
                                                                    <span></span>
                                                                </i>
                                                                <span class="menu-text">Bursa Kepramukaan & Kelembagaan</span>
                                                            </a>
                                                        </li>






                                                    </ul>
                                                </div>


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
                                <div class="m-0 text-dark-50 font-weight-bold font-size-lg"><?= $key['nama_aplikasi'] ?> - <span class="text-danger"><?= $page ?></span>
                                </div>
                            <?php endforeach ?>
                            <!--end::Description-->
                        </div>
                    </div>
                </div>
                <!--end::Subheader-->