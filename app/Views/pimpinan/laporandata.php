<?= $this->extend('layout/layoutpimpinan'); ?>

<?= $this->section('content'); ?>
<!-- Content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Kepala Konten) -->
    <section class="content-header">
        <div class="container-fluid">
            <h2>Data penduduk</h2>
            <hr>
            <div class="row">
                <div class="col">
                    <form action="" method="POST">
                        <div class="input-group mr-3 my-3">
                            <input type="text" class="form-control" placeholder="Cari Orang" name="cari">
                            <button class="btn btn-outline-secondary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- / Akhir section header -->

    <!-- Main section (Kontent Utama) -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Penduduk Kecamatan Suka suka</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Usia</th>
                                        <th scope="col">Agama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                                    <?php foreach ($penduduk as $p): ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?= $p['tgl_lahir']; ?></td>
                                        <td><?= $p['jenkel']; ?></td>
                                        <td><?= $p['usia']; ?></td>
                                        <td><?= $p['agama']; ?></td>
                                        <td><?= $p['alamat']; ?></td>
                                        <td><a href="/pimpinan/detail/<?= $p['id']; ?>"
                                                class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <?= $pager->links('penduduk','page_penduduk') ?>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>