<!DOCTYPE html>
<html lang="en">
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
								if(isset($_GET['erro'])){
									if($_GET['Mess'] == 'erro'):
										alert("erro");
									endif;

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
										<input type="text" class="form-control ps-15 bg-transparent" name="crm" placeholder="CRM">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-15">
										<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
										<input type="password" class="form-control ps-15 bg-transparent" name="senha" placeholder="Senha">
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
							<div class="text-center">
								<p class="mt-15 mb-0">Não tem conta? <a href="register.html" class="text-warning ms-5">Registrar-se</a></p>
							</div>	
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
