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
                <div class="card-toolbar">
                    <!--begin::Dropdown-->

                    <!--end::Dropdown-->
                    <!--begin::Button-->

                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>Ketua</th>

                            <th>Asal Sekolah</th>
                            <th>Alamat</th>
                            <th>Kabupaten/Kota</th>
                            <th>Periode</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getall as $key) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <th>
                                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                        <img class="symbol-label" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" />
                                    </div>
                                </th>
                                <td><?= $key['user']  ?></td>

                                <td><?= $key['institusi_asal']  ?></td>
                                <td><?= $key['alamat_ktp']  ?></td>
                                <td><?= $key['kabupaten']  ?></td>
                                <td><?= $key['periode_papn'] ?></td>

                                <td>
                                    <?php if ($key['status_lulus'] == 1) { ?>
                                        <span class="badge rounded-pill bg-light-primary">Perlu Validasi</span>
                                    <?php } elseif ($key['status_lulus'] == 2) { ?>
                                        <span class="badge rounded-pill bg-light-info">Valid</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($key['status_lulus'] == 1) { ?>
                                        <a href="<?= base_url('operator/publikasi/berjalan/ldk/setuju/' . $key['id_pendaftar_ldk']) ?>"><span class="badge rounded-pill bg-light-success">SETUJUI</span></a>
                                    <?php } elseif ($key['status_lulus'] == 2) { ?>
                                        <a href="<?= base_url('operator/publikasi/berjalan/ldk/batalkan/' . $key['id_pendaftar_ldk']) ?>"><span class="badge rounded-pill bg-light-danger">BATALKAN</span></a>
                                    <?php } ?>
                                </td>
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