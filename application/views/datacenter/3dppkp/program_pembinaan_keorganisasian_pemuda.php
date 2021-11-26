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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Nama Program</th>
                                    <th>Capaian Akhir</th>
                                    <th>Periode</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($getpublik as $key) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?php if ($key['status_terlaksana'] == 1) { ?>
                                                <span class="badge badge-pill badge-primary">On Going</span>
                                            <?php } elseif ($key['status_terlaksana'] == 2) { ?>
                                                <span class="badge badge-pill badge-success">Terlaksana</span>
                                            <?php } ?>
                                        </td>

                                        <td><?= $key['nama_program']  ?></td>
                                        <td><?= $key['capaian_akhir']  ?></td>
                                        <td><?= $key['periode']  ?></td>


                                    </tr>
                                <?php endforeach ?>

                            </tbody>

                        </table>
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