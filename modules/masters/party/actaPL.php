<?php 
        // session_start();
        error_reporting(0);
        
        chdir(dirname(__FILE__));
        include_once("../base/basePL.php");
        chdir(dirname(__FILE__));
        include_once("../base/baseBL.php");
        chdir(dirname(__FILE__));
        include_once("../../../includes/presentationLayer.php");
        chdir(dirname(__FILE__));    
        include_once("includes/myPresentationLayer.php");
        chdir(dirname(__FILE__));
        include_once("includes/myUtilities.php");      
        // chdir(dirname(__FILE__));
        // include_once("registroBL.php"); 
        // chdir(dirname(__FILE__));
        // include_once("personBL.php");           
    // chdir(dirname(__FILE__));
    // include_once("js/guardar_foto.php");       
        basePL::buildjs();
        basePL::buildccs();
     
        myUtilities::buildmyccs(0);   
        myUtilities::buildmyjs(0);
        
    ?>	
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <style>
    

    </style>

	<head>
		<title>Acta de Observaciones</title>
		<script>
		function miFuncion() {
					// window.print();
		}
		// window.onload=miFuncion;
		
		// $("table").parents('td').css("padding", "0px");
		</script>
		
		</style>
	</head>
	<body  style="margin:3cm"    onload="window.print()" ”>


<img src="LogoGobierno.png" height="100px" width="100px" >   
 <img  src="LogoGobierno.png" align="right" height="100px" width="100px" > <br> <br>    
<h5 style="text-align: justify">SECRETARIA GENERAL DE GOBIERNO INSTITUTO (INSERTAR NOMBRE DE INSTITUTO REGISTRADO) REQUERIMIENTOS DERIVADOS DE VALIDACION DOCUMENTAL DEL PROGRAMA INTERNO DE PROTECCION CIVIL E INSPECCION FISICA DE LAS INSTALACIONES 
    </h5>
    <style>
    div.a{
            text-align:center;
    }
    </style>
 <FONT FACE="arial">




		<div style="text-align: justify">
<br><br><b>
<span>No. de oficio de validación: </span></b>
<br>
<b>
<span  >Fecha de Validación: </span></b> <br>
<span><b>
Razón Social:</b>
</span><br><span><b>
Domicilio:</b>
</span><br><span><b>
Observaciones:</b></span><br>





</div>
<br>
<div style ="font-size:9pt">
	<div style="text-align:center">	<span ><b>Por el instituto (insertar Codigo con nombre  dependiendo el instituto registrado</b></span>	</div>
		<div style="text-align:center">	<span>	
<?php
	echo $legalrepresentative;     
?>	
		</span></div>
		<div style="text-align:center">	<span ><b>_________________________________</b></span></div>
        <div style="text-align:center">	<span ><b>Nombre y firma </b></span></div>
		<div style="text-align:center">	<span ><b>Por el responsable del inmueble (insertar codigo en caso de usuario externo)</b></span></div>
		<div style="text-align:center">	<span >	
<?php
	echo $securityofficer;     
?>	
	</span></div>		
        <div style="text-align:center">	<span ><b>_________________________________</b></span></div>
        <div style="text-align:center">	<span ><b>Nombre y firma </b></span></div>
        <div style="text-align:center">	<span ><b>ºPor el responsable de PIPC (insertar codigo en caso de usuario interno)</b></span></div>
		<div style="text-align:center">	<span ><b>	
<?php
	echo $securityofficer;     
?>	
		</span></div>
        <div style="text-align:center">	<span ><b>_________________________________</b></span></div>
        <div style="text-align:center">	<span ><b>Nombre y firma </b></span></div>
        <br>


        </div>
			

	</body>
</html>
