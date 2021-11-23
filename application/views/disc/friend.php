<div class="card-list">

    <!-- Card -->

    <?php foreach ($getO as $key) : ?>


        <!-- Card -->
        <div class="card border-0">
            <div class="card-body">

                <div class="row align-items-center gx-5">
                    <div class="col-auto">
                        <?php if ($key['status_aktif'] == 1) { ?>
                            <a href="#" class="avatar avatar-online ">
                                <img class="avatar-img" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" alt="">
                            </a>
                        <?php } elseif ($key['status_aktif'] == 2) { ?>
                            <a href="#" class="avatar ">
                                <img class="avatar-img" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" alt="">
                            </a>
                        <?php } ?>

                    </div>

                    <div class="col">
                        <h5><a href="#"><?= $key['nama'] ?></a></h5>

                        <?php if ($key['status_aktif'] == 1) { ?>
                            <p class="text-success">online</p>
                        <?php } elseif ($key['status_aktif'] == 2) { ?>
                            <p>
                                <?php
                                $waktu_awal        = strtotime($key['time_logout_user']);
                                $waktu_akhir    = strtotime(date("Y-m-d H:i:s"));
                                $diff    = $waktu_akhir - $waktu_awal;
                                $menit    = $diff / 60;
                                $jam    = floor($diff / (60 * 60));
                                $hari = floor($diff / (3600 * 24));
                                $minggu = floor($diff / (86400 * 7));
                                $bulan = floor($diff / (604800 * 4));
                                if ($diff < 60) {
                                    echo 'aktif ' . number_format($diff, 0, ",", ".") . ' detik yang lalu';
                                } elseif ($diff > 60 && $diff <= 3600) {
                                    echo 'aktif ' .  floor($menit) . ' menit yang lalu';
                                } elseif ($diff > 3600 && $diff <= 86400) {
                                    echo 'aktif ' . floor($jam) .  ' jam yang lalu ';
                                } elseif ($diff > 86400 && $diff < 604800) {
                                    echo 'aktif ' . floor($hari) . ' hari yang lalu';
                                } elseif ($diff >= 604800 && $diff < 2419200) {
                                    echo 'aktif ' . floor($minggu) . ' minggu yang lalu';
                                } elseif ($diff >= 2419200) {
                                    echo 'aktif ' . floor($bulan) . ' bulan yang lalu';
                                }

                                ?>
                            <?php } ?>

                            </p>
                    </div>

                    <div class="col-auto">
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">New message</a></li>
                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Card -->
        <!-- Card -->

        <!-- Card -->

    <?php endforeach ?>

    <!-- Card -->


    <!-- Card -->
</div>