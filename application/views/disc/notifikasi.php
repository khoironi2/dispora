<div class="card-list mt-8">
    <?php foreach ($notif as $key) : ?>

        <a href="<?= base_url('disc/beranda/reply1/' . $key['id_reply_1_diskusi']) ?>" class="card border-0 text-reset">
            <!-- Card -->
            <div class="card border-0">
                <div class="card-body">

                    <div class="row gx-5">
                        <div class="col-auto">
                            <!-- Avatar -->
                            <a href="<?= base_url('disc/beranda/reply1/' . $key['id_reply_1_diskusi']) ?>" class="avatar">
                                <img class="avatar-img" src="<?= base_url('assets/img/account/' . $key['dibalas_oleh_foto']) ?>" alt="">

                                <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <div class="d-flex align-items-center mb-2">
                                <h5 class="me-auto mb-0">
                                    <a class="extra-small text-muted ms-2" href="#"> <span class="text-primary"><?= $key['dibalas_oleh'] ?></span> membalas status <span class="text-primary"><?= $key['nama_punya_status'] ?></span></a>
                                </h5>
                                <span class="extra-small text-muted ms-2">
                                    <?php
                                    $waktu_awal        = strtotime($key['waktu_balas']);
                                    $waktu_akhir    = strtotime(date("Y-m-d H:i:s"));
                                    $diff    = $waktu_akhir - $waktu_awal;
                                    $menit    = $diff / 60;
                                    $jam    = floor($diff / (60 * 60));
                                    $hari = floor($diff / (3600 * 24));
                                    $minggu = floor($diff / (86400 * 7));
                                    $bulan = floor($diff / (604800 * 4));
                                    if ($diff < 60) {
                                        echo  number_format($diff, 0, ",", ".") . ' detik yang lalu';
                                    } elseif ($diff > 60 && $diff <= 3600) {
                                        echo   floor($menit) . ' menit yang lalu';
                                    } elseif ($diff > 3600 && $diff <= 86400) {
                                        echo  floor($jam) .  ' jam yang lalu ';
                                    } elseif ($diff > 86400 && $diff < 604800) {
                                        echo  floor($hari) . ' hari yang lalu';
                                    } elseif ($diff >= 604800 && $diff < 2419200) {
                                        echo  floor($minggu) . ' minggu yang lalu';
                                    } elseif ($diff >= 2419200) {
                                        echo  floor($bulan) . ' bulan yang lalu';
                                    }

                                    ?>
                                </span>
                            </div>

                            <div class="d-flex">
                                <!-- <div class="me-auto">Removed you from the chat <a href="#" class="text-reset">Bootstrap Community</a>.</div> -->
                                <div class="me-auto"><?= $key['reply_1'] ?></div>

                                <div class="dropdown ms-5">
                                    <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Show less often</a></li>
                                        <li><a class="dropdown-item" href="#">Hide</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Card -->
        </a>
    <?php endforeach ?>
</div>