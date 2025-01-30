<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <form action="<?= base_url('auth/login'); ?>" method="post">
        <label>Email :</label>
        <input type="text" name="email" required><br><br>
        <label>Password :</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href='style.css'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="wrapper">

        <div class="vh-100 d-flex justify-content-center align-items-center flex-column">

        <form action="<?= base_url('auth/login'); ?>" method="post">
            <h1>Login</h1>
            <?php if ($this->session->flashdata('error')): ?>
                 <p style="color: red;"><?= $this->session->flashdata('error'); ?></p>
            <?php endif; ?>
            <div class="input-box">
                    <input type="text" placeholder="Email" name="email" class="form-control" id="email" required>
                    <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" class="form-control" id="password" required>
                <i class='bx bx-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <button class="btn btn-primary" type="submit">Login</button>

            <div class="register-link">
                <p>Don't have an account? 
                    <a href="#">Register</a>
                </p>
            </div>

        </form>
    </div>
</div> 
    
</body>
</html>