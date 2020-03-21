<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md-12">

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Nama Alternatif</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="alternatif" name="alternatif" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="vege" class="col-sm-4 col-form-label">Vegetasi Area Genangan Embung</label>
                <div class="col-sm-5">
                    <select class="form-control" id="vege" name="vege">
                        <option value="" selected>Pilih Nilai Interval</option>
                        <option value="1">Hutan (forest)</option>
                        <option value="2">Semak belukar (shrubs)</option>
                        <option value="3">Ladang/tegalan (field)</option>
                        <option value="4">Sawah tadah hujan (rainfed)</option>
                        <option value="5">Perkampungan (rural area)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="vol" class="col-sm-4 col-form-label">Volume Material Timbunan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="vol" name="vol" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Luas Daerah yang akan dibebaskan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="password" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-4 col-form-label">Volume Tampungan Efektif</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="role" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="institute" class="col-sm-4 col-form-label">Lama Operasi</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="institute" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="institute" class="col-sm-4 col-form-label">Harga Air per m<sup>3</sup></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="institute" value="">
                </div>
            </div>


            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Akses Jalan menuju Lokasi</label>
                <div class="col-sm-5">
                    <select class="form-control" id="gender" name="gender" value="gender">
                        <option>Tersedia jalan sampai ke lokasi (Pavement road)</option>
                        <option>Jalan tanah/makadam (Ground road)</option>
                        <option>Jalan setapak (Footpath)</option>
                        <option>Tidak tersedia jalan (No road)</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8 col-lg-9 d-flex justify-content-between">

                    <a href="<?= base_url('alternatif'); ?>" class="btn btn-info btn-icon-split">
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