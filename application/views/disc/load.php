<?php foreach ($get as $key) : ?>

    <a href="<?= base_url('disc/beranda/reply1/' . $key['id_diskusi']) ?>" class="card border-0 text-reset">
        <div class="card-body">
            <div class="row gx-5">
                <div class="col-auto">
                    <div class="avatar avatar-online">
                        <img src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" alt="#" class="avatar-img">
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="me-auto mb-0"><?= $key['nama'] ?></h5>
                        <span class="text-muted extra-small ms-2">
                            <?php
                            $waktu_awal        = strtotime($key['waktu']);
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

                    <div class="d-flex align-items-center">
                        <div class="line-clamp me-auto">
                            <?= $key['topik'] ?>
                        </div>

                        <div class="badge badge-circle bg-primary ms-5">
                            <span>3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .card-body -->
    </a>

<?php endforeach ?>