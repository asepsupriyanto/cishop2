<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <?= form_open('login', ['method' => 'POST']) ?>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan email aktif anda', 'required' => 'true']) ?>
                            <?= form_error('email') ?>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Password</label>
                            <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password minimal 8 karakter', 'required' => true]) ?>
                            <?= form_error('password') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>