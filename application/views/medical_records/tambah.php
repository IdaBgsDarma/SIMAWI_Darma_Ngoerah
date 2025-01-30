<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
            Tambah Rekam Medis
        </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="record_number">No. Rekam Medis</label>
                        <input type="text" name="record_number" class="form-control" id="record_number">
                        <div class="form-text text-danger"><?= form_error('record_number');?></div>
                    </div>
                    <div class="form-group">
                        <label for="date_visit">Tanggal Kunjungan</label>
                        <input type="date" name="date_visit" class="form-control" id="date_visit" require>
                        <div class="form-text text-danger"><?= form_error('date_visit');?></div>
                    </div>
                    <div class="form-group">
                        <label for="registered_by">Terdaftar</label>
                        <input type="text" name="registered_by" class="form-control" id="registered_by">
                        <div class="form-text text-danger"><?= form_error('registered_by');?></div>
                    </div>
                    <div class="form-group">
                        <label for="consultation_by">Konsultasi Dari</label>
                        <input type="text" name="consultation_by" class="form-control" id="consultation_by">
                        <div class="form-text text-danger"><?= form_error('consultation_by');?></div>
                    </div>
                    <div class="form-group">
                        <label for="symptoms">Gejala</label>
                        <textarea name="symptoms" class="form-control" id="symptoms"></textarea>
                        <div class="form-text text-danger"><?= form_error('symptoms');?></div>
                    </div>
                    <div class="form-group">
                        <label for="doctor_diagnose">Diagnosa Dokter</label>
                        <textarea name="doctor_diagnose" class="form-control" id="doctor_diagnose"></textarea>
                        <div class="form-text text-danger"><?= form_error('doctor_diagnose');?></div>
                    </div>
                    <div class="form-group">
                        <label for="icd10_code">Kode ICD10</label>
                        <input type="text" name="icd10_code" class="form-control" id="icd10_code">
                        <div class="form-text text-danger"><?= form_error('icd10_code');?></div>
                    </div>
                    <div class="form-group">
                        <label for="icd10_name">Nama ICD10</label>
                        <input type="text" name="icd10_name" class="form-control" id="icd10_name" readonly>
                    </div>
                    <div class="form-froup">
                    <label for="is_done">Keterangan</label>
                    <select name="is_done" id="is_done" class="form-control">
                        <option value=""></option>
                        <option value="1">Selesai</option>
                        <option value="0">Belum Selesai</option>
                        <div class="form-text text-danger"><?= form_error('is_done');?></div>
                    </select>
                    </div>
                    <button type = "submit" name="tambah" class='btn btn-warning'>Simpan</button>
                    <a href="<?= base_url('medical_record'); ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("#icd10_code").typeahead({
        source: function(query, result) {
            $.ajax({
                url: "<?php echo site_url('medical_record/search_icd10'); ?>",
                data: { query: query },
                dataType: "json",
                success: function(data) {
                    if (data.error) {
                        console.error("Error:", data.error);
                    } else {
                        // Extract ICD-10 code and name
                        let icdCode = data["@id"].split("/").pop(); // Extract "A00"
                        let icdName = data["title"]["@value"]; // Get "Cholera"

                        // Populate the fields
                        $("#icd10_code").val(icdCode);
                        $("#icd10_name").val(icdName);
                    }
                }
            });
        },
        afterSelect: function(item) {
            let parts = item.split(" - ");
            $("#icd10_code").val(parts[0]);
            $("#icd10_name").val(parts[1]);
        }
    });
});

</script>
