<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="main">
    <div class="container mt-md-3">
        <h2>Data penduduk</h2>
        <form action="" method="POST">
            <div class="input-group mr-3 my-3">
                <input type="text" class="form-control" placeholder="Cari Orang" name="cari">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </div>
        </form>
        <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
        <?php endif; ?>
        <table class="table mt-md-3 table-hover">
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
                    <td><a href="/dashboard/detail/<?= $p['id']; ?>" class="btn btn-primary">Detail</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $pager->links('penduduk','page_penduduk') ?>
    </div>
</section>
<?= $this->endSection(); ?>