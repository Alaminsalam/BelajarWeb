<?php
include "config.php";
$jumlah = mysqli_query($db, "SELECT SUM(Aceh)  AS total_jumlah FROM case_active ");
$total = mysqli_fetch_array($jumlah);

$jumlah1 = mysqli_query($db, "SELECT SUM(Bali)  AS total_jumlah1 FROM case_active ");
$total1 = mysqli_fetch_array($jumlah1);

$jumlah2 = mysqli_query($db, "SELECT SUM(Banten)  AS total_jumlah2 FROM case_active ");
$total2 = mysqli_fetch_array($jumlah2);

$jumlah3 = mysqli_query($db, "SELECT SUM(Babel)  AS total_jumlah3 FROM case_active ");
$total3 = mysqli_fetch_array($jumlah3);

$jumlah4 = mysqli_query($db, "SELECT SUM(Bengkulu)  AS total_jumlah4 FROM case_active ");
$total4 = mysqli_fetch_array($jumlah4);

$jumlah5 = mysqli_query($db, "SELECT SUM(DIY)  AS total_jumlah5 FROM case_active ");
$total5 = mysqli_fetch_array($jumlah5);

$jumlah6 = mysqli_query($db, "SELECT SUM(Jakarta)  AS total_jumlah6 FROM case_active ");
$total6 = mysqli_fetch_array($jumlah6);

$jumlah7 = mysqli_query($db, "SELECT SUM(Jambi)  AS total_jumlah7 FROM case_active ");
$total7 = mysqli_fetch_array($jumlah7);

$jumlah8 = mysqli_query($db, "SELECT SUM(Jabar)  AS total_jumlah8 FROM case_active ");
$total8 = mysqli_fetch_array($jumlah8);

$jumlah9 = mysqli_query($db, "SELECT SUM(Jateng)  AS total_jumlah9 FROM case_active ");
$total9 = mysqli_fetch_array($jumlah9);

$jumlah10 = mysqli_query($db, "SELECT SUM(Jatim)  AS total_jumlah10 FROM case_active ");
$total10 = mysqli_fetch_array($jumlah10);

$jumlah11 = mysqli_query($db, "SELECT SUM(Kalbar)  AS total_jumlah11 FROM case_active ");
$total11 = mysqli_fetch_array($jumlah11);

$jumlah12 = mysqli_query($db, "SELECT SUM(Kaltim)  AS total_jumlah12 FROM case_active ");
$total12 = mysqli_fetch_array($jumlah12);

$jumlah13 = mysqli_query($db, "SELECT SUM(Kalteng)  AS total_jumlah13 FROM case_active ");
$total13 = mysqli_fetch_array($jumlah13);

$jumlah14 = mysqli_query($db, "SELECT SUM(Kalsel)  AS total_jumlah14 FROM case_active ");
$total14 = mysqli_fetch_array($jumlah14);

$jumlah15 = mysqli_query($db, "SELECT SUM(Kaltara)  AS total_jumlah15 FROM case_active ");
$total15 = mysqli_fetch_array($jumlah15);

$jumlah16 = mysqli_query($db, "SELECT SUM(Kep_Riau)  AS total_jumlah16 FROM case_active ");
$total16 = mysqli_fetch_array($jumlah16);

$jumlah17 = mysqli_query($db, "SELECT SUM(NTB)  AS total_jumlah17 FROM case_active ");
$total17 = mysqli_fetch_array($jumlah17);

$jumlah18 = mysqli_query($db, "SELECT SUM(Sumsel)  AS total_jumlah18 FROM case_active ");
$total18 = mysqli_fetch_array($jumlah18);

$jumlah19 = mysqli_query($db, "SELECT SUM(Sumbar)  AS total_jumlah19 FROM case_active ");
$total19 = mysqli_fetch_array($jumlah19);

$jumlah20 = mysqli_query($db, "SELECT SUM(Sulut)  AS total_jumlah20 FROM case_active ");
$total20 = mysqli_fetch_array($jumlah20);

$jumlah21 = mysqli_query($db, "SELECT SUM(Sumut)  AS total_jumlah21 FROM case_active ");
$total21 = mysqli_fetch_array($jumlah21);

$jumlah22 = mysqli_query($db, "SELECT SUM(Sultra)  AS total_jumlah22 FROM case_active ");
$total22 = mysqli_fetch_array($jumlah22);

$jumlah23 = mysqli_query($db, "SELECT SUM(Sulsel)  AS total_jumlah23 FROM case_active ");
$total23 = mysqli_fetch_array($jumlah23);

$jumlah24 = mysqli_query($db, "SELECT SUM(Sulteng)  AS total_jumlah24 FROM case_active ");
$total24 = mysqli_fetch_array($jumlah24);

$jumlah25 = mysqli_query($db, "SELECT SUM(Riau)  AS total_jumlah25 FROM case_active ");
$total25 = mysqli_fetch_array($jumlah25);

$jumlah26 = mysqli_query($db, "SELECT SUM(Malut)  AS total_jumlah26 FROM case_active ");
$total26 = mysqli_fetch_array($jumlah26);

