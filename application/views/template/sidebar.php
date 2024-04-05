    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link <?= @$mn_dashboard ?>" href="<?= base_url() ?>dashboard">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link <?= @$mn_penarikan ?>" href="<?= base_url(); ?>penarikan">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Penarikan
                        </a>
                        <a class="nav-link <?= @$mn_proyek ?>" href="<?= base_url() ?>proyek">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Proyek
                        </a>
						<a class="nav-link collapsed <?= @$mn_member ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePagesMember" aria-expanded="false" aria-controls="collapsePagesMember">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Laporan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
						<div class="collapse" id="collapsePagesMember" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url() ?>laporan/proyekmerchant">Proyek Merchant</a>
                                <a class="nav-link" href="<?= base_url() ?>laporan/mutasi">Mutasi</a>
                            </nav>
                        </div>
                        <a class="nav-link <?= @$mn_dokumentasi ?>" href="<?= base_url() ?>dokumentasi">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Dokumentasi
                        </a>
                        <a class="nav-link <?= @$mn_profil ?>" href="<?= base_url() ?>profil">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Profil
                        </a>
                        <a class="nav-link <?= @$mn_team ?>" href="<?= base_url() ?>team">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Team
                        </a>
                        <a class="nav-link" href="<?= base_url() ?>auth/logout">
                            <div class="sb-nav-link-icon"><i class=""></i></div>
                            Keluar
                        </a>
                    </div>
                </div>
            </nav>
        </div>
