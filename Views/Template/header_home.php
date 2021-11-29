
<!DOCTYPE html>
<html lang="en">
<head>
	<title>home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Assets/tienda/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assets/tienda/css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
    <input type="hidden" value="0" id="v_calor">	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
                <div class="container-menu-desktop" id="menu" style=" background-color: #E4FDF7">
			<!-- Topbar -->
                        <div class="top-bar" style="height: 25px; background-color: #ECBE00;">
				<div class=" flex-sb-m  container">
                                    <?php if($data['valor'] == "0"){  ?>
                                    <div class="left-top-bar">
                                            <button type="button" style="background-color: #ECBE00;color: white;" onclick="abrir()">Admin</button>
					</div>
                                    <?php }else if($data['valor'] == "1"){ ?>
                                    <div class="left-top-bar">
                                            <li><a class="dropdown-item" href="<?php base_url();?>Home">Salir</a></li>
					</div>
                                    <?php } ?>
                                    
					

					<div class=" flex-w h-full">              
                                            <a style="color: white"> Instituto Educativo Departamental San Miguel</a>
					</div>
				</div>
			</div>

                        <div class="wrap-menu-desktop" style="background-color: #E4FDF7; border-bottom: 2px solid #ECBE00" >
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						
                                            <h1 style="color: #065F09"><strong>I.E.D. SAN MIGUEL</strong></h1>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
                                            <ul class="main-menu" >
							<li >
                                                           
                                                            <a   id="inicio" style="color: #065F09;font-size: 18px"  href="<?php base_url();?>home">Inicio</a>

							</li>
                                                        
							<li>
								<a  style="color: #065F09;font-size: 18px" href="<?php base_url();?>nosotros">Acerca de</a>
							</li>
                                                        
                                                        <li>
								<a  style="color: #065F09;font-size: 18px" href="<?php base_url();?>himno">Himno</a>
							</li>

							<li>
								<a style="color: #065F09;font-size: 18px" href="<?php base_url();?>eventos">Eventos</a>
							</li>
                                                        
                                                            
							
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m" >
						
                                           
                                            <script>
                                                function color(){
                                                 let c = document.querySelector('#v_calor').value;
                                                 if(c == 1){
                                                    document.getElementById("color").style.color = "black"; 
                                                    document.querySelector('#v_calor').value = 0;
                                                 }else{
                                                    document.getElementById("color").style.color = "red";
                                                    document.querySelector('#v_calor').value = 1;
                                                }}
                                            </script>
					</div>
				</nav>
			</div>	
                        <br><br>
                </div>
                
		<!-- Header Mobile -->
		<div class="wrap-header-mobile" >
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				 <h1 style="color: #065F09;font-size: 150%"><strong>I.E.D. SAN MIGUEL</strong></h1>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				

			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
              
                <div class="menu-mobile" style="top: 100px;">
                    
			<ul class="topbar-mobile "style="top: 100px;">
				

				<li>
                                    <div class="left-top-bar">
                                            <button type="button" style="color: white;" onclick="abrir()">Admin</button>
					</div>
					<div class="right-top-bar flex-w h-full" >
						
                                            <a style="color: white" > Instituto Educativo Departamental San Miguel</a>
						

                                           
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
                            <li >
                                                           
                                                            <a   id="inicio" style="color: white;font-size: 18px"  href="<?php base_url();?>home">Inicio</a>

							</li>
                                                        
							<li>
								<a  style="color: white;font-size: 18px" href="<?php base_url();?>nosotros">Acerca de</a>
							</li>
                                                        
                                                        <li>
								<a  style="color: white;font-size: 18px" href="<?php base_url();?>himno">Himno</a>
							</li>

							<li>
								<a style="color: white;font-size: 18px" href="<?php base_url();?>eventos">Eventos</a>
							</li>

							
			</ul>
		</div>

		
	</header>
        
        <div class="modal fade" id="abrir" tabindex="-1" role="dialog" style="margin-top: 100px"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header headerResgister " style="margin-top: 10px ">
         
        <h5 class="modal-title" id="titleModal">Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="x">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form name="admin" id="admin">
              <input type="hidden" id="iidEvento" name="iidEvento" value="0">
                <div class="form-group">
                  <label class="control-label">Nombre Usuario</label>
                  <input class="form-control" id="usuario" name="usuario" type="text" placeholder="Usuario" >
                </div>
                
                <div class="form-group">
                  <label class="control-label">Contraseña</label>
                   <input id="contra" name="contra" class="form-control" type="password" placeholder="Contraseña">
                </div>
              
              
              <br>
                  <div class="tile-footer">
                      <button id="btnActionForm" class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Entrar</span></button>
              &nbsp;&nbsp;&nbsp;<a class="btn btn-danger" href="#" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
            </div>
              </form>
            </div>
          </div>
      </div>
    </div>
        
        <script>
        function abrir(){
            $('#abrir').modal('show');
        }
        
        document.addEventListener('DOMContentLoaded',function(){
   
   let FormLogin = document.querySelector("#admin");
   FormLogin.onsubmit = function(e){
    e.preventDefault();
    
    let strEmail = document.querySelector("#usuario").value;
    let strContraseña = document.querySelector("#contra").value;
    
    if(strEmail == "" || strContraseña == ""){
        swal("Por favor","No deje Espacion en Blanco","error");
        return false;  
    }else{
   var request =(window.XMLHttpRequest) ? new XMLHttpRequest() :ActiveXObject('Microsoft.XMLHTTP');
   var ajaxUrl = base_url+'Eventos/loginUser';
   var formData = new FormData(FormLogin);
   request.open("POST",ajaxUrl,true);
   request.send(formData);
   
   request.onreadystatechange = function(){
   if(request.readyState != 4)return;
   if(request.status == 200){
       var objData = JSON.parse(request.responseText);
       if(objData.status){
           
             window.location = base_url+'eventos';
             
           
       }else{
           swal("Atencion",objData.msg, "error");
           document.querySelector("#usuario").value = "";
       }
   }else{
       swal("Atencion","Error en el proceso","error")
   }
   }
    }
   }
},false);
        </script>
   