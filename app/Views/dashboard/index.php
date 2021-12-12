<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="main">
    <div class="container">
        <div class="row mt-sm-4">
            <h2>Welcome to dashboard</h2>
            <div class="col-sm-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/penduduk.png" class="card-img-top" alt="penduduk">
                    <div class="card-body">
                        <h4>Jumlah penduduk yang terdata</h4>
                        <p class="card-text"><b><?= $totalpenduduk; ?> Orang</b></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/pendudukpria.png" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <h4>Penduduk berjenis kelamin laki-laki</h4>
                        <p class="card-text"><b><?= $lakilaki; ?> Orang</b></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/pendudukwanita.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4>Penduduk berjenis kelamin perempuan</h4>
                        <p class="card-text"><b><?= $perempuan; ?> Orang</b></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-sm-3">
            <div class="col">
                <center>
                    <img src="/img/background.png" alt="background" width="300">
                </center>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>