<?php

?>

  <? if($_SESSION['USER_DIV'] == 'S') { ?>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Components:</h6>
        <a class="collapse-item" href="/vivicenter/buttons.html">Buttons</a>
        <a class="collapse-item" href="/vivicenter/cards.html">Cards</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-wrench"></i>
      <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Utilities:</h6>
        <a class="collapse-item" href="/vivicenter/utilities-color.html">Colors</a>
        <a class="collapse-item" href="/vivicenter/utilities-border.html">Borders</a>
        <a class="collapse-item" href="/vivicenter/utilities-animation.html">Animations</a>
        <a class="collapse-item" href="/vivicenter/utilities-other.html">Other</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Addons
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Login Screens:</h6>
        <a class="collapse-item" href="/vivicenter/login.html">Login</a>
        <a class="collapse-item" href="/vivicenter/register.html">Register</a>
        <a class="collapse-item" href="/vivicenter/forgot-password.html">Forgot Password</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>
        <a class="collapse-item" href="/vivicenter/404.html">404 Page</a>
        <a class="collapse-item" href="/vivicenter/blank.html">Blank Page</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li>
  <? } ?>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSystems" aria-expanded="true" aria-controls="collapseSystems">
      <i class="fas fa-fw fa-folder"></i>
      <span>시스템관리</span>
    </a>
    <div id="collapseSystems" class="collapse" aria-labelledby="headingSystems" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">메뉴 및 권한</h6>
        <a class="collapse-item" href="/vivicenter/admin/system/menu/menu_manage.php">메뉴관리</a>
        <a class="collapse-item" href="/vivicenter/admin/system/auth/auth_manage.php">권한관리</a>
        <div class="collapse-divider"></div>
        <h6 class="collapse-header">사용자관리</h6>
        <a class="collapse-item" href="/vivicenter/admin/system/user/user_manage.php">사용자관리</a>
        <h6 class="collapse-header">업무관리</h6>
        <a class="collapse-item" href="/vivicenter/admin/biz/ad/ad_manage.php">광고관리</a>
      </div>
    </div>
</li>

<iframe id="sessionIframe" src="index.php" style="width:1px; height:1px; position:absolute;"></iframe>
<script>
	setInterval("reloadIFrame();", 30000);

	function reloadIFrame() {
		$("#sessionIframe").attr("src",$("#sessionIframe").attr("src"));
	}
</script>