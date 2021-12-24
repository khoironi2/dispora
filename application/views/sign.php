<!--begin::Content-->
<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
    <!--begin::Content body-->
    <div class="d-flex flex-column-fluid flex-center">
        <!--begin::Signin-->
        <div class="login-form login-signin">
            <!--begin::Form-->
            <div class="form" novalidate="novalidate" id="kt_login_signin_form">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Halo sobat Dispora</h3>
                    <span class="text-muted font-weight-bold font-size-h4">Pengguna Baru?
                        <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">Buat Account</a></span>
                </div>
                <!--begin::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                    <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="text" name="email" id="email" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <div class="d-flex justify-content-between mt-n5">
                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                        <!-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Lupa Password ?</a> -->
                    </div>
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg" type="password" name="password" id="password" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Action-->
                <div class="pb-lg-0 pb-5">
                    <button type="submit" class="btn btn-login btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Login</button>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Signin-->
        <!--begin::Signup-->
        <div class="login-form login-signup">
            <!--begin::Form-->
            <div class="form" novalidate="novalidate" id="kt_login_signup_form">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Mendaftar</h3>
                    <p class="text-muted font-weight-bold font-size-h4">Isikan data anda untuk membuat akun</p>
                </div>
                <!--end::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="text" placeholder="Nama lengkap" name="nama" id="nama" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->

                <div class="form-group">
                    <label class="control-label"><sup style="color:crimson"></sup> <span class="text-success" id="email_result"></span></label>
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" id="registrer_email" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Password" name="password" id="register_password" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex align-items-center">
                    <label class="checkbox mb-0">
                        <input type="checkbox" name="agree" />
                        <span></span>
                    </label>
                    <div class="pl-2">Saya setuju
                        <a href="#" class="ml-1">dengan syarat dan ketentuannya</a>
                    </div>
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                    <button type="submit" class="btn kode btn-register btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                    <button type="button" id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                </div>
                <!--end::Form group-->
            </div>
            <!--end::Form-->
        </div>
        <!--end::Signup-->
        <!--begin::Forgot-->
        <div class="login-form login-forgot">
            <!--begin::Form-->
            <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                <!--begin::Title-->
                <div class="pb-13 pt-lg-0 pt-5">
                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
                    <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                </div>
                <!--end::Title-->
                <!--begin::Form group-->
                <div class="form-group">
                    <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="form-group d-flex flex-wrap pb-lg-0">
                    <button type="button" id="kt_login_forgot_submit" class="btn  btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                </div>
                <!--end::Form group-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Forgot-->
    </div>
    <!--end::Content body-->
    <!--begin::Content footer-->

    <!--end::Content footer-->
</div>
<!--end::Content-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
<script>
    $(document).ready(function() {

        $('#registrer_email').blur(function() {
            $.ajax({
                type: "POST",
                url: "<?= base_url('sign/cekEmail'); ?>",
                data: $(this).serialize(),
                success: function(data) {
                    if (data == "ok") {
                        $('#email_result').html('<font color="red">Email sudah digunakan</font>');
                        $(".kode").hide();
                    } else {
                        $('#email_result').html('Email tersedia');
                        $(".kode").show();
                    }
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {

        $(".btn-register").click(function() {

            var nama = $("#nama").val();
            var registrer_email = $("#registrer_email").val();
            var register_password = $("#register_password").val();

            if (nama.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Nama Lengkap Wajib Diisi !'
                });

            } else if (registrer_email.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'email Wajib Diisi !'
                });

            } else if (register_password.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url() ?>Sign/register",
                    type: "POST",
                    data: {
                        "nama": nama,
                        "email": registrer_email,
                        "password": register_password
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Register Berhasil!',
                                    text: 'silahkan login!',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>sign";
                                });

                            $("#nama").val('');
                            $("#email").val('');
                            $("#password").val('');

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

<script>
    $(document).ready(function() {

        $(".btn-login").click(function() {

            var email = $("#email").val();
            var password = $("#password").val();

            if (email.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'email Wajib Diisi !'
                });

            } else if (password.length == "") {
                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Password Wajib Diisi !'
                });

            } else {

                $.ajax({

                    url: "<?php echo base_url() ?>sign/login",
                    type: "POST",
                    data: {
                        "email": email,
                        "password": password
                    },

                    success: function(response) {

                        if (response == "invalid") {

                            Swal.fire({
                                    // type: 'danger',
                                    title: 'Akun sedang proses verivikasi!',
                                    text: 'Silahkan coba beberapa saat lagi',
                                    timer: 9000,
                                    icon: 'warning',
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    onOpen: function() {
                                        Swal.showLoading()
                                    }
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>/sign";
                                });

                            $("#email").val('');
                            $("#password").val('');

                        } else if (response == "pemuda") {

                            Swal.fire({
                                    type: 'success',
                                    title: 'Login Berhasil!',
                                    text: 'Anda akan di arahkan dalam 3 Detik',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    onOpen: function() {
                                        Swal.showLoading()
                                    }
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>pemuda/dashboard";
                                });

                        } else if (response == "admin") {

                            Swal.fire({
                                    type: 'success',
                                    title: 'Login Berhasil!',
                                    text: 'Anda akan di arahkan dalam 3 Detik',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    onOpen: function() {
                                        Swal.showLoading()
                                    }
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>admin/pengaturan";
                                });

                        } else if (response == "pimpinan") {

                            Swal.fire({
                                    type: 'success',
                                    title: 'Login Berhasil!',
                                    text: 'Anda akan di arahkan dalam 3 Detik',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    onOpen: function() {
                                        Swal.showLoading()
                                    }
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>pimpinan/dashboard";
                                });

                        } else if (response == "operator") {

                            Swal.fire({
                                    type: 'success',
                                    title: 'Login Berhasil!',
                                    text: 'Anda akan di arahkan dalam 3 Detik',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    onOpen: function() {
                                        Swal.showLoading()
                                    }
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url() ?>operator/dashboard";
                                });

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: 'Login Gagal!',
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

                        console.log(response);

                    }

                });

            }

        });

    });
</script>