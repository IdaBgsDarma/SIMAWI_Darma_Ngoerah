<div class="container">
    <div class="row mt-3">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post"> 
                    <input type="hidden" name="id" value="<?= $user['id'];?>">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $user['name'];?>">
                        <div class="form-text text-danger"><?= form_error('name');?></div>
                    </div>
                    <div class="form-froup">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                    <?php foreach($role as $role): ?>
                        <?php if ($role == $user['role']) : ?>
                            <option value="<?= $role; ?> " selected><?= $role;?> </option>
                        <?php endif; ?>
                            <option value="<?= $role; ?> "><?= $role;?> </option>
                    <?php endforeach;?>
                    </select>
                    <!-- <select name="role" id="role" class="form-control">
                        <option value="">--</option>
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                    </select> -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="<?= $user['email'];?>">
                        <div class="form-text text-danger"><?= form_error('email');?></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" value="<?= $user['password'];?>">
                        <div class="form-text text-danger"><?= form_error('password');?></div>
                    </div>
                    <button type = "submit" name="ubah" class='btn btn-primary float-right'>Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>
