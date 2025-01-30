<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3>Registrasi Pasien</h3>
        </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="record_number">Rekam Medis</label>
                        <input type="text" name="record_number" class="form-control" id="record_number">
                        <div class="form-text text-danger"><?= form_error('record_number');?></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <div class="form-text text-danger"><?= form_error('name');?></div>
                    </div>
                    <div class="form-group">
                        <label for="birth">Tanggal lahir</label>
                        <input type="date" name="birth" class="form-control" id="birth" require>
                        <div class="form-text text-danger"><?= form_error('birth');?></div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik">
                        <div class="form-text text-danger"><?= form_error('nik');?></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        <div class="form-text text-danger"><?= form_error('phone');?></div>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" name="address" class="form-control" id="address">
                        <div class="form-text text-danger"><?= form_error('address');?></div>
                    </div>
                    <div class="form-froup">
                    <label for="blood_type">Gol. Darah</label>
                    <select name="blood_type" id="blood_type" class="form-control">
                        <option value=""></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <div class="form-text text-danger"><?= form_error('blood_type');?></div>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="weight">Berat Badan</label>
                        <input type="text" name="weight" class="form-control" id="weight">
                        <div class="form-text text-danger"><?= form_error('weight');?></div>
                    </div>
                    <div class="form-group">
                        <label for="height">Tinggi Badan</label>
                        <input type="text" name="height" class="form-control" id="height">
                        <div class="form-text text-danger"><?= form_error('height');?></div>
                    </div>
                    <button type = "submit" name="tambah" class='btn btn-success'>Registrasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
