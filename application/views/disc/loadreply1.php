<div class="timeline timeline-3">
    <div class="timeline-items">
        <!-- <div class="timeline-item"> -->

        <ul style='list-style-type: none;'>
            <li>
                <div class="timeline-item">
                    <div class="timeline-media">
                        <img alt="Pic" src="<?= base_url('assets/img/account/' . $getID['foto_user']) ?>" />
                    </div>
                    <div class="timeline-content mb-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="mr-2">
                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold"><?= $getID['nama'] ?></a>
                                <span class="text-muted ml-2">
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
                                <?php if ($getID['id_user_diskusi'] == $user['id_user']) { ?>
                                    <!-- <a href="<?= base_url('disc/beranda/delete/' . $getID['id_diskusi']) ?>"><span class="label label-light-danger font-weight-bolder label-inline ml-2">Hapus</span></a> -->
                                    <!-- <a href="<?= base_url('disc/beranda/edit/' . $getID['id_diskusi']) ?>"><span class="label label-light-success font-weight-bolder label-inline ml-2">Edit</span></a> -->
                                <?php } else { ?>
                                    <!-- <a href="<?= base_url('disc/beranda/reply1/' . $getID['id_diskusi']) ?>"><span class="label label-light-primary font-weight-bolder label-inline ml-2">Balas</span></a> -->
                                <?php } ?>
                            </div>
                        </div>
                        <p class="p-0">
                            <?= $getID['topik'] ?>
                        </p>
                    </div>
                </div>
            </li>
            <ul style='list-style-type: none;'>
                <?php foreach ($getReply1 as $reply1) : ?>
                    <li>
                        <div class="timeline-item">
                            <div class="timeline-media symbol symbol-circle">
                                <img alt="Pic" src="<?= base_url('assets/img/account/' . $reply1['foto_user']) ?>" />
                            </div>
                            <div class="timeline-content mb-3">

                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="mr-2">
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold"><?= $getID['nama'] ?></a>
                                        <span class="text-muted">
                                            <?php
                                            $waktu_awal        = strtotime($reply1['waktu']);
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
                                        <?php if ($reply1['id_user_reply_1_diskusi'] == $user['id_user']) { ?>
                                            <!-- <a href="<?= base_url('disc/beranda/deleteReply1/' . $reply1['id_reply_1']) ?>"><span class="label label-light-danger font-weight-bolder label-inline ml-2">Hapus</span></a> -->
                                        <?php } else { ?>
                                            <!-- <a href="<?= base_url('disc/beranda/Balasreply1/' . $reply1['id_reply_1']) ?>"><span class="label label-light-primary font-weight-bolder label-inline ml-2">Balas</span></a> -->
                                        <?php } ?>
                                    </div>
                                </div>
                                <p class="p-0">
                                    <?= $reply1['reply_1'] ?>
                                </p>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </ul>

        <!-- </div> -->

    </div>
</div>