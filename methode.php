<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard ISAMOD by Advanty X</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
	<style>
		table {
			border-collapse: collapse;
		}

		table, th, td {
			border: 1px solid black;
		}

		th, td {
			padding: 10px;
		}

		th {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #f5f5f5;
			cursor: pointer;
		}
	</style>
</head>
<body>
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://advantryx.com/">
        <div class="sidebar-brand-text mx-3">  <img src="img/LogoAdvantryXpng.png" alt="Logo" style="width:40mm;height:10mm"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Departements
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Atelier de Production</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tableau de bord Atelier</h6>
                <a class="collapse-item" href="http://localhost/digitex_isa/dashbord_atelier/ISA201/DashbordISA201.html">ISA201</a>
                <a class="collapse-item" href="http://localhost/digitex_isa/dashbord_atelier/ISA203/DashbordISA203.html">ISA203</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Visualisation 3D</h6>
                <a class="collapse-item" href="http://192.168.200.163/IsaDigitalTwinBuild/" target="_blank">DigitalTwin</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="methode.php">
            <i class="fas fa-fw fa-cog"></i>
            <span>Méthode</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Maintenance</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="Implantation.php">Implentation</a>
                <a class="collapse-item" href="charts.html">Inventaire</a>
                <a class="collapse-item" href="charts.html">Maintenance Curative</a>
                <a class="collapse-item" href="charts.html">Maintenance Préventive</a>
                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="ressourceHumaine.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Ressources Humaines</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Méthodes </h1>
            <div>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
                    </a>   
                </div>
            </div>
        </div>
</div>
<!-- Content Row -->
<div class="row">
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ORDRE DE FABRICATION </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="ofTable" width="100%" cellspacing="0">
                                    <script src="scriptmethode.js"></script>
            <thead>
            <tr>
                <th>Réf de l'OF</th>
                <th>Client</th>
                <th>Atelier</th>
                <th>Statut de l'OF </th>
                <th>Quantité </th>
                <th>Réf Modèle</th>
            </tr>
            </thead>
            <tbody>
                <?php
            require_once 'config.php';
            $sql="SELECT * FROM `p1_of`";
$of = mysqli_query($con, $sql);

// Récupération des données de la table p1_of avec des Ofs Distincts
$sqlof = "SELECT DISTINCT p1_of.of_num , client, assembly_shop , of_state , p3_gamme.model FROM `p1_of` LEFT JOIN `p3_gamme` ON p1_of.of_num= p3_gamme.of_num;";
$p1_of = mysqli_query($con, $sqlof);

// Récupération des données de la table p2_packet
$sqlpacket = "SELECT DISTINCT`pack_num`, `of_num`,`qte` FROM `p2_packet`";
$p2_packet = mysqli_query($con, $sqlpacket);

// Stockage des données dans un tableau associatif
if (mysqli_num_rows($of) > 0) {
    while($rowp_of_all = mysqli_fetch_assoc($of)) {
        $of_all[] = $rowp_of_all;
    }
}

if (mysqli_num_rows($p1_of) > 0) {
    while($rowp1_of = mysqli_fetch_assoc($p1_of)) {
        $of_distinct[] = $rowp1_of;
    }
}

if (mysqli_num_rows($p2_packet) > 0) {
    while($rowp2_packet = mysqli_fetch_assoc($p2_packet)) {
        $pack[] = $rowp2_packet;
    }
}

$of=[];
$client=[];
$atelier=[];
$state=[];
$qte=[];
$model=[];
$gammeof=[];

for ($i=0; $i<count($of_distinct); $i++){
    $of[$i]=$of_distinct[$i]['of_num'];
    //$_SESSION['of_num']= $of[$i];
    $client[$i]=$of_distinct[$i]['client'];
    $atelier[$i]=$of_distinct[$i]['assembly_shop'];
    $state[$i]=$of_distinct[$i]['of_state'];
    $model[$i]=$of_distinct[$i]['model'];
    //$_SESSION['model']=$model[$i];

    //Atelier (si un of se fait sur plus d'un seul atelier)
    for($j=0; $j<count($of_all); $j++){
        if ($of_distinct[$i]['of_num']==$of_all[$j]['of_num'] && $of_distinct[$i]['assembly_shop']!=$of_all[$j]['assembly_shop']){

            $atelier[$i]=$atelier[$i].$of_all[$j]['assembly_shop'];}
    }

    //Quantité de chaque OF
    $qte[$i]=0;
    for($l=0; $l<count($pack); $l++){
        if ($of_distinct[$i]['of_num']==$pack[$l]['of_num']){
            $qte[$i]+=$pack[$l]['qte'];
        }
    }
            ?>
                <tr>
                <td id="of_num"><a href="ofpack.php" onclick="enregistrerOf()"> <?php echo ($of[$i]);?> </a></td>
                <script> function enregistrerOF(){var of = document.getElementById("of").value;
                localStorage.setItem("of_num", of);}
                </script>
                <td><?php echo ($client[$i]);?></td>
                <td><?php echo ($atelier[$i]);?></td>
                <td><?php echo ($state[$i]);?></td>
                <td><?php echo ($qte[$i]);?></td>
                <td> <a href="gamme.php"> <?php echo ($model[$i]);}?> </a></td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Réf de l'OF</th>
                <th>Client</th>
                <th>Atelier</th>
                <th>Statut de l'OF </th>
                <th>Quantité </th>
                <th>Réf Modèle</th>
            </tr>               
            </tfoot>
        </table>
        </div>
    </div>
 </div>
</div>
<!-- /.container-fluid -->
</div>
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; DigiTex By Advanty X 2023 </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>
</body>
</html>