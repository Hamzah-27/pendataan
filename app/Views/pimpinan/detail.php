<?= $this->extend('layout/layoutpimpinan'); ?>

<?= $this->section('content'); ?>
<!-- Content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Kepala Kontent) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Detail Penduduk</h2>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- / Akhir section header -->

    <!-- Main section (Konten Utama) -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-sm-2">
                <div class="col">
                    <div class="card mb-3" style="max-width: 750px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/profile/<?= $penduduk['foto']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3><?= $penduduk['nama']; ?></h3>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>Tanggal Lahir :
                                        </b><?= $penduduk['tgl_lahir']; ?>
                                    </li>
                                    <li class="list-group-item"><b>Jenis Kelamin : </b><?= $penduduk['jenkel']; ?>
                                    </li>
                                    <li class="list-group-item"><b>Usia : </b><?= $penduduk['usia']; ?></li>
                                    <li class="list-group-item"><b>Agama : </b><?= $penduduk['agama']; ?></li>
                                    <li class="list-group-item"><b>Alamat : </b><?= $penduduk['alamat']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>