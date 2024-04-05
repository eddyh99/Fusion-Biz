<div id="layoutSidenav_content">
    <main>
		<div class="container-fluid px-4">
			<div class="col-12">
				<div class="py-3 d-flex flex-row align-items-center">
					<h3>Proyek</h3>
				</div>
			</div>

			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
					<h3>Filter Data</h3>
					</div>
						<div class="card-body">
						<div class="d-flex flex-column justify-content-center">
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 mb-3" id="kodemerchant">
										<label class="form-label">Kode Merchant</label>
										<input type="text" id="kodemerchant" name="kodemerchant" class="form-control cost-input">
									</div>
									<div class="col-md-4 mb-3" id="namaproyek">
										<label class="form-label">Nama Proyek</label>
										<input type="text" id="namaproyek" name="namaproyek" class="form-control cost-input">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="btn btn-fusion-gray mt-3" href="<?= base_url(); ?>proyek/tambahproyek">
					Tambah Proyek
				</a>
			</div>
			<div class="container-fluid my-3">
				<div class="card-proyek">
					<h3>Daftar Proyek<h3>
				</div>
				
				<div class="col-12 card mt-2">
					<div class="card-body">
                    <table id="member" class="table">
                        <thead class="table">
                            <tr>
                                <th>Kode Merchant</th>
                                <th>nama proyek</th>
                                <th>Website</th>
                                <th>URL callback</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody style="border-top: 0;">
							<tr>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
							</tr>
							<tr>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
							</tr>
							<tr>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
								<td>placeholder</td>
							</tr>
                        </tbody>
                    </table>
                </div>
				</div>
			</div>
		</div>
    </main>
</div>
