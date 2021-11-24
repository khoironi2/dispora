<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!-- begin::Card-->
        <div class="card card-custom overflow-hidden">
            <div class="card-body p-0">
                <!-- begin: Invoice-->
                <!-- begin: Invoice header-->
                <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url(<?= base_url('assets/theme/demo5/dist/assets/media/misc/bg-3.jpg') ?>);">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                            <div class="d-flex flex-shrink-0">
                                <h4 class="display-5 text-white font-weight-boldest mb-10">DARIMU BANTEN</h4>
                            </div>
                            <div class="d-flex flex-column align-items-md-end px-0">
                                <!--begin::Logo-->
                                <?php foreach ($pengaturan as $key) : ?>
                                    <a href="#" class="mb-5">
                                        <img src="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" class="logo-default max-h-30px" alt="" />
                                    </a>
                                <?php endforeach ?>
                                <!--end::Logo-->
                                <span style="text-align: right;" class="text-white d-flex flex-column  opacity-70">
                                    <span><?= $key['alamat_aplikasi'] ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="border-bottom w-100 opacity-20"></div>
                        <input type="text" hidden name="id_bursa_kegiatan" id="id_bursa_kegiatan" value="<?= $getpaskibdepan['id_bursa_kegiatan'] ?>">
                        <span class="text-white font-weight-bolde mb-2r">PENDAFATARAN PROGRAM : <?= $getpaskibdepan['nama_jenis_kegiatan'] ?></span>

                        <div class="d-flex justify-content-between text-white pt-6">
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolde mb-2r">PERIODE</span>
                                <span class="opacity-70"><?= $getpaskibdepan['periode'] ?></span>
                                <input type="text" value="<?= $getpaskibdepan['periode'] ?>" name="periode" id="peridoe" hidden>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">INFORMASI PROGRAM.</span>
                                <span class="opacity-70"><?= $getpaskibdepan['keterangan'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice header-->
                <!-- begin: Invoice body-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Nama</th>
                                        <th class="text-left font-weight-bold text-muted text-uppercase">Institusi</th>
                                        <th class="text-left font-weight-bold text-muted text-uppercase">Kabupaten</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-boldest font-size-lg">
                                        <td class="pl-0 pt-7"><input type="text" readonly name="paskib_nama" id="paskib_nama" value="<?= $user['nama'] ?>" class="form-control form-control-lg form-control-solid"></td>
                                        <td class="text-right pt-7"><input type="text" readonly name="paskib_institusi_asal" id="paskib_institusi_asal" value="<?= $user['institusi_asal'] ?>" class="form-control form-control-lg form-control-solid"></td>
                                        <td class="text-right pt-7"><input type="text" readonly name="paskib_kabupaten" id="paskib_kabupaten" value="<?= $userWilayah['kabupaten'] ?>" class="form-control form-control-lg form-control-solid"></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice body-->
                <!-- begin: Invoice footer-->
                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                            <div class="d-flex flex-column mb-10 mb-md-0">
                                <div class="font-weight-bolder font-size-lg mb-3">ALAMAT KTP</div>
                                <div class="d-flex justify-content-between mb-3">
                                    <?= $userWilayah['alamat_ktp'] ?>
                                    <input hidden type="text" value="<?= $userWilayah['alamat_ktp'] ?>" name="paskib_alamat_ktp" class="form-control form-control-solid" id="paskib_alamat_ktp">
                                </div>
                                <div class="font-weight-bolder font-size-lg mb-3">ALAMAT DOMISILI</div>
                                <div class="d-flex justify-content-between">
                                    <input hidden type="text" value="<?= $userWilayah['alamat_domisili'] ?>" name="paskib_alamat_domisili" class="form-control form-control-lg form-control-solid" id="paskib_alamat_domisili">
                                    <?= $userWilayah['alamat_domisili'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Nama Usaha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-boldest font-size-lg">
                                        <td class="pl-0 pt-7">
                                            <textarea name="nama_usaha" id="nama_usaha" cols="30" rows="3" class="form-control form-control-lg "></textarea>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice footer-->
                <!-- begin: Invoice action-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between">
                            <?php if ($getpaskibdepan['status_selesai'] == 1) { ?>
                                <?php if (!$this->session->userdata('email')) : ?>
                                    <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                <?php else : ?>

                                    <?php if ($getMy['id_user_pemuda'] == $user['id_user']) { ?>
                                        <a class="btn btn-light-warning font-weight-bolder mr-2">SUDAH TERDAFTAR</a>
                                    <?php } else { ?>
                                        <a class="btn btn-paskib btn-success font-weight-bolder mr-2">APPLY</a>
                                    <?php } ?>

                                <?php endif; ?>
                            <?php } elseif ($getpaskibdepan['status_selesai'] == 2) { ?>
                                <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                            <?php } elseif ($getpaskibdepan['status_selesai'] == 3) { ?>
                                <a href="#" class="btn btn-light-success font-weight-bolder mr-2">SELESAI</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
                <!-- end: Invoice-->
            </div>
        </div>
        <!-- end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--begin::Entry-->

<!--end::Entry-->
</div>
<!--end::Content-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {

        $(".btn-paskib").click(function() {

            var paskib_nama = $("#paskib_nama").val();
            var paskib_institusi_asal = $("#paskib_institusi_asal").val();
            var paskib_alamat_ktp = $("#paskib_alamat_ktp").val();
            var paskib_alamat_domisili = $("#paskib_alamat_domisili").val();
            var paskib_kabupaten = $("#paskib_kabupaten").val();
            var periode = $("#periode").val();
            var id_bursa_kegiatan = $("#id_bursa_kegiatan").val();
            var nama_usaha = $("#nama_usaha").val();

            if (paskib_nama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (paskib_institusi_asal.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Institusi masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (paskib_alamat_ktp.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat KTP masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (paskib_alamat_domisili.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat Domisili masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (paskib_kabupaten.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Kabupaten / Kota masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (nama_usaha.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama usaha masih kosong !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>datacenter/4bursa/Psarpraskwu/daftarkwup",
                    type: "POST",
                    data: {
                        "periode": periode,
                        "nama_usaha": nama_usaha,
                        "id_bursa_kegiatan": id_bursa_kegiatan
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Register Berhasil!',
                                    text: 'Thanks !',
                                    timer: 3000,
                                    icon: "success",
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url('datacenter/4bursa/Psarpraskwu/kwup/' . $getpaskibdepan['id_bursa_kegiatan']) ?>";
                                });

                            $("#id_bursa_kegiatan").val('');
                            $("#periode").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Pendaftaran Gagal!',
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