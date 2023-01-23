<?php 
	include("protect.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="img/icon.jpg" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<!-- CSS do projeto -->
	 <link href="css/curso_css.css" rel="stylesheet" >
    <title>OddCurso</title>
	<!-- script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>
	
	<!-- sidebar nav -->
	<body>
	 
       <div class="container-fluid">
	
		<div class="offcanvas offcanvas-start" id="mySidebar"> <!--data-bs-scroll = true /data-bs-backdrop=false -->
			<div class="offcanvas-header">
				<h2 class="col-11 text-center" style="color:#1ab2ff;text-shadow: 2px 1px #000000;border-bottom:1px dotted black">Menu</h2>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
			</div>
			
			<div class="offcanvas-body sideMenuList">
			   <ul class="list-unstyled">
			   <h3 class="text-center" style="color:#4dff88;text-shadow: 2px 1px #000000;">Módulo 1</h3>
			   <li><a href="pages-html/m1aula1.html" style="text-decoration: none;">Aula 1</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 2</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 3</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 4</a></li>
			   </ul>
			   
			   <ul class="list-unstyled">
			   <h3 class="text-center" style="color:#4dff88;text-shadow: 2px 1px #000000;">Módulo 2</h3>
			   <li><a href="#" style="text-decoration: none;">Aula 1</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 2</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 3</a></li>
			   <li><a href="#" style="text-decoration: none;">Aula 4</a></li>
			   <div class="container text-center">
			   <a href="loggout.php" style="text-decoration:none;">Loggout</a>
			   </div>
			   </ul>
			   
			</div>
			
			
			<div class="row text-center iconMcss">
							<div class="col-12" id="social-icons">
								<a href="#"><i class="bi bi-facebook"></i></a>
								<a href="#"><i class="bi bi-instagram"></i></a>
								<a href="#"><i class="bi bi-twitter"></i></a>
								<a href="#"><i class="bi bi-youtube"></i></a>
							</div>
			</div>
		</div>
		
		<div class="row" style="background-color:#f2f2f2;">
			<div class="col-6"><a class="btn" href="#" type="button" data-bs-target="#mySidebar" data-bs-toggle="offcanvas">
			<i class="bi bi-list" style="font-size:100px;"></i>
			</a>
			</div>
			<div class="col-6 text-end"><a href="index_curso.php"><img src="img/logo.jpg" class="btn pt-3 mt-2" alt="Logo" style="position:relative;top:30px;width:100px;height:100px;;float:right;"></a> 
		</div>
		
	</div>
	
	
	
	</div>
	
	 <!--footer --> 
	<div class="container-fluid mt-5 pt-5 bg-dark" style="position: fixed;left: 0;bottom: 0;width: 100%;">
	
		<div class="offcanvas offcanvas-bottom" id="mySidebar2"> <!--data-bs-scroll = true /data-bs-backdrop=false -->
			<div class="offcanvas-header bg-dark">
				<div class="col-12 text-center">
				<a href="#" type="button" class="text-reset" data-bs-dismiss="offcanvas">
					<i class="bi bi-arrow-bar-down mb-4" style="font-size:40px;color:#ffffff"></i>
				</a>
				</div>
			</div>
			
			<div class="offcanvas-body sideMenuList bg-dark">                                   
			   <div class="row">
					<div class="col-6 text-end" style="border-right:1px dotted white;">
								<div style="margin-right:60px;">
								<h4 style="color:#ffffff;">C o n t a t o</h4>
								<a href="#" style="text-decoration:none;"><p class="secondary-color">contato@email.com</p></a>
								</div>
					</div>
					
					<div class="col-6">
							<div id="social-icons" style="font-size:30px;margin-left:20px;">
								<a href="#"><i class="bi bi-facebook mx-4"></i></a>
								<a href="#"><i class="bi bi-instagram mx-4"></i></a>
								<a href="#"><i class="bi bi-twitter mx-4"></i></a>
								<a href="#"><i class="bi bi-youtube mx-4"></i></a>
							</div>
					</div>
			   </div>
			</div>
		</div>
		
		<div class="row " style="bg-dark">
			<div class="col-12 text-center"><a class="btn" href="#" type="button" data-bs-target="#mySidebar2" data-bs-toggle="offcanvas">
			<i class="bi bi-arrow-bar-up" style="font-size:40px;color:#ffffff;position:relative;bottom:30px;"></i>                           
			</a>
			</div>
			 
		</div>
		
		</div>
	<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	
  </body>
</html>