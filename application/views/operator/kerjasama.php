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
                            <th></th>
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
                                <td>
                                    <a data-toggle="modal" data-target="#edit<?= $key['id_kerjasama_kk'] ?>">
                                        <span style="font-size: 3em; color: red;">
                                            <i class="far fa-edit"></i>
                                        </span>
                                    </a>
                                    <a data-toggle="modal" data-target="#delete<?= $key['id_kerjasama_kk'] ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Input Data Kerjasama</h5>
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
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label for="exampleSelectl">Lembaga Mitra</label>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Mitra" name="lembaga_mitra" id="lembaga_mitra" autocomplete="off" />
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Level</label>
                                    <select name="level_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="level_kerjasama">
                                        <option value="">Pilih</option>
                                        <option value="International">International</option>
                                        <option value="Nasional">Nasional</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">In/Eks</label>
                                    <select name="status_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="status_kerjasama">
                                        <option value="">Pilih</option>
                                        <option value="Internal">Internal</option>
                                        <option value="Eksternal">Eksternal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Bentuk</label>
                                    <select name="bentuk_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="bentuk_kerjasama">
                                        <option value="">Pilih</option>
                                        <option value="Mou">Mou</option>
                                        <option value="PKS">Perjanjian Kerja Sama</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Nomor Kerjasama</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder=" 12/xx" name="nomor_kerjasama" id="nomor_kerjasama" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Tanggal Penandatanganan</label>
                                    <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                                        <input name="tanggal_penandatanganan_kerjasama" id="tanggal_penandatanganan_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Periode Awal</label>
                                    <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                                        <input name="periode_awal_kerjasama" id="periode_awal_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Periode Akhir</label>
                                    <div class="input-group input-group-solid date" id="kt_datetimepicker_5" data-target-input="nearest">
                                        <input name="periode_akhir_kerjasama" id="periode_akhir_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Komponen Kerjasama</label>
                                    <textarea name="komponen_kerjasama" id="komponen_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Status Kerjasama</label>
                                    <select name="status_aktif" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="status_aktif">
                                        <option value="">Pilih</option>
                                        <option value="1">On Going</option>
                                        <option value="2">Selamanya</option>
                                        <option value="3">Habis</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Nilai Kontrak</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="" name="nilai_kontrak" id="nilai_kontrak" autocomplete="off" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Tahun</label>
                                    <select name="periode" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="periode">
                                        <option value="">Pilih</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2030">2030</option>
                                    </select>
                                </div>
                            </div>
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

