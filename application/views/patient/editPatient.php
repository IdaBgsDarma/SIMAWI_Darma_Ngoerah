<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <h3>Perbaharui Pasien</h3>
        </div>
            <div class="card-body">
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $patient['id'];?>">
                    <div class="form-group">
                        <label for="record_number">Rekam Medis</label>
                        <input type="text" name="record_number" class="form-control" id="record_number" value="<?= $patient['record_number'];?>">
                        <div class="form-text text-danger"><?= form_error('record_number');?></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $patient['name'];?>">
                        <div class="form-text text-danger"><?= form_error('name');?></div>
                    </div>
                    <div class="form-group">
                        <label for="birth">Tanggal lahir</label>
                        <input type="date" name="birth" class="form-control" id="birth" value="<?= $patient['birth'];?>">
                        <div class="form-text text-danger"><?= form_error('birth');?></div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik" value="<?= $patient['nik'];?>">
                        <div class="form-text text-danger"><?= form_error('nik');?></div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon</label>
                        <input type="text" name="phone" class="form-control" id="phone" value="<?= $patient['phone'];?>">
                        <div class="form-text text-danger"><?= form_error('phone');?></div>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" name="address" class="form-control" id="address" value="<?= $patient['address'];?>">
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
                        <input type="text" name="weight" class="form-control" id="weight" value="<?= $patient['weight'];?>">
                        <div class="form-text text-danger"><?= form_error('weight');?></div>
                    </div>
                    <div class="form-group">
                        <label for="height">Tinggi Badan</label>
                        <input type="text" name="height" class="form-control" id="height" value="<?= $patient['height'];?>">
                        <div class="form-text text-danger"><?= form_error('height');?></div>
                    </div>
                    <button type = "submit" name="ubah" class='btn btn-success'>Perbaharui</button>
                </form>
            </div>
        </div>
    </div>
</div>
