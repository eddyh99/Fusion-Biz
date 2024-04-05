<div id="layoutSidenav_content">
    <main>
		<div class="container-fluid px-4">
			<div class="col-12">
				<div class="py-3 d-flex flex-row align-items-center">
					<h3>Penarikan</h3>
				</div>
			</div>

			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3>Filter Data</h3>
					</div>
					<form class="card-body"  href="<?= base_url() ?>proyek">
						<div class="col-10 row d-flex justify-content-between">
							<div class="col-5 mb-3">
								<label class="form-label">Nama Proyek</label>
								<input type="text" id="namaproyek" name="namaproyek" class="form-control cost-input">
							</div>
							<div class="col-5 mb-3">
								<label class="form-label">Website Proyek</label>
								<input type="text" id="webproyek" name="webproyek" class="form-control cost-input">
							</div>
							<div class="col-12 mb-3">
								<label class="form-label">URL Proyek</label>
								<input type="text" id="urlproyek" name="urlproyek" class="form-control cost-input">
								
							</div>
						</div>
								
						<div class="col-6" id="logoweb">
								<label class="form-label">Logo Website (ukuran 100x100)</label>
									<div class="input-group">
									<input type="image" id="logo" name="logo" class="form-control cost-input">
										<div class="input-group-append">
											<span class="input-group-text">
											pilih file
											</span>
										</div>
									</div>
						</div>

						<div class="col-6" id="background">
								<label class="form-label">gambar background (Ukuran 1920x1080)</label>
								<div class="input-group">
									<input type="text" class="form-control" id="gambarbg" name="gambarbg" required="">
									<div class="input-group-append">
										<span class="input-group-text">
										pilih file
										</span>
									</div>
								</div>
						</div>
						<button type="submit" class="btn btn-fusion-gray mt-3">
                         Simpan
                        </button>
					</form>
				</div>
			</div>
		</div>
    </main>
</div>
