<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?><em> (Fuzzy Number)</em></h1>

    <div class="row">
        <div class="col-md-10">

            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label"><?= $bobot['nama_kriteria']; ?></label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot1']; ?>">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot2']; ?>">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="<?= $bobot['nilai_bobot3']; ?>">
                </div>
            </div>

            <!-- <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Volume Material Timbunan</label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Luas Daerah yang akan dibebaskan</label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Volume Tampungan Efektif</label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Lama Operasi</label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Harga Air per m<sup>3</sup></label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Akses Jalan menuju Lokasi</label>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="1" name="" value="">
                </div>
            </div> -->


            <div class="form-group row">
                <div class="col-md-8 col-lg-10 d-flex justify-content-between">

                    <a href="<?= base_url('nilaibobotkriteria'); ?>" class="btn btn-info btn-icon-split">
                        <span class="icon">
                            <i class="fas fa-fw fa-chevron-circle-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>
                    <a href="" class="btn btn-success btn-icon-split" type="submit">
                        <span class="icon">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </a>
                </div>
            </div>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->