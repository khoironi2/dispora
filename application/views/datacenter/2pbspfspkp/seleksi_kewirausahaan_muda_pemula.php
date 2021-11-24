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
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label"><?= $page; ?>
                                <!-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span> -->
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Nama</th>
                                    <th>Nama Usaha</th>
                                    <th>Asal Sekolah</th>
                                    <th>Alamat</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Periode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($getpublik as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <th>
                                            <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                <img class="symbol-label" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" />
                                            </div>
                                        </th>
                                        <td><?= $key['user']  ?></td>
                                        <td><?= $key['nama_usaha']  ?></td>
                                        <td><?= $key['institusi_asal']  ?></td>
                                        <td><?= $key['alamat_ktp']  ?></td>
                                        <td><?= $key['kabupaten']  ?></td>
                                        <td><?= $key['periode_usaha'] ?></td>
                                    </tr>
                                <?php endforeach ?>

                            </tbody>
                        </table>
                        <!--end: Datatable-->
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