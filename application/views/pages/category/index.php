<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Kategori </span>
                    <a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-secondary">Tambah</a>
                    <div class="float-right">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" name="keyword" id="" class="form-control form-control-sm text-center" placeholder="Cari">
                                <div class="input-group-append">
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eraser"></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($content as $row) : ?>
                                <tr>
                                    <td>1</td>
                                    <td><?= $row->title; ?></td>
                                    <td><?= $row->slug; ?></td>
                                    <td>
                                        <form action="#">
                                            <a href="">
                                                <button class="btn btn-sm">
                                                    <i class="fas fa-edit text-info"></i>
                                                </button>
                                            </a>
                                            <button class="btn btn-sm" type="submit" onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <?= $pagination; ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>