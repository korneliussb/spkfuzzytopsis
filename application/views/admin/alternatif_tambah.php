<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md-12">

            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Nama Alternatif</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="alternatif" name="alternatif" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="k1" class="col-sm-4 col-form-label">Vegetasi Area Genangan Embung <em>(Benefit)</em></label>
                <div class="col-sm-5">
                    <select class="form-control" id="k1" name="k1">
                        <option value="" selected>Pilih Nilai Kriteria</option>
                        <option value="1">Hutan (forest)</option>
                        <option value="2">Semak belukar (shrubs)</option>
                        <option value="3">Ladang/tegalan (field)</option>
                        <option value="4">Sawah tadah hujan (rainfed)</option>
                        <option value="5">Perkampungan (rural area)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="k2" class="col-sm-4 col-form-label">Volume Material Timbunan<em>(Cost)</em></label>
                <div class="col-sm-5">
                    <select class="form-control" id="k2" name="k2">
                        <option value="" selected>Pilih Nilai Interval</option>
                        <option value="1">160.000 &le; &Chi; &lt; 200.000 m&sup3;</option>
                        <option value="2">120.000 &le; &Chi; &lt; 160.000 m&sup3;</option>
                        <option value="3">80.000 &le; &Chi; &lt; 40.000 m&sup3;</option>
                        <option value="4">40.000 &le; &Chi; &lt; 80.000 m&sup3;</option>
                        <option value="5">&Chi; &lt; 40.000 m&sup3;</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="vol" name="vol" value=""> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Luas Daerah yang akan dibebaskan <em>(Cost)</em></label>
                <div class="col-sm-5">
                    <select name="k3" id="k3" class="form-control">
                        <option value="0" selected>Pilih Nilai Interval</option>
                        <option value="1">&Chi; &ge; 7,5 Ha</option>
                        <option value="2">6,0 &le; &Chi; &lt; 7,5 Ha</option>
                        <option value="3">4,5 &le; &Chi; &lt; 6,0 Ha</option>
                        <option value="4">3,0 &le; &Chi; &lt; 4,5 Ha</option>
                        <option value="5">1,5 &le; &Chi; &lt; 3,0 Ha</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="name" name="password" value=""> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-4 col-form-label">Volume Tampungan Efektif <em>(Benefit)</em></label>
                <div class="col-sm-5">
                    <select name="k4" id="k4" class="form-control">
                        <option value="0" selected>Pilih Nilai Interval</option>
                        <option value="1">&Chi; &ge; 1.500.000 m&sup3;</option>
                        <option value="2">750.000 &le; &Chi; &lt; 1.500.000 m&sup3;</option>
                        <option value="3">500.000 &le; &Chi; &lt; 750.000 m&sup3;</option>
                        <option value="4">250.000 &le; &Chi; &lt; 500.000 m&sup3;</option>
                        <option value="5">&Chi; &lt; 250.000 m&sup3;</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="name" name="role" value=""> -->
                </div>
            </div>

            <div class="form-group row">
                <label for="k5" class="col-sm-4 col-form-label">Lama Operasi <em>(Benefit)</em></label>
                <div class="col-sm-5">
                    <select name="k5" id="k5" class="form-control">
                        <option value="0" selected>Pilih Nilai Interval</option>
                        <option value="1">&Chi; &ge; 100 hari</option>
                        <option value="2">80 &le; &Chi; &lt; 100 hari</option>
                        <option value="3">60 &le; &Chi; &lt; 80 hari</option>
                        <option value="4">40 &le; &Chi; &lt; 60 hari</option>
                        <option value="5">&Chi; &lt; 40 hari</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="name" name="institute" value=""> -->
                </div>
            </div>
            <div class="form-group row">
                <label for="k6" class="col-sm-4 col-form-label">Harga Air per m<sup>3</sup><em> (Cost)</em></label>
                <div class="col-sm-5">
                    <select name="k6" id="k6" class="form-control">
                        <option value="0" selected>Pilih Nilai Interval</option>
                        <option value="1">&Chi; &ge; Rp40.000</option>
                        <option value="2">Rp30.000 &le; &Chi; &lt; Rp40.000</option>
                        <option value="3">Rp20.000 &le; &Chi; &lt; Rp30.000</option>
                        <option value="4">Rp10.000 &le; &Chi; &lt; Rp20.000</option>
                        <option value="5">&Chi; &lt; Rp10.000</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="name" name="institute" value=""> -->
                </div>
            </div>


            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Akses Jalan menuju Lokasi <em>(Benefit)</em></label>
                <div class="col-sm-5">
                    <select class="form-control" id="k7" name="k7" value="">
                        <option value="0" selected>Pilih Nilai Kriteria</option>
                        <option value="1">Tersedia jalan sampai ke lokasi (Pavement road)</option>
                        <option value="2">Jalan tanah/makadam (Ground road)</option>
                        <option value="3">Jalan setapak (Footpath)</option>
                        <option value="4">Tidak tersedia jalan (No road)</option>
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

                    <button name="" type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                    <!-- <a href="" class="btn btn-success btn-icon-split" type="submit">
                        <span class="icon">
                            <i class="fas fa-fw fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </a> -->
                </div>
            </div>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->