<?php foreach ($get as $key) : ?>
    <!-- Modal edit-->
    <div class="modal fade" id="edit<?= $key['id_kerjasama_kk'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Kerjasama</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <!--begin::Form-->
                        <form action="<?= base_url('operator/kerjasama/update') ?>" method="POST">
                            <!--begin::Title-->
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label for="exampleSelectl">Lembaga Mitra</label>
                                <input value="<?= $key['lembaga_mitra'] ?>" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Mitra" name="lembaga_mitra" id="lembaga_mitra" autocomplete="off" />
                                <input hidden value="<?= $key['id_kerjasama_kk'] ?>" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Mitra" name="id_kerjasama_kk" id="id_kerjasama_kk" autocomplete="off" />
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Level</label>
                                        <select name="level_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="level_kerjasama">
                                            <option value="<?= $key['level_kerjasama'] ?>"><?= $key['level_kerjasama'] ?></option>
                                            <option value="">Pilih</option>
                                            <option value="International">International</option>
                                            <option value="Nasional">Nasional</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">In/Eks</label>
                                        <select name="status_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="status_kerjasama">
                                            <option value="<?= $key['status_kerjasama'] ?>"><?= $key['status_kerjasama'] ?></option>
                                            <option value="">Pilih</option>
                                            <option value="Internal">Internal</option>
                                            <option value="Eksternal">Eksternal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Bentuk</label>
                                        <select name="bentuk_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="bentuk_kerjasama">
                                            <option value="<?= $key['bentuk_kerjasama'] ?>"><?= $key['bentuk_kerjasama'] ?></option>
                                            <option value="">Pilih</option>
                                            <option value="Mou">Mou</option>
                                            <option value="PKS">Perjanjian Kerja Sama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Nomor Kerjasama</label>
                                        <input value="<?= $key['nomor_kerjasama'] ?>" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder=" 12/xx" name="nomor_kerjasama" id="nomor_kerjasama" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Tanggal Penandatanganan</label>
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_3" data-target-input="nearest">
                                            <input value="<?= $key['tanggal_penandatanganan_kerjasama'] ?>" name="tanggal_penandatanganan_kerjasama" id="tanggal_penandatanganan_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Periode Awal</label>
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                                            <input value="<?= $key['periode_awal_kerjasama'] ?>" name="periode_awal_kerjasama" id="periode_awal_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Periode Akhir</label>
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_5" data-target-input="nearest">
                                            <input value="<?= $key['periode_akhir_kerjasama'] ?>" name="periode_akhir_kerjasama" id="periode_akhir_kerjasama" type="date" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" placeholder="Select date &amp; time" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Komponen Kerjasama</label>
                                        <textarea name="komponen_kerjasama" id="komponen_kerjasama" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6"><?= $key['komponen_kerjasama'] ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Status Kerjasama</label>
                                        <select name="status_aktif" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="status_aktif">
                                            <?php if ($key['aktif'] == 1) { ?>
                                                <option value="<?= $key['aktif'] ?>">On Going</option>
                                            <?php } elseif ($key['aktif'] == 2) { ?>
                                                <option value="<?= $key['aktif'] ?>">Selamanya</option>
                                            <?php } elseif ($key['aktif'] == 3) { ?>
                                                <option value="<?= $key['aktif'] ?>">Habis</option>
                                            <?php } ?>

                                            <option value="">Pilih</option>
                                            <option value="1">On Going</option>
                                            <option value="2">Selamanya</option>
                                            <option value="3">Habis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Nilai Kontrak</label>
                                        <input value="<?= $key['nilai_kontrak'] ?>" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="" name="nilai_kontrak" id="nilai_kontrak" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Tahun</label>
                                        <select name="periode" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="periode" required>
                                            <option value="<?= $key['periode'] ?>"><?= $key['periode'] ?></option>
                                            <option value="">Pilih</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!--end::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="submit" class="btn btn-success font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Save</button>
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
    <div class="modal fade" id="delete<?= $key['id_kerjasama_kk'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?= base_url('operator/kerjasama/delete/' . $key['id_kerjasama_kk']) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body text-danger">
                        <h5> Yakin ingin menghapus kerjasama bersama Mitra <span class="text-dark text-bold"><?= $key['lembaga_mitra'] ?></span> </h5>
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

            var lembaga_mitra = $("#lembaga_mitra").val();
            var level_kerjasama = $("#level_kerjasama").val();
            var status_kerjasama = $("#status_kerjasama").val();
            var bentuk_kerjasama = $("#bentuk_kerjasama").val();
            var nomor_kerjasama = $("#nomor_kerjasama").val();
            var tanggal_penandatanganan_kerjasama = $("#tanggal_penandatanganan_kerjasama").val();
            var periode_awal_kerjasama = $("#periode_awal_kerjasama").val();
            var periode_akhir_kerjasama = $("#periode_akhir_kerjasama").val();
            var komponen_kerjasama = $("#komponen_kerjasama").val();
            var status_aktif = $("#status_aktif").val();
            var nilai_kontrak = $("#nilai_kontrak").val();
            var periode = $("#periode").val();

            if (lembaga_mitra.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'lembaga mitra Lengkap Wajib Diisi !'
                });

            } else if (level_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Level Kerjasama Wajib Diisi !'
                });

            } else if (status_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'status kerjasama Wajib Diisi !'
                });

            } else if (bentuk_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Bentuk Kerjasama  Wajib Diisi !'
                });

            } else if (nomor_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nomor Kerjasama  Wajib Diisi !'
                });

            } else if (tanggal_penandatanganan_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'tanggal penandatanganan kerjasama  Wajib Diisi !'
                });

            } else if (periode_awal_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'periode awal kerjasama  Wajib Diisi !'
                });

            } else if (periode_akhir_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'periode akhir kerjasama  Wajib Diisi !'
                });

            } else if (komponen_kerjasama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'komponen kerjasama  Wajib Diisi !'
                });

            } else if (status_aktif.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'status kerjasama  Wajib Diisi !'
                });

            } else if (nilai_kontrak.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'nilai kontrak  Wajib Diisi !'
                });

            } else if (periode.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Tahun  Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>operator/kerjasama/save",
                    type: "POST",
                    data: {
                        "lembaga_mitra": lembaga_mitra,
                        "level_kerjasama": level_kerjasama,
                        "status_kerjasama": status_kerjasama,
                        "bentuk_kerjasama": bentuk_kerjasama,
                        "nomor_kerjasama": nomor_kerjasama,
                        "tanggal_penandatanganan_kerjasama": tanggal_penandatanganan_kerjasama,
                        "periode_awal_kerjasama": periode_awal_kerjasama,
                        "periode_akhir_kerjasama": periode_akhir_kerjasama,
                        "komponen_kerjasama": komponen_kerjasama,
                        "status_aktif": status_aktif,
                        "nilai_kontrak": nilai_kontrak,
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
                                    window.location.href = "<?php echo base_url() ?>operator/kerjasama";
                                });

                            $("#lembaga_mitra").val('');
                            $("#level_kerjasama").val('');
                            $("#status_kerjasama").val('');
                            $("#bentuk_kerjasama").val('');

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