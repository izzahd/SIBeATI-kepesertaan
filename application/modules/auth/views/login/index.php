<div class="jumbotron" style="background-color:#092147;">
    <div class="container">
        <h1 style="color:#fff;">SIBeATI</h1>
        <h2><small style="color:#ddd;">Sistem Informasi Beasiswa Alumni Teknik Informatika ITS</small></h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-5 mx-auto mt-5">
            <h1 class="h2">Login</h1>
            <form action="<?= site_url('auth/login') ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username/NRP" required />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required />
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary w-100" value="Sign In" />
                    <p>Silakan <a href="<?php echo site_url('auth/register') ?>">register</a> jika belum punya akun.</p>
                </div>

            </form>
        </div>
    </div>
</div>