<?php
	include('../php/banco.php');
?>
<!DOCTYPE html>
<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/logo-letter.png">

    <title>Hub Saúde - Médico Login</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
     
  </head>

<body class="theme-success">
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center g-0">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="box box-body">
						<div class="content-top-agile pb-0 pt-20">
							<?php
								if(isset($_GET['mess'])){
									if($_GET['mess'] == 'erro'){
										echo '<div class="alert alert-danger alert-dismissible">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar" _mstaria-label="73632"></button>
											<h4><i class="icon fa fa-ban"></i><font _mstmutation="1" _msthash="4280822" _msttexthash="81081"> Alerta!</font></h4><font _mstmutation="1" _msthash="3811340" _msttexthash="20575217"> Cpf/Crm ou Senha errados! </font></div>';
									}
									if($_GET['mess'] == 'logout'){
										echo '<div class="alert alert-warning alert-dismissible">
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar" _mstaria-label="73632"></button>
										<h4><i class="icon fa fa-warning"></i><font _mstmutation="1" _msthash="4281238" _msttexthash="81081"> Alerta!</font></h4><font _mstmutation="1" _msthash="3811626" _msttexthash="2817633">Você está deslogado! </font></div>';
									}

								}	
							?>
							<h2 class="text-primary">Médico Login</h2>	
							<p class="mb-0">Faça login para continuar no Hub Saúde.</p>						
						</div>
						<div class="p-40">
							<form action="../php/loginPro.php" method="POST" name="form1">
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
										<input type="text" class="form-control ps-15 bg-transparent" name="CPF" placeholder="cpf">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" name="Senha" placeholder="Senha">
									</div>
								</div>
								  <div class="row">
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info w-p100 mt-15">ENTRAR</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>	
						</div>
					</div>								

				</div>
			</div>
		</div>
	</section>	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	
	<!-- Rhythm front end -->
	<script src="js/template.js"></script>
	
	
	
</body>
</html>
