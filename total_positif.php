<?php
include "config.php";
if (isset($_POST['submit'])) {
    $dari_tgl = $_POST['dari_tgl'];
    $smp_tgl = $_POST['smp_tgl'];

    $jumlah = mysqli_query($db, "SELECT SUM(Aceh)  AS total_jumlah FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total = mysqli_fetch_array($jumlah);

    $jumlah1 = mysqli_query($db, "SELECT SUM(Bali)  AS total_jumlah1 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total1 = mysqli_fetch_array($jumlah1);

    $jumlah2 = mysqli_query($db, "SELECT SUM(Banten)  AS total_jumlah2 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total2 = mysqli_fetch_array($jumlah2);

    $jumlah3 = mysqli_query($db, "SELECT SUM(Babel)  AS total_jumlah3 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total3 = mysqli_fetch_array($jumlah3);

    $jumlah4 = mysqli_query($db, "SELECT SUM(Bengkulu)  AS total_jumlah4 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total4 = mysqli_fetch_array($jumlah4);

    $jumlah5 = mysqli_query($db, "SELECT SUM(DIY)  AS total_jumlah5 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total5 = mysqli_fetch_array($jumlah5);

    $jumlah6 = mysqli_query($db, "SELECT SUM(Jakarta)  AS total_jumlah6 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total6 = mysqli_fetch_array($jumlah6);

    $jumlah7 = mysqli_query($db, "SELECT SUM(Jambi)  AS total_jumlah7 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total7 = mysqli_fetch_array($jumlah7);

    $jumlah8 = mysqli_query($db, "SELECT SUM(Jabar)  AS total_jumlah8 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total8 = mysqli_fetch_array($jumlah8);

    $jumlah9 = mysqli_query($db, "SELECT SUM(Jateng)  AS total_jumlah9 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total9 = mysqli_fetch_array($jumlah9);

    $jumlah10 = mysqli_query($db, "SELECT SUM(Jatim)  AS total_jumlah10 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total10 = mysqli_fetch_array($jumlah10);

    $jumlah11 = mysqli_query($db, "SELECT SUM(Kalbar)  AS total_jumlah11 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total11 = mysqli_fetch_array($jumlah11);

    $jumlah12 = mysqli_query($db, "SELECT SUM(Kaltim)  AS total_jumlah12 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total12 = mysqli_fetch_array($jumlah12);

    $jumlah13 = mysqli_query($db, "SELECT SUM(Kalteng)  AS total_jumlah13 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total13 = mysqli_fetch_array($jumlah13);

    $jumlah14 = mysqli_query($db, "SELECT SUM(Kalsel)  AS total_jumlah14 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total14 = mysqli_fetch_array($jumlah14);

    $jumlah15 = mysqli_query($db, "SELECT SUM(Kaltara)  AS total_jumlah15 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total15 = mysqli_fetch_array($jumlah15);

    $jumlah16 = mysqli_query($db, "SELECT SUM(Kep_Riau)  AS total_jumlah16 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total16 = mysqli_fetch_array($jumlah16);

    $jumlah17 = mysqli_query($db, "SELECT SUM(NTB)  AS total_jumlah17 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total17 = mysqli_fetch_array($jumlah17);

    $jumlah18 = mysqli_query($db, "SELECT SUM(Sumsel)  AS total_jumlah18 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total18 = mysqli_fetch_array($jumlah18);

    $jumlah19 = mysqli_query($db, "SELECT SUM(Sumbar)  AS total_jumlah19 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total19 = mysqli_fetch_array($jumlah19);

    $jumlah20 = mysqli_query($db, "SELECT SUM(Sulut)  AS total_jumlah20 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total20 = mysqli_fetch_array($jumlah20);

    $jumlah21 = mysqli_query($db, "SELECT SUM(Sumut)  AS total_jumlah21 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total21 = mysqli_fetch_array($jumlah21);

    $jumlah22 = mysqli_query($db, "SELECT SUM(Sultra)  AS total_jumlah22 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total22 = mysqli_fetch_array($jumlah22);

    $jumlah23 = mysqli_query($db, "SELECT SUM(Sulsel)  AS total_jumlah23 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total23 = mysqli_fetch_array($jumlah23);

    $jumlah24 = mysqli_query($db, "SELECT SUM(Sulteng)  AS total_jumlah24 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total24 = mysqli_fetch_array($jumlah24);

    $jumlah25 = mysqli_query($db, "SELECT SUM(Riau)  AS total_jumlah25 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total25 = mysqli_fetch_array($jumlah25);

    $jumlah26 = mysqli_query($db, "SELECT SUM(Malut)  AS total_jumlah26 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total26 = mysqli_fetch_array($jumlah26);

    $jumlah27 = mysqli_query($db, "SELECT SUM(Maluku)  AS total_jumlah27 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total27 = mysqli_fetch_array($jumlah27);

    $jumlah28 = mysqli_query($db, "SELECT SUM(Papbar)  AS total_jumlah28 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total28 = mysqli_fetch_array($jumlah28);

    $jumlah29 = mysqli_query($db, "SELECT SUM(Papua)  AS total_jumlah29 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total29 = mysqli_fetch_array($jumlah29);

    $jumlah30 = mysqli_query($db, "SELECT SUM(Sulbar)  AS total_jumlah30 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total30 = mysqli_fetch_array($jumlah30);

    $jumlah31 = mysqli_query($db, "SELECT SUM(NTT)  AS total_jumlah31 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl'");
    $total31 = mysqli_fetch_array($jumlah31);

    $jumlah32 = mysqli_query($db, "SELECT SUM(Gorontalo)  AS total_jumlah32 FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
    $total32 = mysqli_fetch_array($jumlah32);
} else {
    $jumlah = mysqli_query($db, "SELECT SUM(Aceh)  AS total_jumlah FROM total_positif_case ");
    $total = mysqli_fetch_array($jumlah);

    $jumlah1 = mysqli_query($db, "SELECT SUM(Bali)  AS total_jumlah1 FROM total_positif_case ");
    $total1 = mysqli_fetch_array($jumlah1);

    $jumlah2 = mysqli_query($db, "SELECT SUM(Banten)  AS total_jumlah2 FROM total_positif_case ");
    $total2 = mysqli_fetch_array($jumlah2);

    $jumlah3 = mysqli_query($db, "SELECT SUM(Babel)  AS total_jumlah3 FROM total_positif_case ");
    $total3 = mysqli_fetch_array($jumlah3);

    $jumlah4 = mysqli_query($db, "SELECT SUM(Bengkulu)  AS total_jumlah4 FROM total_positif_case ");
    $total4 = mysqli_fetch_array($jumlah4);

    $jumlah5 = mysqli_query($db, "SELECT SUM(DIY)  AS total_jumlah5 FROM total_positif_case ");
    $total5 = mysqli_fetch_array($jumlah5);

    $jumlah6 = mysqli_query($db, "SELECT SUM(Jakarta)  AS total_jumlah6 FROM total_positif_case ");
    $total6 = mysqli_fetch_array($jumlah6);

    $jumlah7 = mysqli_query($db, "SELECT SUM(Jambi)  AS total_jumlah7 FROM total_positif_case ");
    $total7 = mysqli_fetch_array($jumlah7);

    $jumlah8 = mysqli_query($db, "SELECT SUM(Jabar)  AS total_jumlah8 FROM total_positif_case ");
    $total8 = mysqli_fetch_array($jumlah8);

    $jumlah9 = mysqli_query($db, "SELECT SUM(Jateng)  AS total_jumlah9 FROM total_positif_case ");
    $total9 = mysqli_fetch_array($jumlah9);

    $jumlah10 = mysqli_query($db, "SELECT SUM(Jatim)  AS total_jumlah10 FROM total_positif_case ");
    $total10 = mysqli_fetch_array($jumlah10);

    $jumlah11 = mysqli_query($db, "SELECT SUM(Kalbar)  AS total_jumlah11 FROM total_positif_case ");
    $total11 = mysqli_fetch_array($jumlah11);

    $jumlah12 = mysqli_query($db, "SELECT SUM(Kaltim)  AS total_jumlah12 FROM total_positif_case ");
    $total12 = mysqli_fetch_array($jumlah12);

    $jumlah13 = mysqli_query($db, "SELECT SUM(Kalteng)  AS total_jumlah13 FROM total_positif_case ");
    $total13 = mysqli_fetch_array($jumlah13);

    $jumlah14 = mysqli_query($db, "SELECT SUM(Kalsel)  AS total_jumlah14 FROM total_positif_case ");
    $total14 = mysqli_fetch_array($jumlah14);

    $jumlah15 = mysqli_query($db, "SELECT SUM(Kaltara)  AS total_jumlah15 FROM total_positif_case ");
    $total15 = mysqli_fetch_array($jumlah15);

    $jumlah16 = mysqli_query($db, "SELECT SUM(Kep_Riau)  AS total_jumlah16 FROM total_positif_case ");
    $total16 = mysqli_fetch_array($jumlah16);

    $jumlah17 = mysqli_query($db, "SELECT SUM(NTB)  AS total_jumlah17 FROM total_positif_case ");
    $total17 = mysqli_fetch_array($jumlah17);

    $jumlah18 = mysqli_query($db, "SELECT SUM(Sumsel)  AS total_jumlah18 FROM total_positif_case ");
    $total18 = mysqli_fetch_array($jumlah18);

    $jumlah19 = mysqli_query($db, "SELECT SUM(Sumbar)  AS total_jumlah19 FROM total_positif_case ");
    $total19 = mysqli_fetch_array($jumlah19);

    $jumlah20 = mysqli_query($db, "SELECT SUM(Sulut)  AS total_jumlah20 FROM total_positif_case ");
    $total20 = mysqli_fetch_array($jumlah20);

    $jumlah21 = mysqli_query($db, "SELECT SUM(Sumut)  AS total_jumlah21 FROM total_positif_case ");
    $total21 = mysqli_fetch_array($jumlah21);

    $jumlah22 = mysqli_query($db, "SELECT SUM(Sultra)  AS total_jumlah22 FROM total_positif_case ");
    $total22 = mysqli_fetch_array($jumlah22);

    $jumlah23 = mysqli_query($db, "SELECT SUM(Sulsel)  AS total_jumlah23 FROM total_positif_case ");
    $total23 = mysqli_fetch_array($jumlah23);

    $jumlah24 = mysqli_query($db, "SELECT SUM(Sulteng)  AS total_jumlah24 FROM total_positif_case ");
    $total24 = mysqli_fetch_array($jumlah24);

    $jumlah25 = mysqli_query($db, "SELECT SUM(Riau)  AS total_jumlah25 FROM total_positif_case ");
    $total25 = mysqli_fetch_array($jumlah25);

    $jumlah26 = mysqli_query($db, "SELECT SUM(Malut)  AS total_jumlah26 FROM total_positif_case ");
    $total26 = mysqli_fetch_array($jumlah26);

    $jumlah27 = mysqli_query($db, "SELECT SUM(Maluku)  AS total_jumlah27 FROM total_positif_case ");
    $total27 = mysqli_fetch_array($jumlah27);

    $jumlah28 = mysqli_query($db, "SELECT SUM(Papbar)  AS total_jumlah28 FROM total_positif_case ");
    $total28 = mysqli_fetch_array($jumlah28);

    $jumlah29 = mysqli_query($db, "SELECT SUM(Papua)  AS total_jumlah29 FROM total_positif_case ");
    $total29 = mysqli_fetch_array($jumlah29);

    $jumlah30 = mysqli_query($db, "SELECT SUM(Sulbar)  AS total_jumlah30 FROM total_positif_case ");
    $total30 = mysqli_fetch_array($jumlah30);

    $jumlah31 = mysqli_query($db, "SELECT SUM(NTT)  AS total_jumlah31 FROM total_positif_case ");
    $total31 = mysqli_fetch_array($jumlah31);

    $jumlah32 = mysqli_query($db, "SELECT SUM(Gorontalo)  AS total_jumlah32 FROM total_positif_case ");
    $total32 = mysqli_fetch_array($jumlah32);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Covid-19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="chart.js"></script>

</head>

<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <strong>Jumlah Total Kasus Positif COVID-19 di Indonesia pada Maret Sampai Oktober Tahun 2020</strong> <a href="#" class="alert-link"></a>
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
        <?php
        if (isset($_POST['submit'])) {
            $tgl = $_POST['dari_tgl'];
            $smp_tgl = $_POST['smp_tgl'];
            echo "Dari Tanggal : " . $tgl . " Sampai Tanggal : " . $smp_tgl;
        }

        ?>
        <br>
        <div style="width: 1000px;margin: 100px ;">
            <canvas id="myChart"></canvas>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $tgl = $_POST['dari_tgl'];
            $smp_tgl = $_POST['smp_tgl'];
            echo "Dari Tanggal : " . $tgl . " Sampai Tanggal : " . $smp_tgl;
        }

        ?>
        <div class="card-body table-responsive">
            <table id="datatablesSimple" class="table table-striped table-hover">
                <thead class="table-success text-center">
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

                        $filter = mysqli_query($db, "SELECT * FROM total_positif_case WHERE Total_Kasus BETWEEN '$dari_tgl' AND '$smp_tgl' ");
                    } else {
                        $filter = mysqli_query($db, "SELECT * FROM total_positif_case");
                    }

                    while ($row = $filter->fetch_array()) {
                    ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['Total_Kasus']; ?></td>
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
    </div>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["ACEH", "BALI", "BANTEN", "BABEL", "BENGKULU", "YOGYAKARTA", "JAKARTA", "JAMBI", "JABAR", "JATENG", "JATIM", "KALBAR", "KALTIM", "KALTENG", "KALSEL", "KALTARA", "KEPRI", "NTB", "SUMSEL", "SUMBAR", "SULUT", "SUMUT", "SULTRA", "SULSEL", "SULTENG", "RIAU", "MALUT", "MALUKU", "PAPBAR", "PAPUA", "SULBAR", "NTT", "GORONTALO"],
                datasets: [{
                    label: 'Total Positif',
                    data: [
                        <?php echo $total['total_jumlah']; ?>,
                        <?php echo $total1['total_jumlah1']; ?>,
                        <?php echo $total2['total_jumlah2']; ?>,
                        <?php echo $total3['total_jumlah3']; ?>,
                        <?php echo $total4['total_jumlah4']; ?>,
                        <?php echo $total5['total_jumlah5']; ?>,
                        <?php echo $total6['total_jumlah6']; ?>,
                        <?php echo $total7['total_jumlah7']; ?>,
                        <?php echo $total8['total_jumlah8']; ?>,
                        <?php echo $total9['total_jumlah9']; ?>,
                        <?php echo $total10['total_jumlah10']; ?>,
                        <?php echo $total11['total_jumlah11']; ?>,
                        <?php echo $total12['total_jumlah12']; ?>,
                        <?php echo $total13['total_jumlah13']; ?>,
                        <?php echo $total14['total_jumlah14']; ?>,
                        <?php echo $total15['total_jumlah15']; ?>,
                        <?php echo $total16['total_jumlah16']; ?>,
                        <?php echo $total17['total_jumlah17']; ?>,
                        <?php echo $total18['total_jumlah18']; ?>,
                        <?php echo $total19['total_jumlah19']; ?>,
                        <?php echo $total20['total_jumlah20']; ?>,
                        <?php echo $total21['total_jumlah21']; ?>,
                        <?php echo $total22['total_jumlah22']; ?>,
                        <?php echo $total23['total_jumlah23']; ?>,
                        <?php echo $total24['total_jumlah24']; ?>,
                        <?php echo $total25['total_jumlah25']; ?>,
                        <?php echo $total26['total_jumlah26']; ?>,
                        <?php echo $total27['total_jumlah27']; ?>,
                        <?php echo $total28['total_jumlah28']; ?>,
                        <?php echo $total29['total_jumlah29']; ?>,
                        <?php echo $total30['total_jumlah30']; ?>,
                        <?php echo $total31['total_jumlah31']; ?>,
                        <?php echo $total32['total_jumlah32']; ?>

                    ],
                    borderColor: [
                        'rgba(255,99,132,1)'

                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="datatables-simple-demo.js"></script>
    <!-- <script src="node_modules/datatables.net/js/jquery.dataTables.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>


</body>

</html>