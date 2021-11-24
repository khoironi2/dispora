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
                            <th>Judul</th>
                            <th>File</th>
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
                                <td><?= $key['judul_proposal'] ?></td>
                                <td><a target="_blank" href="<?= base_url('assets/proposal/' . $key['file_proposal']) ?>"><?= $key['file_proposal'] ?></a></td>
                                <td><?= $key['periode_proposal'] ?></td>
                                <td><?= $key['dibuat_oleh'] ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#edit<?= $key['id_proposal_sarpras'] ?>">
                                        <span style="font-size: 3em; color: red;">
                                            <i class="far fa-edit"></i>
                                        </span>
                                    </a>
                                    <a data-toggle="modal" data-target="#delete<?= $key['id_proposal_sarpras'] ?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Input Data Sarpras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <form action="<?= base_url('operator/proposal_sarpras/save') ?>" method="POST" class="form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="exampleSelectl">Judul</label>
                            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="judul" name="judul_proposal" id="judul_proposal" autocomplete="off" required />
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">File</label>
                                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="file" placeholder="jenis" name="file_proposal" id="file_proposal" autocomplete="off" required />

                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleSelectl">Periode</label>
                                    <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                                        <select name="periode" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="periode" required>

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

                        </div>






                        <!--end::Form group-->

                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="submit" class="btn  btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
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
    <div class="modal fade" id="edit<?= $key['id_proposal_sarpras'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
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
                        <form action="<?= base_url('operator/proposal_sarpras/update') ?>" method="POST" class="form" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleSelectl">Judul</label>
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" value="<?= $key['judul_proposal'] ?>" placeholder="judul" name="judul_proposal" id="judul_proposal" autocomplete="off" required />
                                <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" hidden type="text" value="<?= $key['id_proposal_sarpras'] ?>" placeholder="judul" name="id_proposal_sarpras" id="id_proposal_sarpras" autocomplete="off" required />
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">File</label>
                                        <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="file" value="<?= $key['file_proposal'] ?>" placeholder="jenis" name="file_proposal" id="file_proposal" autocomplete="off" required />

                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="exampleSelectl">Periode</label>
                                        <div class="input-group input-group-solid date" id="kt_datetimepicker_4" data-target-input="nearest">
                                            <select name="periode" class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" id="periode" required>

                                                <option value="<?= $key['periode_proposal'] ?>"><?= $key['periode_proposal'] ?></option>
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

                            </div>






                            <!--end::Form group-->

                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                <button type="submit" class="btn  btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
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
    <div class="modal fade" id="delete<?= $key['id_proposal_sarpras'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="<?= base_url('operator/proposal_sarpras/delete/' . $key['id_proposal_sarpras']) ?>" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body text-danger">
                        <h5> Yakin ingin menghapus <span class="text-dark text-bold"><?= $key['judul_proposal'] ?></span> </h5>
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