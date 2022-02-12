<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Registrasi
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']) ?>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                            <?= form_error('name') ?>
                        </div>
                    </div>

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

                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true]) ?>
                            <?= form_error('password_confirmation') ?>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>