
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
            <h3>Tambah Rekam Medis</h3>
        </div>
        <div class="card-body">
        <form action="<?php echo site_url('medical_record/store'); ?>" method="post">
            <div class="form-group">
                <label for="record_number">Nomor Rekam Medis</label>
                <input type="text" class="form-control" id="record_number" name="record_number" >
            </div>
            <div class="form-group">
                <label for="date_visit">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="date_visit" name="date_visit" >
            </div>
            <div class="form-group">
                <label for="registered_by">Didaftarkan Oleh</label>
                <input type="text" class="form-control" id="registered_by" name="registered_by" >
            </div>
            <div class="form-group">
                <label for="consultation_by">Dokter yang Menangani</label>
                <input type="text" class="form-control" id="consultation_by" name="consultation_by" >
            </div>
            <div class="form-group">
                <label for="symptoms">Gejala</label>
                <textarea class="form-control" id="symptoms" name="symptoms" ></textarea>
            </div>
            <div class="form-group">
                <label for="doctor_diagnose">Diagnosa Dokter</label>
                <textarea class="form-control" id="doctor_diagnose" name="doctor_diagnose" ></textarea>
            </div>
            <div class="form-group">
                <label for="icd10_code">Kode ICD-10</label>
                <input type="text" class="form-control" id="icd10_code" name="icd10_code" >
            </div>
            <div class="form-group">
                <label for="icd10_name">Nama ICD-10</label>
                <input type="text" class="form-control" id="icd10_name" name="icd10_name"  readonly>
            </div>
            <div class="form-group">
                <label for="is_done">Status Selesai</label>
                <select class="form-control" id="is_done" name="is_done">
                    <option value="1">Selesai</option>
                    <option value="0">Belum Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo site_url('medical_record'); ?>" class="btn btn-secondary">Kembali</a>
        </form>
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

</body>
</html>
