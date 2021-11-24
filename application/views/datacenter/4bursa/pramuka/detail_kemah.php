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
                        <input type="text" hidden name="id_bursa_kegiatan" id="id_bursa_kegiatan" value="<?= $getBursaID['id_bursa_kegiatan'] ?>">
                        <span class="text-white font-weight-bolde mb-2r">PENDAFATARAN PROGRAM : <?= $getBursaID['nama_jenis_kegiatan'] ?></span>

                        <div class="d-flex justify-content-between text-white pt-6">
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolde mb-2r">PERIODE</span>
                                <input hidden type="text" name="kwarda" id="kwarda" value="<?= $userWilayah['id_kabupaten_kota'] ?>">
                                <input hidden type="text" name="periode" id="periode" value="<?= $getBursaID['periode'] ?>">
                                <span class="opacity-70"><?= $getBursaID['periode'] ?></span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <span class="font-weight-bolder mb-2">INFORMASI PROGRAM.</span>
                                <span class="opacity-70"><?= $getBursaID['keterangan'] ?></span>
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
                                        <th class="pl-0 font-weight-bold text-muted text-uppercase">Ketua</th>
                                        <th class="text-left font-weight-bold text-muted text-uppercase">Institusi</th>
                                        <th class="text-left font-weight-bold text-muted text-uppercase">Kabupaten</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="font-weight-boldest font-size-lg">
                                        <td class="pl-0 pt-7"><input type="text" readonly name="nama" id="nama" value="<?= $user['nama'] ?>" class="form-control form-control-lg form-control-solid"></td>
                                        <td class="text-right pt-7"><input type="text" readonly name="institusi_asal" id="institusi_asal" value="<?= $user['institusi_asal'] ?>" class="form-control form-control-lg form-control-solid"></td>
                                        <td class="text-right pt-7">
                                            <input type="text" readonly name="kabupaten" id="kabupaten" value="<?= $userWilayah['kabupaten'] ?>" class="form-control form-control-lg form-control-solid">

                                        </td>
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
                                    <input hidden type="text" value="<?= $userWilayah['alamat_ktp'] ?>" name="alamat_ktp" class="form-control form-control-solid" id="alamat_ktp">
                                </div>
                                <div class="font-weight-bolder font-size-lg mb-3">ALAMAT DOMISILI</div>
                                <div class="d-flex justify-content-between">
                                    <input hidden type="text" value="<?= $userWilayah['alamat_domisili'] ?>" name="alamat_domisili" class="form-control form-control-lg form-control-solid" id="alamat_domisili">
                                    <?= $userWilayah['alamat_domisili'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <table>
                            <?php if ($getMy['id_user_pemuda'] == $user['id_user']) { ?>
                                <tr>
                                    <th><a data-toggle="modal" data-target="#tambah" class="btn btn-success font-weight-bolder mr-2">Tambah Anggota</a></th>
                                    <!-- id pendaftaran <?= $getMy['id_pendaftar_lomba_tata_upacara_bendera'] ?> -->
                                </tr>
                                <tr>
                                    <th>Anggota</th>
                                </tr>
                                <?php $no = 1;
                                foreach ($kelompok as $kuy) : ?>
                                    <tr>
                                        <th>
                                            # <?= $no++; ?> <?= $kuy['nama_anggota'] ?>
                                        </th>
                                    </tr>
                                <?php endforeach ?>
                            <?php } else { ?>



                            <?php } ?>


                        </table>
                    </div>
                </div>
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between">
                            <?php if ($getBursaID['status_selesai'] == 1) { ?>
                                <?php if (!$this->session->userdata('email')) : ?>
                                    <a href="#" onclick="return confirm('Maaf anda belum login');" class="btn btn-primary font-weight-bolder mr-2"><span>DAFTAR</span></a>
                                <?php else : ?>
                                    <?php if ($getMy['id_user_pemuda'] == $user['id_user']) { ?>
                                        <a class="btn btn-light-warning font-weight-bolder mr-2">SUDAH TERDAFTAR</a>
                                    <?php } else { ?>
                                        <a class="btn btn-pelopor btn-success font-weight-bolder mr-2">APPLY</a>
                                    <?php } ?>

                                <?php endif; ?>
                            <?php } elseif ($getBursaID['status_selesai'] == 2) { ?>
                                <a class="tutup" href="#" class="btn btn-light-info font-weight-bolder mr-2">BERJALAN</a>
                            <?php } elseif ($getBursaID['status_selesai'] == 3) { ?>
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

<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleSelectl">Nama Anggota</label>
                        <input type="text" name="nama_anggota" id="nama_anggota" class="form-control form-control-lg form-control-solid" required>
                        <input type="text" hidden name="id_pendaftar" id="id_pendaftar" value="<?= $getMy['id_pendaftar_kemah_bakti_pramuka'] ?>" class="form-control form-control-lg form-control-solid" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn save-anggota btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<script>
    $(document).ready(function() {

        $(".btn-pelopor").click(function() {

            var nama = $("#nama").val();
            var institusi_asal = $("#institusi_asal").val();
            var alamat_ktp = $("#alamat_ktp").val();
            var alamat_domisili = $("#alamat_domisili").val();
            var kabupaten = $("#kabupaten").val();
            var periode = $("#periode").val();
            var id_bursa_kegiatan = $("#id_bursa_kegiatan").val();
            var kwarda = $("#kwarda").val();

            if (nama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (institusi_asal.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Institusi masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (alamat_ktp.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat KTP masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (alamat_domisili.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Alamat Domisili masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (kabupaten.length == "") {
                kabupaten
                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Kabupaten / Kota masih kosong silahkan perbarui pada menu Account !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>datacenter/4bursa/kepramukaan/daftarkemah",
                    type: "POST",
                    data: {
                        "periode": periode,
                        "nama": nama,
                        "institusi_asal": institusi_asal,
                        "alamat_ktp": alamat_ktp,
                        "alamat_domisili": alamat_domisili,
                        "kabupaten": kabupaten,
                        "id_bursa_kegiatan": id_bursa_kegiatan,
                        "kwarda": kwarda
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
                                    window.location.href = "<?php echo base_url('datacenter/4bursa/kepramukaan/kemah/' . $getBursaID['id_bursa_kegiatan']) ?>";
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


        $(".save-anggota").click(function() {

            var nama_anggota = $("#nama_anggota").val();
            var id_pendaftar = $("#id_pendaftar").val();

            if (nama_anggota.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'nama anggota masih kosong silahkan perbarui pada menu Account !'
                });

            } else if (id_pendaftar.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Id kosong !'
                });

            } else {
                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>datacenter/4bursa/kepramukaan/tambahkelompokkemah",
                    type: "POST",
                    data: {
                        "nama_anggota": nama_anggota,
                        "id_pendaftar": id_pendaftar
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
                                    window.location.href = "<?php echo base_url('datacenter/4bursa/kepramukaan/kemah/' . $getBursaID['id_bursa_kegiatan']) ?>";
                                });

                            $("#id_pendaftar").val('');
                            $("#nama_anggota").val('');

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