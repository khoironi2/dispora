<!-- Layout -->
<div class="layout overflow-hidden">
    <!-- Navigation -->
    <nav class="navigation d-flex flex-column text-center navbar navbar-light hide-scrollbar">
        <!-- Brand -->
        <a href="index-2.html" title="Messenger" class="d-none d-xl-block mb-6">
            <?php foreach ($pengaturan as $key) : ?>
                <div class="avatar  d-none d-xl-inline-block">
                    <img class="avatar-img" src="<?= base_url('assets/img/logo/' . $key['logo_aplikasi']) ?>" alt="">
                </div>
            <?php endforeach ?>

        </a>

        <!-- Nav items -->
        <ul class="d-flex nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center align-items-center w-100 py-4 py-lg-2 px-lg-3" role="tablist">
            <!-- Invisible item to center nav vertically -->
            <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                <a class="nav-link py-0 py-lg-8" href="#" title="">
                    <div class="icon icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </div>
                </a>
            </li>

            <!-- New chat -->
            <!-- <li class="nav-item">
                <a class="nav-link py-0 py-lg-8" id="tab-create-chat" href="#tab-content-create-chat" title="Create chat" data-bs-toggle="tab" role="tab">
                    <div class="icon icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                            <path d="M12 20h9"></path>
                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </div>
                </a>
            </li> -->

            <!-- Friends -->
            <li class="nav-item">
                <a class="nav-link py-0 py-lg-8" id="tab-friends" href="#tab-content-friends" title="Friends" data-bs-toggle="tab" role="tab">
                    <div class="icon icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                </a>
            </li>

            <!-- Chats -->
            <li class="nav-item">
                <a class="nav-link active py-0 py-lg-8" id="tab-chats" href="#tab-content-chats" title="Chats" data-bs-toggle="tab" role="tab">
                    <div class="icon icon-xl icon-badged">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        <div class="badge badge-circle bg-primary">
                            <span>4</span>
                        </div>
                    </div>
                </a>
            </li>

            <!-- Notification -->
            <li class="nav-item">
                <a class="nav-link py-0 py-lg-8" id="tab-notifications" href="#tab-content-notifications" title="Notifications" data-bs-toggle="tab" role="tab">
                    <div class="icon icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </div>
                </a>
            </li>



            <!-- Profile -->
            <li class="nav-item">
                <a href="#" class="nav-link p-0 mt-lg-2" data-bs-toggle="modal" data-bs-target="#modal-profile">
                    <div class="avatar avatar-online mx-auto d-none d-xl-block">
                        <img class="avatar-img" src="<?= base_url('assets/img/account/' . $user['foto_user']) ?>" alt="">
                    </div>
                    <div class="avatar avatar-online avatar-xs d-xl-none">
                        <img class="avatar-img" src="<?= base_url('assets/img/account/' . $user['foto_user']) ?>" alt="">
                    </div>
                </a>
            </li>
        </ul>
    </nav>