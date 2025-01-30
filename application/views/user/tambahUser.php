<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
            Tambah User
        </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name">
                        <div class="form-text text-danger"><?= form_error('name');?></div>
                    </div>
                    <div class="form-froup">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value=""></option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <div class="form-text text-danger"><?= form_error('role');?></div>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" require>
                        <div class="form-text text-danger"><?= form_error('email');?></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password">
                        <div class="form-text text-danger"><?= form_error('password');?></div>
                    </div>
                    <button type = "submit" name="tambah" class='btn btn-primary float-right'>Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>
