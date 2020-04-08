<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->

    <p class="mb-2"><strong>Fuzzy Solusi Ideal Positif <em>(Fuzzy Positive Ideal Solution)</em> A<sup>*</sup></strong></p>
    <p class="mb-2"><strong>Fuzzy Solusi Ideal Negatif <em>(Fuzzy Negative Ideal Solution)</em> A<sup>-</sup></strong></p>
    <div class="card shadow mb-4">
        <div class="card-body">
            <!--panggil bobot kriteria up-->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <label for="">Matriks Keputusan <em>Fuzzy</em> 1</label>
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
                        <!-- $no = 1; -->

                        <tr>
                            <!-- <td><?= $alter['nama_alternatif']; ?></td> -->
                            <!-- <?php foreach ($k1fpis[$alter['id_alternatif']] as $k => $v) : ?>
                                    <td>
                                        <?= $v; ?>
                                    </td>
                                <?php endforeach; ?> -->
                        </tr>


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