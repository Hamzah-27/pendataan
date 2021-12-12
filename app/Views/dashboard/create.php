<?= $this->extend('layout/layout'); ?>

<?= $this->section('content'); ?>
<section class="main">
    <div class="container">

        <div class="row mt-sm-4">
            <h2>Insert data</h2>
            <div class="col mt-sm-3">
                <form action="/penduduk/save" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                autofocus name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date"
                                class="form-control <?= ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>"
                                name="tgl_lahir">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tgl_lahir'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jenkel" id="jenkel">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('tgl_lahir'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Usia</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('usia')) ? 'is-invalid' : ''; ?>"
                                name="usia">
                            <div class="invalid-feedback">
                                <?= $validation->getError('usia'); ?>
                            </div>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Agama</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" value="islam" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Islam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" value="kristen">
                                <label class="form-check-label" for="gridRadios2">
                                    Kristen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" value="hindu">
                                <label class="form-check-label" for="gridRadios3">
                                    Hindu
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" value="budha">
                                <label class="form-check-label" for="gridRadios3">
                                    Budha
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="agama" value="konghucu">
                                <label class="form-check-label" for="gridRadios3">
                                    Konghucu
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text"
                                class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                name="alamat">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="cover" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-2">
                            <img src="/profile/default.jpg" class="img-thumbnail img-preview">
                        </div>
                        <div class="col-sm-8">
                            <div class="input-group mb-3">
                                <input type="file"
                                    class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>"
                                    id="foto" name="foto" onchange="previewImg()">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>