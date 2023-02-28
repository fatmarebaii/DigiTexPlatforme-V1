<?php
session_start();
?> 
<!DOCTYPE html>
<html>
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
                <a class="collapse-item" href="http://192.168.200.163/IsaDigitalTwinBuild/">DigitalTwin</a>
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
        <h1 class="h3 mb-2 text-gray-800">Modéle </h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">Gamme </h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered" id="ofTable" width="100%" cellspacing="0">
                                    <thead>
                <tr>
                    <th>Code opération</th>
                    <th>Désignation</th>
                    <th>Temps unitaire</th>
                    <th>Quantité par heure</th>
                </tr>
            </thead>
            <tbody>

<!-- CODE PHP POUR RECUPERER LA GAMME -->
            <script>
            // Récupère la valeur stockée dans le stockage local et affiche les détails correspondants
            var of = localStorage.getItem("of_num");
            document.cookie= "of"+ of;
            </script>
            <?php
            //$of=$_COOKIE['of'];
            //echo ($of);
            require_once 'config.php';
            $query3 = "SELECT DISTINCT `operation_code`,`designation`, `unit_time`, `qte_h`, `digitex`, `model` FROM p3_gamme;";
                $rsl3= $con->query($query3);
                $p3_gamme1 = [];
                while ($item3 = $rsl3->fetch_assoc())
                {
                    $p3_gamme1[] = $item3;
                }
                 $i=0;
                 while($i<count($p3_gamme1)){
                     //echo ("Détail du modéle : ".$p3_gamme1[$i]['model']);?>
                     <?php //if ($p3_gamme1[$i]['model']==$_SESSION['model']){?>
            <tr>
                <td><?php echo $p3_gamme1[$i]['operation_code'];?></td>
                <td><?php echo $p3_gamme1[$i]['designation'];?></td>
                <td><?php echo $p3_gamme1[$i]['unit_time'];?></td>
                <td><?php echo $p3_gamme1[$i]['qte_h'];
                    if($p3_gamme1[$i]['designation']!='Controler' || $p3_gamme1[$i]['model']!=$p3_gamme1[$i]['model']){$i++;} else {break;}}?></td>

            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Code opération</th>
                <th>Désignation</th>
                <th>Temps unitaire</th>
                <th>Quantité par heure</th>
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