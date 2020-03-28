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
        <div class="card-body">

            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Alternatif</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <td style="text-align: center"><?= $no++; ?></td>
                                <td><?= $alter['nama_alternatif']; ?></td>
                                <!-- <?php foreach ($nilai_kriteria[$alter->id_alternatif] as $k => $v) : ?>
                                    <td><?= $v; ?></td>
                                <?php endforeach; ?> -->
                                <td>FOrest</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td>0.09, 0.23, 0.7</td>
                                <td style="text-align: center">

                                    <a href="" class="btn btn-success btn-icon-split">
                                        <span class="icon">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Ubah</span>
                                    </a>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->