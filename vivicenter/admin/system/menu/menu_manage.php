<?php
	include("../../../inc/check_admin.php");
	include("../../../inc/db_conn.php");

	if(!isset($_REQUEST['MENU_ID'])) {
		// 메뉴 목록 조회
		$sql = "SELECT SM.MENU_ID
                     , SM.MENU_CODE
                     , SM.MENU_NAME
                     , SM.MENU_URL
                     , SM.PRIOR_MENU_ID
                     , SM.USE_YN
                FROM TB_SYS_MENU SM
                WHERE 1=1
                ";

                if(isset($_REQUEST['SEARCH_TEXT'])) {
                    $sql = $sql . " AND (SM.MENU_URL LIKE '%". $_REQUEST['SEARCH_TEXT'] ."%' OR
                                            SM.MENU_NAME LIKE '%". $_REQUEST['SEARCH_TEXT'] ."%'
                                            )";
                }

        $sql = $sql. " ";

				// echo $sql;
		$result=mysqli_query($db,$sql);
	} else {
		// 메뉴 상세 조회
		$sql = "SELECT SM.MENU_ID
                     , SM.MENU_CODE
                     , SM.MENU_NAME
                     , SM.MENU_URL
                     , SM.PRIOR_MENU_ID
                     , SM.USE_YN
                FROM TB_SYS_MENU SM
                WHERE SM.MENU_ID = '". $_REQUEST['MENU_ID'] ."'
                ";

		$result=mysqli_query($db,$sql);
		$menuInfo = mysqli_fetch_array($result);
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ViVi Center</title>

    <!-- Custom fonts for this template-->
    <link href="/vivicenter/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/vivicenter/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/vivicenter/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ViVi Center</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      
      <? include("../../../inc/menu_bar.php"); ?>
        
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
        
        <? include("../../../inc/top_bar.php"); ?>
          
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

      <!-- Footer -->
        
      <? include("../../../inc/bottom_bar.php"); ?>
        
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="/vivicenter/vendor/jquery/jquery.min.js"></script>
  <script src="/vivicenter/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vivicenter/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/vivicenter/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vivicenter/vendor/chart.js/Chart.min.js"></script>
  <script src="/vivicenter/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/vivicenter/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/vivicenter/js/demo/chart-area-demo.js"></script>
  <script src="/vivicenter/js/demo/chart-pie-demo.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>