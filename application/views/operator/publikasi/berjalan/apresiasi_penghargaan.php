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
                            <th>Nama</th>
                            <th>Bentuk Apresiasi</th>
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
                                <td><?php if (empty($key['bentuk_apresiasi'])) { ?>
                                        <span class="text-danger"> kosong</span>
                                    <?php } else { ?>
                                        <?= $key['bentuk_apresiasi'] ?>
                                    <?php } ?>
                                </td>
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
                                        <a href="" data-toggle="modal" data-target="#setuju<?= $key['id_pendaftar_apresiasi_dan_penghargaan']  ?>"><span class="badge rounded-pill bg-light-success">SETUJUI</span></a>
                                    <?php } elseif ($key['status_lulus'] == 2) { ?>
                                        <a href="<?= base_url('operator/publikasi/berjalan/apresiasi_penghargaan/batalkan/' . $key['id_pendaftar_apresiasi_dan_penghargaan']) ?>"><span class="badge rounded-pill bg-light-danger">BATALKAN</span></a>
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


<?php foreach ($getall as $key) : ?>
    <div class="modal fade" id="setuju<?= $key['id_pendaftar_apresiasi_dan_penghargaan']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SETUJUI <?= $key['user'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('operator/publikasi/berjalan/apresiasi_penghargaan/setuju') ?>" method="POST">
                        <div class="form-group">
                            <span><?= $key['keterangan'] ?></span>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectl">Bentuk Apresiasi</label>
                            <input type="text" class="form-control form-control-lg form-control-solid" value="<?= $key['bentuk_apresiasi'] ?>" name="bentuk_apresiasi" id="bentuk_apresiasi">
                            <input hidden type="text" class="form-control form-control-lg form-control-solid" value="<?= $key['id_pendaftar_apresiasi_dan_penghargaan'] ?>" name="id_pendaftar_apresiasi_dan_penghargaan" id="id_pendaftar_apresiasi_dan_penghargaan">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>