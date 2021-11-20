<!--end::Content-->
<div class="container">
    <div class="card card-custom gutter-b">
        <div class="card card-custom">
            <div class="card-header flex-wrap py-5">
                <div class="card-title">
                    <h3 class="card-label"><?= $page; ?>
                        <!-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span> -->
                    </h3>
                </div>

            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Lembaga Mitra</th>
                            <th>Level</th>
                            <th>In/Eks</th>
                            <th>Bentuk</th>
                            <th>Nomor</th>
                            <th>Tanggal Penandatanganan</th>
                            <th>Periode Awal</th>
                            <th>Periode Akhir</th>
                            <th>Komponen</th>

                            <th>Nilai Kontrak</th>
                            <th>Periode</th>
                            <th>Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get as $key) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <?php if ($key['aktif'] == 1) { ?>
                                        <span class="badge text-white rounded-pill bg-success">On Going</span>
                                    <?php } elseif ($key['aktif'] == 2) { ?>
                                        <span class="badge text-white rounded-pill bg-primary">Selamanya</span>
                                    <?php } elseif ($key['aktif'] == 3) { ?>
                                        <span class="badge text-white rounded-pill bg-danger">Habis</span>
                                    <?php } ?>
                                </td>
                                <td><?= $key['lembaga_mitra'] ?></td>
                                <td><?= $key['level_kerjasama'] ?></td>
                                <td><?= $key['status_kerjasama'] ?></td>
                                <td><?= $key['bentuk_kerjasama'] ?></td>
                                <td><?= $key['nomor_kerjasama'] ?></td>
                                <td><?= $key['tanggal_penandatanganan_kerjasama'] ?></td>
                                <td><?= $key['periode_awal_kerjasama'] ?></td>
                                <td><?= $key['periode_akhir_kerjasama'] ?></td>
                                <td><?= $key['komponen_kerjasama'] ?></td>

                                <td><?= $key['nilai_kontrak'] ?></td>
                                <td><?= $key['periode'] ?></td>
                                <td><?= $key['nama'] ?></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>

                </table>
            </div>
            <!-- /.card -->

            <!-- /.card-body -->


        </div>
    </div>
</div>