
<body>
<div class="container ">

<?php if ($this->session->flashdata('flash')): ?>
<div class="row mt-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Pasien <strong>berhasil</strong> <?= $this->session->flashdata('flash');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" >
            <span array_hidden="true">&times;</span>
        </button>
    </div>
    </div>
</div>
<?php endif;?>
</div>
   <div class="container">
   <h2>Daftar Pasien</h2>
   <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('medical_record/create') ?>" class="btn btn-primary" style="margin-bottom: 20px; display: inline-block;">Tambah Rekam Medis</a>
        </div>
    </div>
    <ul class="list-group">
    <table class="table table-striped">
    <tr>
            <th>Id</th>
            <th>Rekam Medis</th>
            <th>Tanggal Kunjungan</th>
            <th>Diregistrasi Oleh</th>
            <th>Dikonsulkan Oleh</th>
            <th>Gejala</th>
            <th>Diagnosa Dokter</th>
            <th>ICD10 Code</th>
            <th>ICD10 Name</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($patient_history as $medical_record): ?>
        <tr>
            <td><?= $medical_record->id; ?></td>
            <td><?= $medical_record->record_number; ?></td>
            <td><?= $medical_record->date_visit; ?></td>
            <td><?= $medical_record->registered_by; ?></td>
            <td><?= $medical_record->consultation_by; ?></td>
            <td><?= $medical_record->symptoms; ?></td>
            <td><?= $medical_record->doctor_diagnose; ?></td>
            <td><?= $medical_record->icd10_code; ?></td>
            <td><?= $medical_record->icd10_name; ?></td>
            <td><?= $medical_record->is_done; ?></td>
            <td>
                <div style="display: flex; gap: 3px; align-items: center;">
                <!-- <a href="<?= base_url('medical_record/detail/' . $medical_record->id) ?>" class="btn btn-success">Detail</a> | -->
                <!-- <a href="<?= base_url('medical_record/edit/' . $medical_record->id) ?>" class="btn btn-warning">Edit</a> | -->
                <a href="<?= base_url('medical_record/hapus/' . $medical_record->id) ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </ul>
   </div>


