<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="main">
    <div class="container">
        <div class="row mt-sm-4">
            <div class="col">
                <h2>Detail Penduduk</h2>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/profile/<?= $penduduk['foto']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $penduduk['nama']; ?></h5>
                                <p><b>Tanggal Lahir : </b><?= $penduduk['tgl_lahir']; ?></p>
                                <p><b>Jenis Kelamin : </b><?= $penduduk['jenkel']; ?></p>
                                <p><b>Usia : </b><?= $penduduk['usia']; ?></p>
                                <p><b>Agama : </b><?= $penduduk['agama']; ?></p>
                                <p><b>Alamat : </b><?= $penduduk['alamat']; ?></p>

                                <a href="/dashboard/edit/<?= $penduduk['id']; ?>" class="btn btn-primary">Edit</a>

                                <form action="/penduduk/delete/<?= $penduduk['id']; ?>" method="POST" class="d-inline">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    <a href="/dashboard/datapenduduk" class="btn btn-warning">Kembali</a>
                                </form>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection(); ?>