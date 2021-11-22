<main class="main is-visible" data-dropzone-area="">
    <div class="container h-100">

        <div class="d-flex flex-column h-100 position-relative">
            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-7">
                <div class="row align-items-center">

                    <!-- Mobile: close -->
                    <div class="col-2 d-xl-none">
                        <a class="icon icon-lg text-muted" href="#" data-toggle-chat="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </a>
                    </div>
                    <!-- Mobile: close -->

                    <!-- Content -->
                    <div class="col-8 col-xl-12">
                        <div class="row align-items-center text-center text-xl-start">
                            <!-- Title -->
                            <div class="col-12 col-xl-6">
                                <div class="row align-items-center gx-5">
                                    <div class="col-auto">
                                        <div class="avatar avatar-online d-none d-xl-inline-block">
                                            <img class="avatar-img" src="<?= base_url('assets/chat/') ?>/img/avatars/2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col overflow-hidden">
                                        <h5 class="text-truncate"><?= $getID['nama'] ?></h5>
                                        <p class="text-truncate">is typing<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Title -->

                            <!-- Toolbar -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <div class="row align-items-center justify-content-end gx-6">
                                    <div class="col-auto">
                                        <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more" aria-controls="offcanvas-more">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="col-auto">
                                        <div class="avatar-group">
                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                <img class="avatar-img" src="<?= base_url('assets/chat/') ?>/img/avatars/2.jpg" alt="#">
                                            </a>

                                            <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-profile">
                                                <img class="avatar-img" src="<?= base_url('assets/chat/') ?>/img/avatars/1.jpg" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Toolbar -->
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Mobile: more -->
                    <div class="col-2 d-xl-none text-end">
                        <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more" aria-controls="offcanvas-more">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                        </a>
                    </div>
                    <!-- Mobile: more -->

                </div>
            </div>
            <!-- Chat: Header -->

            <!-- Chat: Content -->
            <div class="chat-body hide-scrollbar flex-1 h-100">
                <div class="chat-body-inner">
                    <div class="py-6 mb-7 py-lg-12">





                        <!-- Message -->





                        <!-- Message -->
                        <div class="message">
                            <a href="#" title="<?= $getID['nama'] ?>" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                <img class="avatar-img" src="<?= base_url('assets/img/account/' . $getID['foto_user']) ?>" alt="">
                            </a>

                            <div class="message-inner">
                                <div class="message-body">
                                    <div class="message-content">
                                        <div class="message-text">
                                            <span class="small text-muted"><?= $getID['nama'] ?></span>
                                            <p>
                                                <?= $getID['topik'] ?>
                                            </p>
                                        </div>

                                        <!-- Dropdown -->
                                        <div class="message-action">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <span class="me-auto">Edit</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                                    <path d="M12 20h9"></path>
                                                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            <span class="me-auto">Reply</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left">
                                                                    <polyline points="9 14 4 9 9 4"></polyline>
                                                                    <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="message-footer">
                                    <span class="extra-small text-muted">
                                        <?php
                                        $waktu_awal        = strtotime($getID['waktu']);
                                        $waktu_akhir    = strtotime(date("Y-m-d H:i:s"));
                                        $diff    = $waktu_akhir - $waktu_awal;
                                        $menit    = $diff / 60;
                                        $jam    = floor($diff / (60 * 60));
                                        $hari = floor($diff / (3600 * 24));
                                        if ($diff < 60) {
                                            echo number_format($diff, 0, ",", ".") . ' detik yang lalu';
                                        } elseif ($diff > 60 && $diff <= 3600) {
                                            echo  floor($menit) . ' menit yang lalu';
                                        } elseif ($diff > 3600 && $diff <= 86400) {
                                            echo floor($jam) .  ' jam yang lalu ';
                                        } elseif ($diff > 86400) {
                                            echo floor($hari) . 'hari yang lalu';
                                        }

                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>



                        <!-- Message -->
                        <div id="live_reply1">

                        </div>



                    </div>
                </div>
            </div>
            <!-- Chat: Content -->

            <!-- Chat: Footer -->
            <div class="chat-footer pb-3 pb-lg-7 position-absolute bottom-0 start-0">
                <!-- Chat: Files -->
                <div class="dz-preview bg-dark" id="dz-preview-row" data-horizontal-scroll="">
                </div>
                <!-- Chat: Files -->

                <!-- Chat: Form -->
                <div class="chat-form rounded-pill bg-dark">
                    <div class="row align-items-center gx-0">
                        <div class="col-auto">
                            <a href="#" class="btn btn-icon btn-link text-body rounded-circle" id="dz-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="col">
                            <div class="input-group">
                                <!-- <input type="text" name="reply_1" id="reply_1" placeholder="Type a message" class="form-control px-0" data-emoji-input=""> -->
                                <textarea name="reply_1" id="reply_1" class="form-control px-0" placeholder="Type a message" rows="1" data-emoji-input=""></textarea>
                                <input hidden type="text" name="id_diskusi" id="id_diskusi" value="<?= $getID['id_diskusi'] ?>">
                                <a class="input-group-text text-body pe-0" data-emoji-btn="">
                                    <span class="icon icon-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-komen btn-icon btn-primary rounded-circle ms-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Chat: Form -->
            </div>
            <!-- Chat: Footer -->
        </div>

    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<script type="text/javascript">
    $(document).ready(function() {
        selesai();
    });

    function selesai() {
        setTimeout(function() {
            update();
            selesai();
        }, 900);
    }

    function update() {
        $.ajax({
            type: 'GET',
            url: "<?= base_url('disc/beranda/Loadreply1/' . $getID['id_diskusi']) ?>",
            cache: false,
            success: function(data) {
                $("#live_reply1").html(data);
            }
        });

        $.ajax({
            type: 'GET',
            url: "<?= base_url('disc/beranda/load') ?>",
            cache: false,
            success: function(data) {
                $("#live_data").html(data);
            }
        });
    }
</script>

<script>
    $(document).ready(function() {

        $(".btn-komen").click(function() {

            var reply_1 = $("#reply_1").val();
            var id_diskusi = $("#id_diskusi").val();;

            if (reply_1.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'komentar kosong !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?php echo base_url('disc/beranda/reply1/' . $getID['id_diskusi']) ?>",
                    type: "POST",
                    data: {
                        "reply_1": reply_1,
                        "id_diskusi": id_diskusi
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Terikirim !',
                                    text: 'Thanks !',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?php echo base_url('disc/beranda/reply1/' . $getID['id_diskusi']) ?>";
                                });

                            $("#reply_1").val('');
                            $("#id_diskusi").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: ' Gagal!',
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

<!-- <script>
    $(document).ready(function() {

        $(".btn-kirim").click(function() {

            var topik = $("#topik_status").val();

            if (topik.length == "") {

                Swal.fire({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Status kosong !'
                });

            } else {

                //ajax
                $.ajax({

                    url: "<?= base_url('disc/beranda') ?>",
                    type: "POST",
                    data: {
                        "topik": topik
                    },

                    success: function(response) {

                        if (response == "success") {
                            Swal.fire({
                                    type: 'success',
                                    title: 'Terikirim !',
                                    text: 'Thanks !',
                                    timer: 3000,
                                    showCancelButton: false,
                                    showConfirmButton: false
                                })
                                .then(function() {
                                    window.location.href = "<?= base_url('disc/beranda') ?>";
                                });

                            $("#topik").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: ' Gagal!',
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
</script> -->