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
                        </span>Buat Baru</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kegiatan</th>
                            <th>Keterangan</th>
                            <th>Capaian</th>
                            <th>Periode</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($bursakegiatan as $key) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $key['nama_jenis_kegiatan'] ?></td>
                                <td><?= $key['keterangan'] ?></td>
                                <td><?= $key['persentase_capaian'] ?> %</td>
                                <td><?= $key['periode'] ?></td>
                                <td>
                                    <?php if ($key['status_selesai'] == 1) { ?>
                                        <span class="badge rounded-pill bg-light-primary">On Going</span>
                                    <?php } elseif ($key['status_selesai'] == 2) { ?>
                                        <span class="badge rounded-pill bg-light-info">Berjalan</span>
                                    <?php } elseif ($key['status_selesai'] == 3) { ?>
                                        <span class="badge rounded-pill bg-light-success">Selesai</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#edit<?= $key['id_bursa_kegiatan'] ?>">
                                        <span style="font-size: 3em; color: red;">
                                            <i class="far fa-edit"></i>
                                        </span>
                                    </a>
                                    <a data-toggle="modal" data-target="#delete<?= $key['id_bursa_kegiatan'] ?>">
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buat Bursa Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <div class="form" novalidate="novalidate" id="kt_login_signup_form">
                        <!--begin::Title-->
                        <!--end::Title-->
                        <div class="form-group">
                            <label for="exampleSelectl">Jenis Program Kegiatan</label>
                            <select name="id_jenis" class="form-control form-control-lg form-control-solid" id="id_jenis">
                                <option value="">Pilih</option>
                                <?php foreach ($jeniskegiatan as $key) : ?>
                                    <option value="<?= $key['id_jenis_kegiatan'] ?>"><?= $key['nama_jenis_kegiatan'] ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="exampleSelectl">Informasi Kegiatan</label>
                            <textarea name="keterangan" class="form-control form-control-lg form-control-solid" id="keterangan"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectl">Periode</label>
                            <select name="periode" class="form-control form-control-lg form-control-solid" id="periode">
                                <option value="">Pilih</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </div>
                        <!--end::Form group-->

                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn btn-save btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                            <!-- <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button> -->
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php foreach ($bursakegiatan as $key) : ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit<?= $key['id_bursa_kegiatan'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Bursa Kegiatan <?= $key['nama_jenis_kegiatan'] ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form login-signup">
                        <!--begin::Form-->
                        <div class="form" novalidate="novalidate" id="kt_login_signup_form">
                            <form action="<?= base_url('operator/publikasi/bursa_kegiatan/editData') ?>" method="POST">
                                <!--begin::Title-->
                                <!--end::Title-->
                                <input type="text" hidden name="id_bursa_kegiatan" id="id_bursa_kegiatan" value="<?= $key['id_bursa_kegiatan'] ?>">
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label for="exampleSelectl">Jenis Program Kegiatan</label>
                                    <select name="id_jenis" class="form-control form-control-lg form-control-solid" id="id_jenis">
                                        <option value="<?= $key['id_jenis'] ?>"><?= $key['nama_jenis_kegiatan'] ?></option>
                                        <option value="">Pilih</option>
                                        <?php foreach ($jeniskegiatan as $jenis) : ?>
                                            <option value="<?= $jenis['id_jenis_kegiatan'] ?>"><?= $jenis['nama_jenis_kegiatan'] ?></option>
                                        <?php endforeach ?>

                                    </select>
                                </div>
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label for="exampleSelectl">Informasi Kegiatan</label>
                                    <textarea name="keterangan" class="form-control form-control-lg form-control-solid" id="keterangan"><?= $key['keterangan'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectl">Periode</label>
                                    <select name="periode" class="form-control form-control-lg form-control-solid" id="periode">
                                        <option value="<?= $key['periode'] ?>"><?= $key['periode'] ?></option>
                                        <option value="">Pilih</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectl">Capaian</label>
                                    <select name="persentase_capaian" class="form-control form-control-lg form-control-solid" id="persentase_capaian">
                                        <option value="<?= $key['persentase_capaian'] ?>"><?= $key['persentase_capaian'] ?> %</option>
                                        <option value="">Pilih</option>
                                        <option value="10">10 %</option>
                                        <option value="20">20 %</option>
                                        <option value="30">30 %</option>
                                        <option value="40">40 %</option>
                                        <option value="50">50 %</option>
                                        <option value="60">60 %</option>
                                        <option value="70">70 %</option>
                                        <option value="80">80 %</option>
                                        <option value="90">90 %</option>
                                        <option value="100">100 %</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectl">Status</label>
                                    <select name="status_selesai" class="form-control form-control-lg form-control-solid" id="status_selesai">

                                        <?php if ($key['status_selesai'] == 1) { ?>
                                            <option value="1">On Going</option>
                                        <?php } elseif ($key['status_selesai'] == 2) { ?>
                                            <option value="2">Berjalan</option>
                                        <?php } elseif ($key['status_selesai'] == 3) { ?>
                                            <option value="3">Selesai</option>
                                        <?php } ?>
                                        <option value="">Pilih</option>
                                        <option value="1">On Going</option>
                                        <option value="2">Berjalan</option>
                                        <option value="3">Selesai</option>
                                    </select>
                                </div>
                                <!--end::Form group-->

                                <!--end::Form group-->
                                <!--begin::Form group-->

                        </div>
                        <!--end::Form group-->

                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn btn-edit btn-success font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Apply</button>
                            <!-- <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button> -->
                        </div>
                        <!--end::Form group-->
                        </form>
                    </div>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
    </div>
<?php endforeach ?>

<?php foreach ($bursakegiatan as $key) : ?>
    <!-- Modal delete-->
    <div class="modal fade" id="delete<?= $key['id_bursa_kegiatan'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?= base_url('operator/publikasi/bursa_kegiatan/delete/' . $key['id_bursa_kegiatan']) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body text-danger">
                        <h5> Yakin ingin menghapus <span class="text-dark"> <?= $key['keterangan'] ?></span></h5>
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

            var id_jenis = $("#id_jenis").val();
            var keterangan = $("#keterangan").val();
            var periode = $("#periode").val();

            if (id_jenis.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'jenis kegiatan Wajib Diisi !'
                });

            } else if (keterangan.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'keterangan Wajib Diisi !'
                });

            } else if (periode.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'periode Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>operator/publikasi/bursa_kegiatan/save",
                    type: "POST",
                    data: {
                        "id_jenis": id_jenis,
                        "keterangan": keterangan,
                        "periode": periode
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Berhasil!',
                                    text: 'Thanks !',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>operator/publikasi/bursa_kegiatan";
                                });

                            $("#id_jenis").val('');
                            $("#keterangan").val('');
                            $("#periode").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Register Gagal!',
                                text: 'silahkan coba lagi!'
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