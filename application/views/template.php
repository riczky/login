<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>myPos</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf9156d7b2.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini <?=$this->uri->segment(1) == 'sale'? 'sidebar-collapse' : null?>">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=site_url('dashboard');?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Lgn</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Sistem<b> Login</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=ucfirst($this->fungsi->user_login()->username)?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=ucfirst($this->fungsi->user_login()->name)?>
                  <small><?=ucfirst($this->fungsi->user_login()->address)?>, 2019</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('auth/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == ''?'class="active"' : '' ?>>
          <a href="<?=site_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'supplier' ?'class="active"' : '' ?>>
          <a href="<?=site_url('supplier');?>">
            <i class="fa fa-truck"></i> <span>Suppliers</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'customer' ?'class="active"' : '' ?>>
          <a href="<?=site_url('customer');?>">
            <i class="fa fa-dashboard"></i> <span>Customers</span>
          </a>
        </li> 
       
        <li class="treeview <?=$this->uri->segment(1) == 'category' || $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == 'item' ?'active' : '' ?>">
          <a href="#">
            <i class="fa fa-archive"></i>
            <span>Products</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'category' ?'class="active"' : '' ?>><a href="<?=site_url('category');?>"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li <?=$this->uri->segment(1) == 'unit' ?'class="active"' : '' ?>><a href="<?=site_url('unit');?>"><i class="fa fa-circle-o"></i> Units</a></li>
            <li <?=$this->uri->segment(1) == 'item' ?'class="active"' : '' ?>><a href="<?=site_url('item');?>"><i class="fa fa-circle-o"></i> Item</a></li>
          </ul>
        </li>

        <li class="treeview <?=$this->uri->segment(1) == 'stock' || $this->uri->segment(1) == 'sale' ? 'active' : ''?>">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?=$this->uri->segment(1) == 'sale' ? 'class="active"' : ''?>><a href="<?=site_url('sale')?>"><i class="fa fa-circle-o"></i> Sales</a></li>
            <li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'in' ? 'class="active"' : ''?>>
            <a href="<?=site_url('stock/in')?>"><i class="fa fa-circle-o"></i> Stock In</a></li>
            <li <?=$this->uri->segment(1) == 'stock' && $this->uri->segment(2) == 'out' ? 'class="active"' : ''?>><a href="<?=site_url('stock/out')?>"><i class="fa fa-circle-o"></i> Stock Out</a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Sales</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Stocks</a></li>
          </ul>
        </li>
        <?php if ($this->fungsi->user_login()->level  == 1) {?>
        <li class="header">SETTINGS</li>
        <li><a href="<?=site_url('user');?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <?php }?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- jQuery 3 -->
<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?php echo $contents ?>

       <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Riczky</a>.</strong> All rights
    reserved.
  </footer>

 </div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

<!-- Data table -->
<script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    $('#table1').DataTable()
  })
</script>

<!-- Sidebarmenu -->
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>
