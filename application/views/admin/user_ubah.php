<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-md-8">

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label"><em>Email</em></label>
                <div class="col-sm-7">
                    <input type="text" readonly class="form-control" id="email" name="email" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="full_name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="full_name" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-3 col-form-label"><em>Username</em></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="username" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label"><em>Password</em></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="password" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-3 col-form-label">Hak Akses</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="role" value="">
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                    <select class="form-control" id="gender" name="gender" value="gender">
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

            </div>

            <div class="form-group row">
                <label for="institute" class="col-sm-3 col-form-label">Instansi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="name" name="institute" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8 col-lg-10 d-flex justify-content-between">
                    <!-- <div class="col-sm-3">

                    </div> -->
                    <a href="<?= base_url('user'); ?>" class="btn btn-info btn-icon-split">
                        <span class="icon">
                            <i class="fas fa-fw fa-chevron-circle-left"></i>
                        </span>
                        <span class="text">Kembali</span>
                    </a>

                    <button name="ubahUser" type="submit" class="btn btn-success btn-icon-split">
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