<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> <em>(Fuzzy Number)</em></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a s, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p> -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4 col-lg-10">
        <?php if ($this->session->flashdata()) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data alternatif <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Kriteria</th>
                            <th>Nilai Bobot</th>
                            <th style="text-align: center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kriteria 1</td>
                            <td>0.55, 0.78, 0.66</td>
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