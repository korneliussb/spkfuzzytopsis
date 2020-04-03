<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
    <p class="mb-2">Matriks Keputusan Fuzzy dan Nilai Bobot tiap Kriteria <em>(Fuzzy Decision Matrix and Weight Value of Criteria)</em></p>


    <div class="card shadow mb-4">
        <div class="card-body">


            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Alternatif</th>
                            <th>K1</th>
                            <th>K2</th>
                            <th>K3</th>
                            <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php  // $no = 1;
                        foreach ($alternatif as $alter) { ?>
                            <tr>
                                <!-- <td style="text-align: center"><?= $no++; ?></td> -->
                                <td><?= $alter['nama_alternatif']; ?></td>

                                <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>(
                                        <?= $v; ?>,
                                        )
                                    </td>
                                <?php endforeach; ?>

                                <!-- <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>(
                                        <?= $v; ?>,
                                        <?php foreach ($nilaifuzzy2[$alter['id_alternatif']] as $k2 => $v2) : ?>
                                            <?= $v2; ?>,
                                        <?php endforeach; ?>
                                        <?php foreach ($nilaifuzzy3[$alter['id_alternatif']] as $k3 => $v3) : ?>
                                            <?= $v3; ?>
                                        <?php endforeach; ?>
                                        )
                                    </td>
                                <?php endforeach; ?> -->


                                <!-- <?php foreach ($nilaifuzzy[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>(
                                        <?= $v; ?>,
                                        <?= $v; ?>,
                                        <?= $v; ?>
                                        )
                                    </td>
                                <?php endforeach; ?> -->

                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot style="text-align: center">
                        <tr>
                            <!-- <th>No</th> -->
                            <th>Alternatif</th>
                            <th>Vegetasi Area Genangan Embung</th>
                            <th>Volume Material Timbunan</th>
                            <th>Luas daerah yang akan dibebaskan</th>
                            <th>Volume Tampungan Efektif</th>
                            <th>Lama Operasi</th>
                            <th>Harga air per m<sup>3</sup></th>
                            <th>Akses Jalan menuju Lokasi</th>

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