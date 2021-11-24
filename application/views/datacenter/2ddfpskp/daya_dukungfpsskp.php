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
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Alamat</th>
                                    <th>Kepemilikan</th>
                                    <th>Keterangan/Kondisi</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Periode</th>
                                    <th>dibuat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($sarpras as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $key['nama_sarpras']  ?></td>
                                        <td><?= $key['jenis_sarpras']  ?></td>
                                        <td><?= $key['alamat_sarpras']  ?></td>
                                        <td><?= $key['kepemilikan_sarpras']  ?></td>
                                        <td><?= $key['kondisi_sarpras']  ?></td>
                                        <td><?= $key['kabupaten']  ?></td>
                                        <td><?= $key['periode_sarpras'] ?></td>
                                        <td><?= $key['dibuat_oleh'] ?></td>
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