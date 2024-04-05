			<div class="py-3 d-flex flex-row align-items-center">
			<h2>Profil</h2>
            </div>

				  <div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_dpribadi ?>" href="<?= base_url(); ?>profil">Data Pribadi</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_akunbank ?>" href="<?= base_url(); ?>profil/akunbank">Akun Bank</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_ganti ?>" href="<?= base_url(); ?>profil/gantipass">Ganti Password</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_notif ?>" href="<?= base_url(); ?>profil/notif">Notifikasi</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_gauth ?>" href="<?= base_url(); ?>profil/googleauth">Google Auth</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link <?= @$mn_bayar ?>" href="<?= base_url(); ?>profil/pembayaran">Halaman Pembayaran</a>
					  </li>
					</ul>
				  </div>
