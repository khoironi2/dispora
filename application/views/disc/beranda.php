<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label"><a href="<?= base_url('disc/beranda') ?>"><?= $page; ?></a>
                                <!-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span> -->
                            </h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="card card-custom gutter-b">
                            <div>
                                <div class="card-body">
                                    <!--begin::Example-->
                                    <div class="example example-basic">
                                        <div class="example-preview">

                                            <div id="live_data">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer align-items-center">
                                    <textarea name="topik" id="topik_status" class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                                    <div class="d-flex align-items-center justify-content-between mt-5">
                                        <div>
                                            <button type="submit" class="btn btn-kirim btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Datatable-->
                    </div>
                </div>
            </div>
            <!--begin::Card-->

            <!--end::Card-->
        </div>
    </div>

    <!--end::Tables Widget 5-->
    <!--end::Dashboard-->
</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        selesai();
    });

    function selesai() {
        setTimeout(function() {
            update();
            selesai();
        }, 4000);
    }

    function update() {
        $.ajax({
            type: 'POST',
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
</script>