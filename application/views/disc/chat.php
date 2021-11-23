<!-- Sidebar -->

<!-- Chat -->
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
                            <?php foreach ($pengaturan as $key) : ?>
                                <div class="col-12 col-xl-6">
                                    <div class="row align-items-center gx-5">
                                        <div class="col-auto">
                                            <div class="avatar d-none d-xl-inline-block">
                                                <img class="avatar-img" src="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" alt="">
                                            </div>
                                        </div>

                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate"><?= $key['nama_aplikasi_forum'] ?></h5>
                                            <p class="text-truncate">Bersama menyatukan<span class='typing-dots'><span>.</span><span>.</span><span>.</span></span></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                            <!-- Title -->

                            <!-- Toolbar -->
                            <!-- <div class="col-xl-6 d-none d-xl-block">
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
                            </div> -->
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
                    <div class="py-6 py-lg-12">

                        <div id="live_ya"></div>


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
                <div class="chat-form rounded-pill bg-dark" data-emoji-form="">
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
                                <textarea onclick="submitForm()" data-emojiable="true" type="text" data-emoji-input="unicode" name="topik_status" id="topik_status" class="form-control px-0" placeholder="Type your message..." rows="1" data-emoji-input="true" data-autosize="true"></textarea>
                                <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
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
                            <button class="btn btn-kirim btn-icon btn-primary rounded-circle ms-5">
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
<!-- Chat -->

<!-- Chat: Info -->

<script type="text/javascript">
    $(document).ready(function() {
        loaddata();
    });

    function loaddata() {
        setTimeout(function() {
            oke();
            loaddata();
        }, 1000);
    }

    function oke() {

        $.ajax({
            type: 'POST',
            url: "<?= base_url('disc/beranda/loadprimary') ?>",
            cache: false,
            success: function(data) {
                $("#live_ya").html(data);
            }
        });

    }

    function submitForm() {
        // Get the first form with the name
        // Usually the form name is not repeated
        // but duplicate names are possible in HTML
        // Therefore to work around the issue, enforce the correct index
        var frm = document.getElementsByName('contact-form')[0];
        frm.submit(); // Submit the form
        frm.reset(); // Reset all form data
        return false; // Prevent page refresh
    }
</script>


<script>
    $(document).ready(function() {

        $(".btn-kirim").click(function() {

            var topik = $("#topik_status").val();

            if (topik.length == "") {



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

                            $("#topik_status").val('');

                        } else {

                            Swal.fire({
                                type: 'error',
                                title: ' Gagal!',
                            });

                        }

                        console.log(response);

                    },

                    error: function(response) {
                        Swal.fire({
                            type: 'error',
                            text: 'server error!'
                        });
                    }

                })

            }

        });

    });
</script>