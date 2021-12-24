<div class="container">
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header card-header-tabs-line">
            <ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_builder_page" role="tab">Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_mobile_header" role="tab">Logo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_subheader" role="tab">Footer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_content" role="tab">Warna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_aside" role="tab">Flyer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_footer" role="tab">Card Bracnh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_smtp" role="tab">Mail Seting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_builder_notif" role="tab">Notifikasi</a>
                </li>
            </ul>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <?php foreach ($pengaturan as $key) : ?>

            <div id="form-builder">
                <!--begin::Body-->
                <div class="card-body">
                    <div class="tab-content pt-3">
                        <div class="tab-pane active" id="kt_builder_page">
                            <form action="<?= base_url('admin/pengaturan/updateutama'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Nama Aplikasi:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" class="form-control form-control-solid" value="<?= $key['nama_aplikasi'] ?>" name="nama_aplikasi">

                                        <div class="form-text text-muted">Pengaturan untuk mengubah nama aplikasi</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Deskripsi:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="deskripsi" value="<?= $key['deskripsi'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan deskripsi aplikasi agar mudah ditemukan di pencarian google</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Nama Depan:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="nama_depan" value="<?= $key['nama_depan'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan Nama depan aplikasi</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Nama Provinsi:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="nama_provinsi" value="<?= $key['nama_provinsi'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan Nama Provinsi aplikasi</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">Preview</button>
                                            <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="kt_builder_mobile_header">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Logo:</label>
                                <div class="col-lg-9 col-xl-4">
                                    <form action="<?= base_url('admin/pengaturan/updateLogo'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="image-input image-input-outline" id="kt_image_1">
                                            <div class="image-input-wrapper" style="background-image: url(<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>)"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="logo_aplikasi" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="profile_avatar_remove" />
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <button type="submit" class="btn btn-primary font-weight-bold ">Preview</button>
                                                    <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_builder_subheader">
                            <form action="<?= base_url('admin/pengaturan/updateFooter'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Nama Footer:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="nama_footer" value="<?= $key['nama_footer'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan Nama Footer aplikasi</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">Preview</button>
                                            <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="kt_builder_content">
                            <form action="<?= base_url('admin/pengaturan/updatewarna'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Warna Branch:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input class="form-control" type="color" name="warna_utama" value="<?= $key['warna_utama'] ?>" />
                                        <div class="form-text text-muted">Pilih warna untuk Halaman Branch</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Warna Sidebar:</label>
                                    <div class="col-lg-9 col-xl-4 colorpicker-component" id="cp2">
                                        <input class="form-control" type="color" name="warna_sidebar" value="<?= $key['warna_sidebar'] ?>" />
                                        <div class="form-text text-muted">Pilih warna untuk Sidebar</div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary font-weight-bold mr-2">Preview</button>
                                            <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="kt_builder_aside">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">Flyer Branch:</label>
                                <div class="col-lg-9 col-xl-4">
                                    <form action="<?= base_url('admin/pengaturan/updateFlyer'); ?>" method="POST" enctype="multipart/form-data">

                                        <div class="image-input image-input-outline" id="kt_image_2">
                                            <div class="image-input-wrapper" style="background-image: url(<?= base_url('assets/img/logo/' . $key['flyer_branch']) ?>)"></div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="flyer_branch" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="profile_avatar_remove" />
                                            </label>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <button type="submit" class="btn btn-primary font-weight-bold ">Preview</button>
                                                    <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_builder_footer">
                            <form action="<?= base_url('admin/pengaturan/updateCardBranch'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Deskripsi Card 1:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="deskripsi_card_branch_1" value="<?= $key['deskripsi_card_branch_1'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan Deskripsi Card Pusat data</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Deskripsi Card 2:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="deskripsi_card_branch_2" value="<?= $key['deskripsi_card_branch_2'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pengaturan Deskripsi Card Akse data</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary font-weight-bold ">Preview</button>
                                            <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="kt_builder_smtp">
                            <form action="<?= base_url('admin/pengaturan/updatemail'); ?>" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Email Protokol:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="email_smtp" value="<?= $key['email_smtp'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pastikan Allow less secure apps pada Email sudah ON <a href="https://myaccount.google.com/lesssecureapps" target="_blank">CEK DISINI</a></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Password:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text" name="password_email" value="<?= $key['password_email'] ?>" class="form-control form-control-solid" />

                                        <div class="form-text text-muted">Pastikan password email sudah benar terlebih dahulu</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <button type="submit" class="btn btn-primary font-weight-bold ">Preview</button>
                                            <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="kt_builder_notif">

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-lg-right">

                                </label>
                                <div class="col-lg-9 col-xl-4">
                                    <?php if ($key['status_notifikasi'] == 1) { ?>
                                        <span class="symbol-label font-weight-bolder font-size-lg"><b style="color: darkred;">NON AKTIF</b></span>
                                    <?php } else { ?>
                                        <span class="symbol-label font-weight-bolder font-size-lg"><b style="color: green ;">Notifikasi AKTIF</b></span>
                                    <?php } ?>
                                    <?php if ($key['status_notifikasi'] == 1) { ?>
                                        <a href="<?= base_url('admin/pengaturan/onnotif'); ?>"><span class="label label-lg label-light-success label-inline">Aktifkan</span></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('admin/pengaturan/ofnotif'); ?>"><span class="label label-lg label-light-danger label-inline">Matikan</span></a>
                                    <?php } ?>

                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn btn-primary font-weight-bold ">Preview</button>
                                        <!-- <button type="submit" class="btn btn-clean font-weight-bold">Reset</button> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>

        <?php endforeach ?>
        <!--end::Form-->
    </div>
</div>