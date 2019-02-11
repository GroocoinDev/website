<?php
	include("inc/check_admin.php");
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
      
      <? include("inc/menu_bar.php"); ?>
        
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
        
        <? include("inc/top_bar.php"); ?>
          
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Rewards</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">40,000 GROO</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Locking</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">215,000 GROO</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-coins fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Confirmed</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">27</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bidding</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Approved Ads on ViVi Screen</h6>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Title</th>
                          <th>Summary</th>
                          <th>Ad Start Date</th>
                          <th>Ad End Date</th>
                          <th>Locked GROO</th>
                            <th>Advertiser</th>
                            <th>CPM</th>
                            <th>CPC</th>
                            <th>CPA</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>#1</th>
                          <th>아모레퍼시픽 화장품 금주 50% 할인</th>
                          <th>창립 20주년을 맞아 아모레퍼시픽 전 제품을 50% 할인행사를 진행 ...</th>
                          <th>2019.02.08</th>
                          <th>2019.03.31</th>
                          <th>2,000,000 GROO</th>
                            <th>0x57a9897b990e7a030a ...</th>
                            <th>1 GROO</th>
                            <th>5 GROO</th>
                            <th>25 GROO</th>
                        </tr>
                          <tr>
                          <th>#2</th>
                          <th>아모레퍼시픽 화장품 금주 50% 할인</th>
                          <th>창립 20주년을 맞아 아모레퍼시픽 전 제품을 50% 할인행사를 진행 ...</th>
                          <th>2019.02.08</th>
                          <th>2019.03.31</th>
                          <th>1,800,000 GROO</th>
                            <th>0x57a9897b990e7a030a ...</th>
                            <th>1 GROO</th>
                            <th>10 GROO</th>
                            <th></th>
                        </tr>
                          <tr>
                          <th>#3</th>
                          <th>아모레퍼시픽 화장품 금주 50% 할인</th>
                          <th>창립 20주년을 맞아 아모레퍼시픽 전 제품을 50% 할인행사를 진행 ...</th>
                          <th>2019.02.08</th>
                          <th>2019.03.31</th>
                          <th>1,000,000 GROO</th>
                            <th>0x57a9897b990e7a030a ...</th>
                            <th></th>
                            <th>20 GROO</th>
                            <th>50 GROO</th>
                        </tr>
                          <tr>
                          <th>#4</th>
                          <th>아모레퍼시픽 화장품 금주 50% 할인</th>
                          <th>창립 20주년을 맞아 아모레퍼시픽 전 제품을 50% 할인행사를 진행 ...</th>
                          <th>2019.02.08</th>
                          <th>2019.03.31</th>
                          <th>500,000 GROO</th>
                            <th>0x57a9897b990e7a030a ...</th>
                            <th>2 GROO</th>
                            <th>10 GROO</th>
                            <th>100 GROO</th>
                        </tr>
                          <tr>
                          <th>#5</th>
                          <th>아모레퍼시픽 화장품 금주 50% 할인</th>
                          <th>창립 20주년을 맞아 아모레퍼시픽 전 제품을 50% 할인행사를 진행 ...</th>
                          <th>2019.02.08</th>
                          <th>2019.03.31</th>
                          <th>300,000 GROO</th>
                            <th>0x57a9897b990e7a030a ...</th>
                            <th>1 GROO</th>
                            <th>3 GROO</th>
                            <th>5 GROO</th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        
      <? include("inc/bottom_bar.php"); ?>
        
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
