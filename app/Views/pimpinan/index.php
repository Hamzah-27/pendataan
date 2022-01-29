<?= $this->extend('layout/layoutpimpinandark'); ?>

<?= $this->section('content'); ?>
<!-- Content wrapper. contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Kepala Konten) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>Welcome to dashboard</h1>
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- / Akhir section header -->

    <!-- Main section (Kontent Utama) -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $totalpenduduk; ?>&nbsp;<sup style="font-size: 20px">Jiwa</sup></h3>

                            <p>Total Penduduk</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $lakilaki; ?>&nbsp;<sup style="font-size: 20px">Jiwa</sup></h3>

                            <p>Penduduk laki-laki</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/pimpinan/lapdatalaki/" class="small-box-footer">More
                            info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6 text-white">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?= $perempuan; ?>&nbsp;<sup style="font-size: 20px">Jiwa</sup></h3>

                            <p>Penduduk Perempuan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/pimpinan/lapdataperempuan" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>
<!-- / Akhir content wrapper -->
<?= $this->endSection(); ?>