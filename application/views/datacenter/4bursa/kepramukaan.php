<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col">
                <!--begin::Stats Widget 10-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label"></h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-bold nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_7_1">Kemah Bakti Pramuka</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_2">PKK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_3">KNPI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_4">LDK</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_5">Revitalisasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_6">Evaluasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_7_7">Perijinan Organisasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_7_1" role="tabpanel" aria-labelledby="kt_tab_pane_7_1">
                                <div class="row pt-5 bg-light-primary">
                                    <?php $no = 1;
                                    foreach ($getbursa as $key) : ?>
                                        <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-end py-2">
                                                        <!--begin::Pic-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Pic-->

                                                            <div class="d-flex flex-shrink-0 mr-5">
                                                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-primary">
                                                                    <span class="symbol-label font-size-h3 font-weight-boldest"><?= substr($key['nama_jenis_kegiatan'], 0, 1); ?></span>
                                                                </div>
                                                            </div>
                                                            <!--end::Pic-->
                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $key['nama_jenis_kegiatan'] ?></a>
                                                                <span class="text-muted font-weight-bold"><?= $key['periode'] ?></span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Desc-->
                                                    <p class="py-2"><?= $key['keterangan'] ?>.</p>
                                                    <!--end::Desc-->
                                                    <!--begin::Contacts-->
                                                    <!--end::Contacts-->
                                                    <!--begin::Actions-->
                                                    <div class="pt-2">
                                                        <?php if ($key['status_selesai'] == 1) { ?>
                                                            <?php if (!$this->session->userdata('email')) : ?>
                                                                <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('datacenter/4bursa/kepramukaan/kemah/' . $key['id_bursa_kegiatan']) ?>" class="btn btn-primary font-weight-bolder mr-2">DAFTAR</a>
                                                            <?php endif; ?>
                                                        <?php } elseif ($key['status_selesai'] == 2) { ?>
                                                            <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                                                        <?php } elseif ($key['status_selesai'] == 3) { ?>
                                                            <a href="#" class="btn btn-light-success font-weight-bolder mr-2">SELESAI</a>
                                                        <?php } ?>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_7_2" role="tabpanel" aria-labelledby="kt_tab_pane_7_2">
                                <div class="row pt-5 bg-light-primary">
                                    <?php $no = 1;
                                    foreach ($getGelarKarya as $key) : ?>
                                        <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-end py-2">
                                                        <!--begin::Pic-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Pic-->

                                                            <div class="d-flex flex-shrink-0 mr-5">
                                                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-primary">
                                                                    <span class="symbol-label font-size-h3 font-weight-boldest"><?= substr($key['nama_jenis_kegiatan'], 0, 1); ?></span>
                                                                </div>
                                                            </div>
                                                            <!--end::Pic-->
                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $key['nama_jenis_kegiatan'] ?></a>
                                                                <span class="text-muted font-weight-bold"><?= $key['periode'] ?></span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Desc-->
                                                    <p class="py-2"><?= $key['keterangan'] ?>.</p>
                                                    <!--end::Desc-->
                                                    <!--begin::Contacts-->

                                                    <!--end::Contacts-->
                                                    <!--begin::Actions-->
                                                    <div class="pt-2">
                                                        <?php if ($key['status_selesai'] == 1) { ?>
                                                            <?php if (!$this->session->userdata('email')) : ?>
                                                                <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('datacenter/4bursa/Psarpraskwu/gelarkarya/' . $key['id_bursa_kegiatan']) ?>" class="btn btn-primary font-weight-bolder mr-2">DAFTAR</a>
                                                            <?php endif; ?>
                                                        <?php } elseif ($key['status_selesai'] == 2) { ?>
                                                            <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                                                        <?php } elseif ($key['status_selesai'] == 3) { ?>
                                                            <a href="#" class="btn btn-light-success font-weight-bolder mr-2">SELESAI</a>
                                                        <?php } ?>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_7_3" role="tabpanel" aria-labelledby="kt_tab_pane_7_3">
                                <div class="row pt-5 bg-light-primary">
                                    <?php $no = 1;
                                    foreach ($pelatihanketerampilan as $key) : ?>
                                        <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-end py-2">
                                                        <!--begin::Pic-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Pic-->

                                                            <div class="d-flex flex-shrink-0 mr-5">
                                                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-primary">
                                                                    <span class="symbol-label font-size-h3 font-weight-boldest"><?= substr($key['nama_jenis_kegiatan'], 0, 1); ?></span>
                                                                </div>
                                                            </div>
                                                            <!--end::Pic-->
                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $key['nama_jenis_kegiatan'] ?></a>
                                                                <span class="text-muted font-weight-bold"><?= $key['periode'] ?></span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Desc-->
                                                    <p class="py-2"><?= $key['keterangan'] ?>.</p>
                                                    <!--end::Desc-->
                                                    <!--begin::Contacts-->

                                                    <!--end::Contacts-->
                                                    <!--begin::Actions-->
                                                    <div class="pt-2">
                                                        <?php if ($key['status_selesai'] == 1) { ?>
                                                            <?php if (!$this->session->userdata('email')) : ?>
                                                                <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('datacenter/4bursa/Psarpraskwu/pelatihan_keterampilan/' . $key['id_bursa_kegiatan']) ?>" class="btn btn-primary font-weight-bolder mr-2">DAFTAR</a>
                                                            <?php endif; ?>
                                                        <?php } elseif ($key['status_selesai'] == 2) { ?>
                                                            <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                                                        <?php } elseif ($key['status_selesai'] == 3) { ?>
                                                            <a href="#" class="btn btn-light-success font-weight-bolder mr-2">SELESAI</a>
                                                        <?php } ?>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_7_4" role="tabpanel" aria-labelledby="kt_tab_pane_7_3">
                                <div class="row pt-5 bg-light-primary">
                                    <?php $no = 1;
                                    foreach ($apresiasi as $key) : ?>
                                        <div class="col-xxl-3 col-xl-6 col-md-6 col-sm-6">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-end py-2">
                                                        <!--begin::Pic-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Pic-->

                                                            <div class="d-flex flex-shrink-0 mr-5">
                                                                <div class="symbol symbol-lg-75 symbol-circle symbol-light-primary">
                                                                    <span class="symbol-label font-size-h3 font-weight-boldest"><?= substr($key['nama_jenis_kegiatan'], 0, 1); ?></span>
                                                                </div>
                                                            </div>
                                                            <!--end::Pic-->
                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0"><?= $key['nama_jenis_kegiatan'] ?></a>
                                                                <span class="text-muted font-weight-bold"><?= $key['periode'] ?></span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Desc-->
                                                    <p class="py-2"><?= $key['keterangan'] ?>.</p>
                                                    <!--end::Desc-->
                                                    <!--begin::Contacts-->

                                                    <!--end::Contacts-->
                                                    <!--begin::Actions-->
                                                    <div class="pt-2">
                                                        <?php if ($key['status_selesai'] == 1) { ?>
                                                            <?php if (!$this->session->userdata('email')) : ?>
                                                                <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                                            <?php else : ?>
                                                                <a href="<?= base_url('datacenter/4bursa/Psarpraskwu/apresiasi/' . $key['id_bursa_kegiatan']) ?>" class="btn btn-primary font-weight-bolder mr-2">DAFTAR</a>
                                                            <?php endif; ?>
                                                        <?php } elseif ($key['status_selesai'] == 2) { ?>
                                                            <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                                                        <?php } elseif ($key['status_selesai'] == 3) { ?>
                                                            <a href="#" class="btn btn-light-success font-weight-bolder mr-2">SELESAI</a>
                                                        <?php } ?>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--end::Stats Widget 10-->
            </div>
            <!--begin::Card-->

            <!--end::Card-->
        </div>

        <!--end::Tables Widget 5-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->