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
                    <a href="#" data-toggle="modal" data-target="#buat" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:/keen/theme/demo5/dist/assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>Request Data</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th></th>
                            <th>File</th>
                            <th></th>
                            <th></th>
                            <th>Pengirim</th>
                            <th>Periode</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($get as $key) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <?php if ($key['file_permintaan_data'] == NULL) { ?>
                                        <span class="text-danger">belum dikirim</span>
                                    <?php } else { ?>
                                        <a href="<?= base_url('assets/data/permintaan/' . $key['file_permintaan_data']) ?>"><?= $key['file_permintaan_data'] ?></a>
                                    <?php }  ?>
                                </td>
                                <td><?= $key['nama_file'] ?></td>
                                <td><b><?= $key['pimpinan'] ?> </b> <?= $key['keterangan_peminta'] ?></td>
                                <td><b><?= $key['pengirim'] ?> </b><?= $key['keterangan_pengirim'] ?></td>

                                <td><?= $key['pengirim'] ?></td>
                                <td><?= $key['periode_permintaan'] ?></td>
                                <td>
                                    <?php if ($key['status_permintaan'] == 1) { ?>
                                        <span class="badge badge-pill badge-primary">belum dikirim</span>
                                    <?php } elseif ($key['status_permintaan'] == 2) { ?>
                                        <span class="badge badge-pill badge-success">Terkirim</span>
                                    <?php } elseif ($key['status_permintaan'] == 3) { ?>
                                        <span class="badge badge-pill badge-warning">Revisi</span>
                                    <?php }  ?>
                                </td>

                                <td>
                                    <a data-toggle="modal" data-target="#edit<?= $key['id_permintaan_data'] ?>">
                                        <span style="font-size: 3em; color: red;">
                                            <i class="far fa-edit"></i>
                                        </span>
                                    </a>
                                    <a data-toggle="modal" data-target="#delete<?= $key['id_permintaan_data'] ?>">
                                        <span style="font-size: 3em; color: red;">
                                            <i class="far fa-trash-alt"></i>
                                        </span>
                                    </a>
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

<!-- Button trigger modal-->
<!-- Modal buat-->
<div class="modal fade" id="buat" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <form action="<?= base_url('pimpinan/permintaan_data/save') ?>" method="POST" class="form" enctype="multipart/form-data">
                        <div class="row">
                            <label for="exampleSelectl">Keterangan</label>
                            <textarea class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" name="keterangan_peminta" id="keterangan_peminta"></textarea>
                        </div>


                        <!--end::Form group-->

                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn btn-save btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Kirim</button>
                            <!-- <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button> -->
                        </div>
                        <!--end::Form group-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($get as $key) : ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit<?= $key['id_permintaan_data'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Revisi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form login-signup">
                        <!--begin::Form-->
                        <form action="<?= base_url('pimpinan/permintaan_data/update') ?>" method="POST" class="form" enctype="multipart/form-data">

                            <div class="row">
                                <label for="exampleSelectl">Keterangan</label>
                                <textarea class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" name=" keterangan_peminta" id="keterangan_peminta"><?= $key['keterangan_peminta'] ?></textarea>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" hidden type="text" placeholder="nama program" value="<?= $key['id_permintaan_data'] ?>" name="id_permintaan_data" id="id_permintaan_data" autocomplete="off" />
                            </div>

                            <!--end::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="submit" class="btn btn-save btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Kirim</button>
                                <!-- <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button> -->
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>

<?php foreach ($get as $key) : ?>
    <!-- Modal delete-->
    <div class="modal fade" id="delete<?= $key['id_permintaan_data'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?= base_url('pimpinan/permintaan_data/delete/' . $key['id_permintaan_data']) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body text-danger">
                        <h5> Yakin ingin menghapus <span class="text-dark text-bold"><?= $key['keterangan_peminta'] ?></span> </h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary font-weight-bold" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-light-danger font-weight-bold">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php endforeach ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {

        $(".btn-save").click(function() {

            var nama_sarpras = $("#nama_sarpras").val();
            var jenis_sarpras = $("#jenis_sarpras").val();
            var alamat_sarpras = $("#alamat_sarpras").val();
            var kepemilikan_sarpras = $("#kepemilikan_sarpras").val();
            var kondisi_sarpras = $("#kondisi_sarpras").val();
            var kabupaten_kota = $("#kabupaten_kota").val();
            var periode = $("#periode").val();

            if (nama_sarpras.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Sarpras Wajib Diisi !'
                });

            } else if (jenis_sarpras.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Jenis Sarpras Wajib Diisi !'
                });

            } else if (alamat_sarpras.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat Wajib Diisi !'
                });

            } else if (kepemilikan_sarpras.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Kepemilikan  Wajib Diisi !'
                });

            } else if (kondisi_sarpras.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Kondisi  Wajib Diisi !'
                });

            } else if (kabupaten_kota.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Kabupaten / kota  Wajib Diisi !'
                });

            } else if (periode.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'periode  Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>pimpinan/daya_dukung_sarpras/save",
                    type: "POST",
                    data: {
                        "nama_sarpras": nama_sarpras,
                        "jenis_sarpras": jenis_sarpras,
                        "alamat_sarpras": alamat_sarpras,
                        "kepemilikan_sarpras": kepemilikan_sarpras,
                        "kondisi_sarpras": kondisi_sarpras,
                        "kabupaten_kota": kabupaten_kota,
                        "periode": periode
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Berhasil!',
                                    text: 'Thanks !',
                                    timer: 3000,
                                    icon: "success",
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>pimpinan/daya_dukung_sarpras";
                                });

                            $("#nama_sarpras").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Gagal!',
                                text: 'silahkan coba lagi!',
                                icon: "danger"
                            });

                        }

                        console.log(response);

                    },

                    error: function(response) {
                        Swal.fire({
                            type: 'error',
                            title: 'Opps!',
                            text: 'server error!'
                        });
                    }

                })

            }

        });




    });
</script>