<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
		
			<?php $this->load->view("main/profil/header"); ?>
			
				<div class="card">
				<div class="mb-3 px-4 py-2 card-info">
					<p>Untuk Perubahan data harap hubungi customer service kami melalui Ticket, email (support@fusionpay.com)</p>
				</div>
					<form class="card-body col-9" action="<?php echo base_url('profil'); ?>" method="post">
						<div class="form-group row mb-3 align-items-center justify-content-between">
							<div class="col-md-12">
							<label for="Nama" class="col-lg-3 col-form-label">Nama Lengkap</label>
								<input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
							</div>
						</div>

						<div class="form-group row mb-3 align-items-center">
							<div class="col-md-12">
							<label for="Nama" class="col-lg-3 col-form-label">Alamat Email</label>
								<input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
							</div>
						</div>

						<div class="form-group row mb-3 align-items-center">
							<div class="col-md-12">
							<label for="Nama" class="col-lg-2 col-form-label">Email</label>
								<input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
							</div>
						</div>


						<div class="form-group row">
							<div class="col-md-6" id="provinsi">
							<label for="provinsi" class="form-label">Provinsi</label>
								<input type="text" id="provinsi" name="provinsi" class="form-control cost-input">
							</div>

							<div class="col-md-6 mb-3" id="kota">
							<label for="kota" class="form-label">Kota</label>
								<input type="text" id="kota" name="kota" class="form-control cost-input">
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 mb-3" id="Kecamatan">
								<label class="form-label">Kecamatan</label>
								<input type="text" id="Kecamatan" name="Kecamatan" class="form-control cost-input">
							</div>
							<div class="col-md-4 mb-3" id="Kelurahan">
								<label class="form-label">Kelurahan</label>
								<input type="text" id="Kelurahan" name="Kelurahan" class="form-control cost-input">
							</div>
							<div class="col-md-4 mb-3" id="kodepos">
								<label class="form-label">Kode Pos</label>
								<input type="text" id="kodepos" name="kodepos" class="form-control cost-input">
							</div>
						</div>



						<div class="form-group row mb-3 align-items-center">
							<div class="col-md-12">
							<label for="notelp" class="col-lg-2 form-label">No Telepon</label>
								<input type="text" class="form-control form-control-lg" id="notelp" name="notelp" required>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6" id="npwp">
								<label class="col-form-label">NPWP</label>
								<input type="text" id="npwp" name="npwp" class="form-control cost-input">
							</div>
							<div class="col-md-6 mb-3" id="ktp">
								<label class="col-form-label">KTP</label>
								<input type="text" id="ktp" name="ktp" class="form-control cost-input">
							</div>
						</div>

						<div class="row mb-3">
							<div class="col-md-11 d-flex justify-content-start">
								<button type="submit" class="btn btn-primary" style="background-color: #624DE3;">
									<i class="fas fa-save"></i> Simpan
								</button>
							</div>
						</div>
					</form>
				</div>
        </div>
    </main>
</div>
