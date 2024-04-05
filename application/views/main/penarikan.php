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
				<h3>Permintaan Penarikan</h3>
				</div>
                    <div class="card-body">
					<div class="d-flex flex-column justify-content-center">
						<div class="row">
							<div class="col-3">
								<a><a/>
							</div>
							<div>
							<p>Saldo yang dapat di tarik saat ini sebesar : <a class="text">$saldo</a></p>
							<p>Anda dapat melakukan permintaan penarikan lagi setelah 10 menit dari permintaan terakhir.</p>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 mb-3" id="topup_circuit_pct_div">
									<label class="form-label">Nominal</label>
									<input type="text" id="nominal" name="nominal" class="form-control cost-input">
								</div>
								<div class="col-md-4 mb-3" id="Bank">
									<label class="form-label">Bank</label>
									<select name="bank" id="bank" class="form-select">
                                        <option value="">BCA</option>
                                        <option value="">BNI</option>
                                        <option value="">BRI</option>
                                        <option value="">Mandiri</option>
                                        <option value="">Sendiri</option>
                                    </select>
								</div>
								<div class="col-4 mb-3 d-flex align-item-end">
									<button id="btnconfirm" class="btn btn-gray mt-auto">Penarikan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
                </div>
            </div>
			<div class="col-12 mt-3">
				<div class="col-12 d-flex align-items-center justify-content-center" id="resultpost">Placeholder Untuk permintaan penarikan</div>
			</div>
			</div>
		</div>
    </main>
</div>
