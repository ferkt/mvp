<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/logo-letter.png">

    <title>Rhythm Admin - Dashboard  Advanced form elements </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="../css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/skin_color.css">

</head>
<body class="hold-transition light-skin sidebar-mini theme-success fixed">
	
<div class="wrapper">
	<div id="loader"></div>

	<header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="../../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../../images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../../images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>   
    <!-- Header Navbar -->
	<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i data-feather="align-left"></i>
			    </a>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">	
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
			  <i data-feather="bell"></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">

			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notificações</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Limpar tudo</a>
						</div>
					</div>
				</div>
			  </li>

			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">Ver todos</a>
			  </li>
			</ul>
		  </li>	
		  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
			  	<i data-feather="settings"></i>
			  </a>
          </li>
		  
	      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
				<div class="d-flex pt-5">
					<div class="text-end me-10">
						<p class="pt-5 fs-14 mb-0 fw-700 text-primary">Dr. Fernando Nasena</p>
						<small class="fs-10 mb-0 text-uppercase text-mute">Profissional</small>
					</div>
					<img src="../../images/avatar/nasena.jpg" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
				</div>
            </a>
            <ul class="dropdown-menu animated flipInX">
              <li class="user-body">
				 <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Perfil</a>
				 <a class="dropdown-item" href="#"><i class="ti-wallet text-muted me-2"></i>Minha carteira</a>
				 <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Configurações</a>
				 <div class="dropdown-divider"></div>
				 <a class="dropdown-item" href="#"><i class="ti-lock text-muted me-2"></i> Sair</a>
              </li>
            </ul>
          </li>	
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="help-bt">
			<a href="tel:108" class="d-flex align-items-center">
				<div class="bg-danger rounded10 h-50 w-50 l-h-50 text-center me-15">
					<i data-feather="mic"></i>
				</div>
				<h4 class="mb-0">Emergência<br>ajuda</h4>
			</a>
		</div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">			
				<li>
				  <a href="index2.html">
					<i data-feather="monitor"></i>
					<span>Painel</span>
				  </a>
				</li>
				<li>
				  <a href="#">
					<i data-feather="calendar"></i>
					<span>Compromissos</span>
				  </a>
				</li>
				<li>
					<a href="index3.html">
					  <i data-feather="activity"></i>
					  <span>Médico</span>
					</a>
				  </li>			
				<li class="treeview">
				  <a href="#">
					<i data-feather="users"></i>
					<span>Pacientes</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="../patients.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pacientes</a></li>
					<li><a href="../patient_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pacientes detalhes</a></li>
				  </ul>
				</li>														 	 	 	     
			  </ul>
		  </div>
		</div>
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Advanced Form Elements</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page">Advanced Form Elements</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
			  <div class="box">
				  
				<div class="box-header">
					<h4 class="box-title">Type options</h4>  
				</div>
				<div class="box-body">
					<div class="form-group row">
						<label class="col-form-label col-md-2">Datetime</label>
						<div class="col-md-10">
							<input class="form-control" type="datetime-local" name="datetime">
							<span class="form-text text-muted">Using <code>input type="datetime-local"</code> <code> type="datetime-local" is not supported in Firefox, Safari or Internet Explorer 12 (or earlier).</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Date</label>
						<div class="col-md-10">
							<input class="form-control" type="date" name="date">
							<span class="form-text text-muted">Using <code>input type="date"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Month</label>
						<div class="col-md-10">
							<input class="form-control" type="month" name="month">
							<span class="form-text text-muted">Using <code>input type="month"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Time</label>
						<div class="col-md-10">
							<input class="form-control" type="time" name="time">
							<span class="form-text text-muted">Using <code>input type="time"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Week</label>
						<div class="col-md-10">
							<input class="form-control" type="week" name="week">
							<span class="form-text text-muted">Using <code>input type="week"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Number</label>
						<div class="col-md-10">
							<input class="form-control" type="number" name="number">
							<span class="form-text text-muted">Using <code>input type="number"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Email</label>
						<div class="col-md-10">
							<input class="form-control" type="email" name="email">
							<span class="form-text text-muted">Using <code>input type="email"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">URL</label>
						<div class="col-md-10">
							<input class="form-control" type="url" name="url">
							<span class="form-text text-muted">Using <code>input type="url"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Search</label>
						<div class="col-md-10">
							<input class="form-control" type="search" name="search">
							<span class="form-text text-muted">Using <code>input type="search"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Tel</label>
						<div class="col-md-10">
							<input class="form-control" type="tel" name="tel">
							<span class="form-text text-muted">Using <code>input type="tel"</code></span>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-form-label col-md-2">Color</label>
						<div class="col-md-10">
							<input class="form-control" type="color" name="color">
							<span class="form-text text-muted">Using <code>input type="color"</code></span>
						</div>
					</div>				
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Input masks</h4>
				</div>
				<div class="box-body">
				  <!-- Date dd/mm/yyyy -->
				  <div class="form-group">
					<label class="form-label">Date masks:</label>
					<div class="row">
						<div class="col-6">
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
							</div>
							<!-- /.input group -->
						</div>
						<div class="col-6">
						  <!-- Date mm/dd/yyyy -->
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask>
							</div>
							<!-- /.input group -->
						</div>
					</div>
				  </div>
				  <!-- /.form group -->

				  <!-- phone mask -->
				  <div class="form-group">
					<label class="form-label">US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'mask':[ '(999) 999-9999']" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- phone mask -->
				  <div class="form-group">
					<label class="form-label">Intl US phone mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-phone"></i>
					  </div>
					  <input type="text" class="form-control"
							 data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- IP mask -->
				  <div class="form-group">
					<label class="form-label">IP mask:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-laptop"></i>
					  </div>
					  <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				</div>
				<!-- /.box-body -->					  
				<div class="box-header with-border">
				  <h4 class="box-title">Color & Time Picker</h4>
				</div>				  
				<div class="box-body">
				  <!-- Color Picker -->
				  <div class="form-group">
					<label class="form-label">Color picker:</label>
					<input type="text" class="form-control my-colorpicker1">
				  </div>
				  <!-- /.form group -->

				  <!-- Color Picker -->
				  <div class="form-group">
					<label class="form-label">Color picker with addon:</label>

					<div class="input-group my-colorpicker2">
					  <input type="text" class="form-control">

					  <div class="input-group-addon">
						<i class="ion ion-paintbucket"></i>
					  </div>
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- time Picker -->
				  <div class="bootstrap-timepicker">
					<div class="form-group">
					  <label class="form-label">Time picker:</label>

					  <div class="input-group">
						<input type="text" class="form-control timepicker">

						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					  <!-- /.input group -->
					</div>
					<!-- /.form group -->
					<div class="form-group">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
						<input type="text" class="form-control timepicker">
					  </div>
					  <!-- /.input group -->
					</div>
					<!-- /.form group -->
				  </div>
				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Date picker</h4>
				</div>
				<div class="box-body">
				  <!-- Date -->
				  <div class="form-group">
					<label class="form-label">Date:</label>

					<div class="input-group date">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="datepicker">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date range -->
				  <div class="form-group">
					<label class="form-label">Date range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservation">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date and time range -->
				  <div class="form-group">
					<label class="form-label">Date and time range:</label>

					<div class="input-group">
					  <div class="input-group-addon">
						<i class="fa fa-clock-o"></i>
					  </div>
					  <input type="text" class="form-control pull-right" id="reservationtime">
					</div>
					<!-- /.input group -->
				  </div>
				  <!-- /.form group -->

				  <!-- Date and time range -->
				  <div class="form-group">
					<label class="form-label">Date range button:</label>

					<div class="input-group">
					  <button type="button" class="btn btn-default pull-right" id="daterange-btn">
						<span>
						  <i class="fa fa-calendar"></i> Date range picker
						</span>
						<i class="fa fa-caret-down"></i>
					  </button>
					</div>
				  </div>
				  <!-- /.form group -->

				</div>
				<!-- /.box-body -->
				<div class="box-header with-border">
				  <h4 class="box-title">Select Elements</h4>
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					</ul>
				</div>
				<div class="box-body pb-0">
				  <div class="row">
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label class="form-label">Minimal</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label class="form-label">Disabled</label>
						<select class="form-control select2" disabled="disabled" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label class="form-label">Multiple</label>
						<select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
								style="width: 100%;">
						  <option>Alabama</option>
						  <option>Alaska</option>
						  <option>California</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-12">
					  <div class="form-group">
						<label class="form-label">Disabled Result</label>
						<select class="form-control select2" style="width: 100%;">
						  <option selected="selected">Alabama</option>
						  <option>Alaska</option>
						  <option disabled="disabled">California (disabled)</option>
						  <option>Delaware</option>
						  <option>Tennessee</option>
						  <option>Texas</option>
						  <option>Washington</option>
						</select>
					  </div>
					  <!-- /.form-group -->
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			  <!-- /.box -->

			<div class="box-header with-border">
				<h4 class="box-title">Queixa</h4>
			</div>
			<div class="box-body">
				<!-- Date dd/mm/yyyy -->
				<div class="form-group">
				<label class="form-label">Data:</label>
				<div class="row">
					<div class="col-md-12">
						<input class="form-control" type="date" name="date">
					</div>
				</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>

			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Revisão de Sistemas</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Tipo:</label>
					<div class="row">
						<div class="col-md-12">
								<select class="form-control select2" style="width: 100%;">
								<option selected="selected">Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								</select>
						</div>	
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>

			</div>

			<div class="box-header with-border">
				<h4 class="box-title">História da Moléstia</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>

			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Histórico de Doenças</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Medicações em uso</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Hospitalizações</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
						<label class="form-label">Tipo:</label>
						<div class="row">
							<div class="col-md-12">
									<select class="form-control select2" style="width: 100%;">
									<option selected="selected">Alabama</option>
									<option>Alaska</option>
									<option>California</option>
									<option>Delaware</option>
									<option>Tennessee</option>
									</select>
							</div>	
						</div>
				</div>
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Doenças Mentais</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Alergias, Imunização</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
						<label class="form-label">Tipo:</label>
						<div class="row">
							<div class="col-md-12">
									<select class="form-control select2" style="width: 100%;">
									<option selected="selected">Alabama</option>
									<option>Alaska</option>
									<option>California</option>
									<option>Delaware</option>
									<option>Tennessee</option>
									</select>
							</div>	
						</div>
				</div>
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Histórico Familiar</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			<div class="box-header with-border">
				<h4 class="box-title">Histórico Ocupacional, Hábitos e Estilos de vida</h4>
			</div>
			<div class="box-body">
				<div class="form-group">
						<label class="form-label">Tipo:</label>
						<div class="row">
							<div class="col-md-12">
									<select class="form-control select2" style="width: 100%;">
									<option selected="selected">Alabama</option>
									<option>Alaska</option>
									<option>California</option>
									<option>Delaware</option>
									<option>Tennessee</option>
									</select>
							</div>	
						</div>
				</div>
				<div class="form-group">
					<label class="form-label">Data:</label>
					<div class="row">
						<div class="col-md-12">
							<input class="form-control" type="date" name="date">
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="form-label">Descrição:</label>
					<div class="row">
						<div class="col-md-12">
						<textarea name="textarea" id="textarea" class="form-control" required="" placeholder="Texto da área de texto" _mstplaceholder="410475" aria-invalid="false" style="height: 66px;"></textarea>
						</div>
					</div>	
				</div>
			</div>

			</div>
			  
			</div>
			<!-- ./col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)"></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#"></a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">HubSaúde</a>. Todos os Direitos reservados.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel --
	<!-- Sidebar -->
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="../js/vendors.min.js"></script>
	<script src="../js/pages/chat-popup.js"></script>
    <script src="../../assets/icons/feather-icons/feather.min.js"></script>	
	<script src="../../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
	<script src="../../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
	<script src="../../assets/vendor_components/select2/dist/js/select2.full.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="../../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="../../assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="../../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<script src="../../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="../../assets/vendor_plugins/iCheck/icheck.min.js"></script>
	
	<!-- Rhythm Admin App -->
	<script src="../js/template.js"></script>
	
	<script src="../js/pages/advanced-form-element.js"></script>
	


</body>
</html>
