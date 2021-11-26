<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->

        <div class="row">
            <div class="col-xxl-4">
                <!--begin::Mixed Widget 9-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Statistik Pemuda</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-lg">Total <?= $jumlahpemuda; ?> Pemuda </span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">


                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Wrapper-->
                        <div class="pt-10">
                            <!--begin::Stats-->
                            <div class="flex-row-fluid">
                                <span class="text-dark-75 font-weight-bolder display4"><?= $jumlahpemuda; ?>
                                    <span class="text-muted font-size-h5 font-weight-bold pl-2">Total pemuda</span></span>
                                <div class="progress mt-3">
                                    <div class="progress-bar bg-danger rounded mr-n3 zindex-3" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-success rounded mr-n3 zindex-2" role="progressbar" style="width: 23%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-info rounded mr-n3 zindex-1" role="progressbar" style="width: 37%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 17%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Items-->
                            <div class="pt-13">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pb-8">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                        <input type="checkbox" name="select" value="1" />
                                        <span class="bg-danger"></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Text-->
                                    <div class="d-flex align-items-center flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 pr-5">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Pemuda</a>
                                            <span class="text-muted font-weight-bold">Berjenis kelamin Laki-Laki</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Label-->
                                        <span class="text-dark-75 font-weight-bolder font-size-sm py-2"><?= $getlakilaki; ?>
                                            <span class="text-muted font-weight-bold font-size-sm pl-1">Orang</span></span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pb-8">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                        <input type="checkbox" name="select" value="1" />
                                        <span class="bg-success"></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Text-->
                                    <div class="d-flex align-items-center flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 pr-5">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Pemuda</a>
                                            <span class="text-muted font-weight-bold">Berjenis kelamin perempuan</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Label-->
                                        <span class="text-dark-75 font-weight-bolder font-size-sm py-2"><?= $getperempuan; ?>
                                            <span class="text-muted font-weight-bold font-size-sm pl-1">Orang</span></span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center pb-8">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                        <input type="checkbox" name="select" value="1" />
                                        <span class="bg-info"></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Text-->
                                    <div class="d-flex align-items-center flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 pr-5">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Pemuda</a>
                                            <span class="text-muted font-weight-bold">Berusia 20 tahun kebawah</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Label-->
                                        <span class="text-dark-75 font-weight-bolder font-size-sm py-2"><?= $getu20kebawah; ?>
                                            <span class="text-muted font-weight-bold font-size-sm pl-1">Orang</span></span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="checkbox checkbox-inline flex-shrink-0 m-0 mr-4">
                                        <input type="checkbox" name="select" value="1" />
                                        <span class="bg-warning"></span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Text-->
                                    <div class="d-flex align-items-center flex-wrap flex-row-fluid">
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 pr-5">
                                            <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Pemuda</a>
                                            <span class="text-muted font-weight-bold">Berusia 20 tahun keatas</span>
                                        </div>
                                        <!--end::Text-->
                                        <!--begin::Label-->
                                        <span class="text-dark-75 font-weight-bolder font-size-sm py-2"><?= $getu20keatas; ?>
                                            <span class="text-muted font-weight-bold font-size-sm pl-1">Orang</span></span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 9-->
            </div>

            <div class="col-xxl-4">
                <!--begin::Mixed Widget 8-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-6">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label font-weight-bolder font-size-h4 text-dark-75">Forum Dispora Progress</span>
                            <span class="text-muted mt-3 font-weight-bold font-size-lg">Bersama menyatukan pemuda</span>
                        </h3>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pb-20">
                        <!--begin::Items-->
                        <div class="flex-grow-1 pb-5">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">ST</span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="d-flex flex-wrap flex-row-fluid">
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column pr-5 flex-grow-1">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Status</a>
                                        <span class="text-muted font-weight-bold">Jumlah interaktif status</span>
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center py-2">
                                        <!--begin::Label-->
                                        <span class="text-success font-weight-bolder font-size-sm pr-6"><?= $totaldiskusi; ?></span>
                                        <!--end::Label-->
                                        <!--begin::Btn-->
                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <!--end::Btn-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">IN</span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="d-flex flex-wrap flex-row-fluid">
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column pr-5 flex-grow-1">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Interaksi</a>
                                        <span class="text-muted font-weight-bold">Jumlah interaksi status</span>
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center py-2">
                                        <!--begin::Label-->
                                        <span class="text-success font-weight-bolder font-size-sm pr-6"><?= $totalbalasan; ?></span>
                                        <!--end::Label-->
                                        <!--begin::Btn-->
                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <!--end::Btn-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                                    <span class="symbol-label font-weight-bolder font-size-lg">PO</span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Content-->
                                <div class="d-flex flex-wrap flex-row-fluid">
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column pr-5 flex-grow-1">
                                        <a href="#" class="text-dark-75 text-hover-primary mb-1 font-weight-bolder font-size-lg">Pengguna Online</a>
                                        <span class="text-muted font-weight-bold">Jumlah pengguna online</span>
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center py-2">
                                        <!--begin::Label-->
                                        <span class="text-danger font-weight-bolder font-size-sm pr-6"><?= $getuseronline; ?></span>
                                        <!--end::Label-->
                                        <!--begin::Btn-->
                                        <a href="#" class="btn btn-icon btn-light btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-success">
                                                <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Navigation/Angle-right.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </a>
                                        <!--end::Btn-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                        <!--begin::Chart-->
                        <div class="progress-vertical min-h-150px flex-grow-1 border-bottom">
                            <div class="text-center mr-1">
                                <div class="progress bg-light-primary mb-4 mr-0 rounded-bottom-0" data-toggle="tooltip" title="<?= $getuseronline; ?>%">
                                    <div class="progress-bar bg-primary w-50px rounded-bottom-0" role="progressbar" style="height: <?= $getuseronline; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bold font-size-lg text-muted">PO</span>
                            </div>
                            <div class="text-center mx-1">
                                <div class="progress bg-light-primary mb-4 mr-0 rounded-bottom-0" data-toggle="tooltip" title="<?= $totalbalasan; ?>%">
                                    <div class="progress-bar bg-primary w-50px rounded-bottom-0" role="progressbar" style="height: <?= $totalbalasan; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bold font-size-lg text-muted">IN</span>
                            </div>
                            <div class="text-center mx-1">
                                <div class="progress bg-light-primary mb-4 mr-0 rounded-bottom-0" data-toggle="tooltip" title="<?= $totaldiskusi; ?>">
                                    <div class="progress-bar bg-primary w-50px rounded-bottom-0" role="progressbar" style="height: <?= $totaldiskusi; ?>" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bold font-size-lg text-muted">ST</span>
                            </div>
                            <div class="text-center ml-1">
                                <div class="progress bg-light-primary mb-4 mr-0 rounded-bottom-0" data-toggle="tooltip" title="Jumlah akun <?= $jumlahpemuda; ?>%">
                                    <div class="progress-bar bg-primary w-50px rounded-bottom-0" role="progressbar" style="height: <?= $jumlahpemuda; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="font-weight-bold font-size-lg text-muted">Q4</span>
                            </div>
                        </div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 8-->
            </div>




            <div class="col-xl-4">
                <!--begin::List Widget 11-->
                <div class="card card-custom card-stretch gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Trenddds</h3>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0">
                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-9 bg-light-danger rounded p-5">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-danger mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Communication/Group-chat.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Total Kegiatan Kepemudaan</a>
                                <!-- <span class="text-muted font-weight-bold">Bidang Kepemudaan</span> -->
                            </div>
                            <!--end::Title-->
                            <!--begin::Lable-->
                            <span class="font-weight-bolder text-danger py-1 font-size-lg"><?= $getbursatotal; ?></span>
                            <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-9">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-success mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Communication/Write.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Total Kegiatan</a>
                                <span class="text-muted font-weight-bold">Bidang Kepeloporan& Kepemimpianan</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Lable-->
                            <span class="font-weight-bolder text-success py-1 font-size-lg"><?= $getkepeloporan; ?></span>
                            <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5 mb-9">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-info mr-5">
                                <span class="svg-icon svg-icon-lg">
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
                            </span>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Total Kegiatan</a>
                                <span class="text-muted font-weight-bold">Bidang Sarpras & Kewirausahaan</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Lable-->
                            <span class="font-weight-bolder text-info py-1 font-size-lg"><?= $getkwu; ?></span>
                            <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-warning mr-5">
                                <span class="svg-icon svg-icon-lg">
                                    <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/General/Attachment2.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                            <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                            <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                            <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <!--end::Icon-->
                            <!--begin::Title-->
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Total Kegiatan</a>
                                <span class="text-muted font-weight-bold">Bidang Kepramukaan & Kelembagaan</span>
                            </div>
                            <!--end::Title-->
                            <!--begin::Lable-->
                            <span class="font-weight-bolder text-warning py-1 font-size-lg"><?= $getkepramukaan; ?></span>
                            <!--end::Lable-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 11-->
            </div>


        </div>

        <!--end::Tables Widget 5-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->