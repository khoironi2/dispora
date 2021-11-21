<?php foreach ($get as $key) : ?>
    <div class="timeline timeline-3">
        <div class="timeline-items">
            <?php if ($key['id_user_diskusi'] == $user['id_user']) { ?>

                <div class="timeline-item">
                    <div class="timeline-media">
                        <img alt="Pic" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" />
                    </div>
                    <a href="<?= base_url('disc/beranda/reply1/' . $key['id_diskusi']) ?>">
                        <div class="timeline-content mb-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="mr-2">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold"><?= $key['nama'] ?></a>
                                    <span class="text-muted ml-2">
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
                                    <?php if ($key['id_user_diskusi'] == $user['id_user']) { ?>
                                        <a href="<?= base_url('disc/beranda/delete/' . $key['id_diskusi']) ?>"><span class="label label-light-danger font-weight-bolder label-inline ml-2">Hapus</span></a>
                                        <a href="<?= base_url('disc/beranda/edit/' . $key['id_diskusi']) ?>"><span class="label label-light-success font-weight-bolder label-inline ml-2">Edit</span></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('disc/beranda/reply1/' . $key['id_diskusi']) ?>"><span class="label label-light-primary font-weight-bolder label-inline ml-2">Balas</span></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <p class="p-0">
                                <?= $key['topik'] ?>
                            </p>
                        </div>
                    </a>
                </div>


            <?php } else { ?>
                <div class="timeline-item">
                    <div class="timeline-media">
                        <img alt="Pic" src="<?= base_url('assets/img/account/' . $key['foto_user']) ?>" />
                    </div>
                    <a href="<?= base_url('disc/beranda/reply1/' . $key['id_diskusi']) ?>">
                        <div class="timeline-content mb-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="mr-2">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold"><?= $key['nama'] ?></a>
                                    <span class="text-muted ml-2">
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
                                    <?php if ($key['id_user_diskusi'] == $user['id_user']) { ?>
                                        <a href="<?= base_url('disc/beranda/delete/' . $key['id_diskusi']) ?>"><span class="label label-light-danger font-weight-bolder label-inline ml-2">Hapus</span></a>
                                        <a href="<?= base_url('disc/beranda/edit/' . $key['id_diskusi']) ?>"><span class="label label-light-success font-weight-bolder label-inline ml-2">Edit</span></a>
                                    <?php } else { ?>
                                        <a href="<?= base_url('disc/beranda/reply1/' . $key['id_diskusi']) ?>"><span class="label label-light-primary font-weight-bolder label-inline ml-2">Balas</span></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <p class="p-0">
                                <?= $key['topik'] ?>
                            </p>
                        </div>
                    </a>
                </div>
            <?php } ?>

        </div>
    </div>

<?php endforeach ?>