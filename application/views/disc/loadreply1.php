<!-- Message -->


<?php foreach ($getReply1 as $reply1) : ?>

    <?php if ($reply1['id_user_reply_1_diskusi'] == $user['id_user']) { ?>
        <div class="message message-out">
            <?php if ($reply1['status_aktif'] == 1) { ?>
                <div class="avatar avatar-online">
                    <img src="<?= base_url('assets/img/account/' . $reply1['foto_user']) ?>" alt="#" class="avatar-img">
                </div>
            <?php } elseif ($reply1['status_aktif'] == 2) { ?>
                <div class="avatar">
                    <img src="<?= base_url('assets/img/account/' . $reply1['foto_user']) ?>" alt="#" class="avatar-img">
                </div>
            <?php } ?>


            <div class="message-inner">
                <div class="message-body">
                    <div class="message-content">
                        <div class="message-text bg-danger">
                            <span class="small text-muted"><?= $reply1['nama'] ?></span>
                            <p>
                                <?= $reply1['reply_1'] ?>
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
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="message">

            <?php if ($reply1['status_aktif'] == 1) { ?>
                <div class="avatar avatar-online">
                    <img src="<?= base_url('assets/img/account/' . $reply1['foto_user']) ?>" alt="#" class="avatar-img">
                </div>
            <?php } elseif ($reply1['status_aktif'] == 2) { ?>
                <div class="avatar">
                    <img src="<?= base_url('assets/img/account/' . $reply1['foto_user']) ?>" alt="#" class="avatar-img">
                </div>
            <?php } ?>

            <div class="message-inner">
                <div class="message-body">
                    <div class="message-content">
                        <div class="message-text">
                            <span class="small text-muted"><?= $reply1['nama'] ?></span>
                            <p>
                                <?= $reply1['reply_1'] ?>
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
                </div>
            </div>
        </div>
    <?php } ?>


<?php endforeach ?>