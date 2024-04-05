<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
		
				<?php $this->load->view("main/profil/header"); ?>
				<div class="card text-start">
							<div class="card-body">
								<form class="card-body col-9" action="<?php echo base_url('profil'); ?>" method="post">
									<div class="form-group row mb-3 align-items-center justify-content-between">
										<div class="col-md-12">
										<label for="passwordlama" class="col-lg-3 col-form-label">Password Saat ini</label>
											<input type="text" class="form-control form-control-lg" id="passlama" name="passlama" required>
										</div>
									</div>

									<div class="form-group row mb-3 align-items-center">
										<div class="col-md-12">
										<label for="passwordbaru" class="col-lg-3 col-form-label">Password Baru</label>
											<input type="text" class="form-control form-control-lg" id="passbaru" name="pass" required>
										</div>
									</div>

									<div class="form-group row mb-3 align-items-center">
										<div class="col-md-12">
										<label for="passwordbaruulang" class="col-lg-3 col-form-label">Ulangi Password Baru</label>
											<input type="text" class="form-control form-control-lg" id="passbaru" name="pass" required>
										</div>
									</div>

									<div class="row mb-3">
										<div class="col-md-11 d-flex justify-content-start">
											<button type="submit" class="btn btn-fusion-gray">
												<i class="fas fa-save"></i> Simpan
											</button>
										</div>
									</div>
								</form>
							</div>
				</div>
        </div>
    </main>
</div>