$jumlah27 = mysqli_query($db, "SELECT SUM(Maluku)  AS total_jumlah27 FROM case_active ");
$total27 = mysqli_fetch_array($jumlah27);

$jumlah28 = mysqli_query($db, "SELECT SUM(Papbar)  AS total_jumlah28 FROM case_active ");
$total28 = mysqli_fetch_array($jumlah28);

$jumlah29 = mysqli_query($db, "SELECT SUM(Papua)  AS total_jumlah29 FROM case_active ");
$total29 = mysqli_fetch_array($jumlah29);

$jumlah30 = mysqli_query($db, "SELECT SUM(Sulbar)  AS total_jumlah30 FROM case_active ");
$total30 = mysqli_fetch_array($jumlah30);

$jumlah31 = mysqli_query($db, "SELECT SUM(NTT)  AS total_jumlah31 FROM case_active ");
$total31 = mysqli_fetch_array($jumlah31);

$jumlah32 = mysqli_query($db, "SELECT SUM(Gorontalo)  AS total_jumlah32 FROM case_active ");
$total32 = mysqli_fetch_array($jumlah32);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasus Aktif Covid-19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />


</head>

<body>
    <?php include "navbar.php" ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    <strong>Total Penyebaran Kasus Positif COVID-19 di Indonesia Tahun 2020</strong> <a href="#" class="alert-link"></a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <ul>
                            <li>ACEH : <?= number_format($total['total_jumlah']); ?> Orang</li>
                            <li>BALI : <?= number_format($total1['total_jumlah1']); ?> Orang</li>
                            <li>BANTEN : <?= number_format($total2['total_jumlah2']); ?> Orang</li>
                            <li>BABEL : <?= number_format($total3['total_jumlah3']); ?> Orang</li>
                            <li>BENGKULU : <?= number_format($total4['total_jumlah4']); ?> Orang</li>
                            <li>DIY : <?= number_format($total5['total_jumlah5']); ?> Orang</li>
                            <li>JAKARTA : <?= number_format($total6['total_jumlah6']); ?> Orang</li>
                            <li>JAMBI : <?= number_format($total7['total_jumlah7']); ?> Orang</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <ul>
                            <li>JABAR : <?= number_format($total8['total_jumlah8']); ?> Orang</li>
                            <li>JATENG : <?= number_format($total9['total_jumlah9']); ?> Orang</li>
                            <li>JATIM : <?= number_format($total10['total_jumlah10']); ?> Orang</li>
                            <li>KALBAR : <?= number_format($total11['total_jumlah11']); ?> Orang</li>
                            <li>KALTIM : <?= number_format($total12['total_jumlah12']); ?> Orang</li>
                            <li>KALTENG : <?= number_format($total13['total_jumlah13']); ?> Orang</li>
                            <li>KALSEL : <?= number_format($total14['total_jumlah14']); ?> Orang</li>
                            <li>KALTARA : <?= number_format($total15['total_jumlah15']); ?> Orang</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <ul>

                            <li>KEPRI : <?= number_format($total16['total_jumlah16']); ?> Orang</li>
                            <li>NTB : <?= number_format($total17['total_jumlah17']); ?> Orang</li>
                            <li>SUMSEL : <?= number_format($total18['total_jumlah18']); ?> Orang</li>
                            <li>SUMBAR : <?= number_format($total19['total_jumlah19']); ?> Orang</li>
                            <li>SULUT : <?= number_format($total20['total_jumlah20']); ?> Orang</li>
                            <li>SUMUT : <?= number_format($total21['total_jumlah21']); ?> Orang</li>
                            <li>SULTRA : <?= number_format($total22['total_jumlah22']); ?> Orang</li>
                            <li>SULSEL : <?= number_format($total23['total_jumlah23']); ?> Orang</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <ul>
                            <li>SULTENG : <?= number_format($total24['total_jumlah24']); ?> Orang</li>
                            <li>RIAU : <?= number_format($total25['total_jumlah25']); ?> Orang</li>
                            <li>MALUT : <?= number_format($total26['total_jumlah26']); ?> Orang</li>
                            <li>MALUKU : <?= number_format($total27['total_jumlah27']); ?> Orang</li>
                            <li>PAPBAR : <?= number_format($total28['total_jumlah28']); ?> Orang</li>
                            <li>PAPUA : <?= number_format($total29['total_jumlah29']); ?> Orang</li>
                            <li>SULBAR : <?= number_format($total30['total_jumlah30']); ?> Orang</li>
                            <li>NTT : <?= number_format($total31['total_jumlah31']); ?> Orang</li>
                            <li>GORONTALO : <?= number_format($total32['total_jumlah32']); ?> Orang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Dari Tanggal</td>
                    <td> <input type="date" name="dari_tgl" class="form-control">
                    </td>
                    <td>Sampai Tanggal</td>
                    <td> <input type="date" name="smp_tgl" class="form-control">
                    </td>
                    <td><input type="submit" class="btn btn-primary" name="submit" value="Filter"></td>
                </tr>
            </table>
        </form>
        <br>
        <?php
        if (isset($_POST['submit'])) {
            $tgl = $_POST['dari_tgl'];
            $smp_tgl = $_POST['smp_tgl'];
            echo "Dari Tanggal : " . $tgl . " Sampai Tanggal : " . $smp_tgl;
        }

        ?>
        <div class="card-body table-responsive">
            <table id="datatablesSimple" class="table table-striped table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>ACEH</th>
                        <th>BALI</th>
                        <th>BANTEN</th>
                        <th>BABEL</th>
                        <th>BENGKULU</th>
                        <th>YOGYAKARTA</th>
                        <th>JAKARTA</th>
                        <th>JAMBI</th>
                        <th>JABAR</th>
                        <th>JATENG</th>
                        <th>JATIM</th>
                        <th>KALBAR</th>
                        <th>KALTIM</th>
                        <th>KALTENG</th>
                        <th>KALSEL</th>
                        <th>KALTARA</th>
                        <th>KEPRI</th>
                        <th>NTB</th>
                        <th>SUMSEL</th>
                        <th>SUMBAR</th>
                        <th>SULUT</th>
                        <th>SUMUT</th>
                        <th>SULTRA</th>
                        <th>SULSEL</th>
                        <th>SULTENG</th>
                        <th>RIAU</th>
                        <th>MALUT</th>
                        <th>MALUKU</th>
                        <th>PAPBAR</th>
                        <th>PAPUA</th>
                        <th>SULBAR</th>
                        <th>NTT</th>
                        <th>GORONTALO</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;

                    if (isset($_POST['submit'])) {
                        $dari_tgl = $_POST['dari_tgl'];
                        $smp_tgl = $_POST['smp_tgl'];

                        $filter = mysqli_query($db, "SELECT * FROM case_active WHERE Kasus_Aktif BETWEEN '$dari_tgl' AND '$smp_tgl' ");
                    } else {
                        $filter = mysqli_query($db, "SELECT * FROM case_active");
                    }

                    while ($row = $filter->fetch_array()) {
                    ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['Kasus_Aktif']; ?></td>
                            <td><?php echo $row['Aceh']; ?></td>
                            <td><?php echo $row['Bali']; ?></td>
                            <td><?php echo $row['Banten']; ?></td>
                            <td><?php echo $row['Babel']; ?></td>
                            <td><?php echo $row['Bengkulu']; ?></td>
                            <td><?php echo $row['DIY']; ?> </td>
                            <td><?php echo $row['Jakarta']; ?> </td>
                            <td><?php echo $row['Jambi']; ?></td>
                            <td><?php echo $row['Jabar']; ?> </td>
                            <td><?php echo $row['Jateng']; ?></td>
                            <td><?php echo $row['Jatim']; ?></td>
                            <td><?php echo $row['Kalbar']; ?> </td>
                            <td><?php echo $row['Kaltim']; ?></td>
                            <td><?php echo $row['Kalteng']; ?></td>
                            <td><?php echo $row['Kalsel']; ?></td>
                            <td><?php echo $row['Kaltara']; ?></td>
                            <td><?php echo $row['Kep_Riau']; ?></td>
                            <td><?php echo $row['NTB']; ?></td>
                            <td><?php echo $row['Sumsel']; ?> </td>
                            <td><?php echo $row['Sumbar']; ?></td>
                            <td><?php echo $row['Sulut']; ?> </td>
                            <td><?php echo $row['Sumut']; ?></td>
                            <td><?php echo $row['Sultra']; ?></td>
                            <td><?php echo $row['Sulsel']; ?></td>
                            <td><?php echo $row['Sulteng']; ?> </td>
                            <td><?php echo $row['Riau']; ?> </td>
                            <td><?php echo $row['Malut']; ?></td>
                            <td><?php echo $row['Maluku']; ?></td>
                            <td><?php echo $row['Papbar']; ?></td>
                            <td><?php echo $row['Papua']; ?></td>
                            <td><?php echo $row['Sulbar']; ?></td>
                            <td><?php echo $row['NTT']; ?></td>
                            <td><?php echo $row['Gorontalo']; ?></td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple" class="table table-striped table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>NO</th>
                        <th>Total Kasus Positif</th>
                        <th>Kasus Aktif</th>
                        <th>Total Recovered</th>
                        <th>Kasus Harian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    // inner join 2 tabel
                    $sql = mysqli_query($db, "SELECT total_positif_case.Aceh AS ac , case_active.Aceh AS ach , total_recovered_case.Aceh AS ache , daily_cases.Aceh AS ace FROM (((total_positif_case INNER JOIN case_active ON total_positif_case.Total_Kasus = case_active.Kasus_Aktif) INNER JOIN total_recovered_case ON total_positif_case.Total_Kasus = total_recovered_case.Sembuh) INNER JOIN daily_cases ON total_positif_case.Total_Kasus = daily_cases.Kasus_Harian)");

                    while ($rows = $sql->fetch_array()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $rows['ac']; ?></td>
                            <td><?= $rows['ach']; ?></td>
                            <td><?= $rows['ache']; ?></td>
                            <td><?= $rows['ace']; ?></td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="jquery.js"></script>
    <script src="datatables-simple-demo.js"></script>
    <!-- <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>


</body>

</html>