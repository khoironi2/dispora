<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
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


                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Periode</th>
                                <th>Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get as $key) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $key['judul_proposal'] ?></td>
                                    <td><a target="_blank" href="<?= base_url('assets/proposal/' . $key['file_proposal']) ?>"><?= $key['file_proposal'] ?></a></td>
                                    <td><?= $key['periode_proposal'] ?></td>
                                    <td><?= $key['dibuat_oleh'] ?></td>

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
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->