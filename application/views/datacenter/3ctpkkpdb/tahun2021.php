<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col">
                <!--begin::Stats Widget 10-->
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
                        <div class="col-lg">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Header-->
                                <div class="card-header h-auto">
                                    <!--begin::Title-->
                                    <div class="card-title py-5">
                                        <h3 class="card-label">DATA CAPAIAN TARGET PROGRAM KEPELOPORAN - KEPEMIMPINAN DAN SUMBER DAYA PEMUDA DISPORA BANTEN</h3>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <div class="card-body">
                                    <!--begin::Chart-->
                                    <div id="graph"></div>
                                    <!--end::Chart-->
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Stats Widget 10-->
            </div>
            <!--begin::Card-->

            <!--end::Card-->
        </div>

        <!--end::Tables Widget 5-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->



<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>js/raphael-min.js"></script>
<script src="<?= base_url('assets/') ?>js/morris.min.js"></script>

<script>
    Morris.Bar({
        element: 'graph',
        data: <?= $capaian; ?>,
        xkey: 'nama_jenis_kegiatan',
        ykeys: ['jumlah'],
        labels: ['Tercapai']
    });
</script>