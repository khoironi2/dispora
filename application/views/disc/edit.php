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
                            <h3 class="card-label"><?= $page; ?>
                                <!-- <span class="d-block text-muted pt-2 font-size-sm">extended pagination options</span> -->
                            </h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <div class="card card-custom gutter-b">
                            <form action="<?= base_url('disc/beranda/save') ?>" method="POST">
                                <input hidden type="text" value="<?= $getID['id_diskusi'] ?>" name="id_diskusi" id="id_diskusi">
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
                                    <textarea name="topik" id="topik" class="form-control border-0 p-0" rows="2" placeholder="Type a message"><?= $getID['topik'] ?></textarea>
                                    <div class="d-flex align-items-center justify-content-between mt-5">
                                        <div>
                                            <button type="submit" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        }, 6000);
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