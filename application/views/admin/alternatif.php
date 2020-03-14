<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a s, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-2">
            <!-- <h6 href="#" class="btn btn-primary m-0 font-weight-bold text-light">Tambah Pengguna</h6> -->
            <a href="<?= base_url('alternatif/tambahAlternatif'); ?>" class="btn btn-primary btn-icon-split">
                <span class="icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center">
                        <tr>
                            <th>Nama Alternatif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td style="text-align: center">
                                <!-- <a href="" class="btn btn-success btn-icon-split">
                                    <span class="fas fa-edit"> Ubah</span>
                                </a> -->
                                <a href="" class="btn btn-success btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>

                                <a href="" class="btn btn-danger btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Lh heh</td>
                            <td style="text-align: center">
                                <!-- <a href="" class="btn btn-success btn-icon-split">
                                    <span class="fas fa-edit"> Ubah</span>
                                </a> -->
                                <a href="" class="btn btn-success btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-edit"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>
                                <a href="" class="btn btn-danger btn-icon-split">
                                    <span class="icon">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->