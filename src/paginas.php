<?php
class Paginas{

	function cargarRecursos($indice){
			?><head>	
		<title>Concurso 2015</title>
		<link rel="icon" type="img/ico" href="img/logo.ico">
		
	<?php	
			$this->cargarMeta();
			$this->cargarCSS();
			$this->cargarJS();
			$this->cargarContenedor($indice);

	?>
		</head>
	<?php
	}


	function cargarContenedor($indice){
		?>
			<div class="container-fluid maxWidth sp">
		<?php
		$this->getCabecera();
		$this->getMenu($indice);			
		
		?>
			</div>

		<?php
	}
function getContenidoDePagina(){
		?>
		


		<?php
	}


	function getCabecera(){


		?>
		
		<div class="row">            
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <header>
                <div id="fondo" class="fondo" >
                    	<div id="logo" class="logo">
                            <a href="index.php"><img src="img/usmp_logo.png" alt=""></a>
                        </div>

                        <div id="concurso" 	class="concurso">
							
                       	</div>
                       	<div id="orgullo" class="orgullosos">
                       		<a><img src="img/orgullosos.png" alt=""></a>
                       		
                       	</div>

                       	
                       	
                       

                </div>
            </header>
        </div>


    </div>
    

	<?php
	}

	function getMenu($indice){
	$vec[0]="";
    $vec[0]="";
	$vec[1]="";
	$vec[2]="";
	$vec[3]="";
	$vec[4]="";
	$vec[5]="";
	$vec[6]="";
	$vec[7]="";
	$vec[8]="";
	$vec[9]="";
	$vec[10]="";
	$vec[11]="";
	$vec[12]="";
	$vec[13]="";

    $vec[$indice]="class='active'";

		?>	
		<br>
		<div class="menu">
				 <nav>
        			<div id='cssmenu'>
        			    <ul>
        			       	<li <?php echo $vec[0];?>><a href="index.php">○ Inicio</a></li>
        			       	<li <?php echo $vec[1];?>><a href="bases.php">○ Bases</a></li>
        			       	<li <?php echo $vec[2];?>><a href="comite.php">○ Comité Del Concurso</a></li>
        			       	<li <?php echo $vec[3];?>><a href="concurso_univ_interna.php">○ Concursos Universidad Interna</a></li>
        			       	<li <?php echo $vec[4];?>><a href="concurso_fac_interna.php">○ Concursos Internos-Facultades</a></li>
        			       	<li <?php echo $vec[5];?>><a href="cursos_univ_interna.php">○ Cursos Universidad Interna</a></li>
        			       	<li <?php echo $vec[6];?>><a href="mejora_procesos.php">&nbsp ○ Mejora de Procesos</a></li>
        			       	<li <?php echo $vec[7];?>><a href="fotos.php"> &nbsp○ Fotos &nbsp</a></li>
        			       	<li <?php echo $vec[8];?>><a href="publicidad_aportes.php"> &nbsp○ Publicidad / Aportes &nbsp</a></li>
        			       	<li <?php echo $vec[9];?>><a href="difusion.php"> &nbsp○ Difusión &nbsp</a></li>
        			       	<li <?php echo $vec[10];?>><a href="ensayo.php"> &nbsp○ Ensayo &nbsp</a></li>
        			       	<li <?php echo $vec[11];?>><a href="premiacion.php"> &nbsp○ Premiación &nbsp</a></li>
        			       	<li <?php echo $vec[12];?>><a href="clausura.php"> &nbsp○ Clausura &nbsp &nbsp</a></li>
        			       	<li <?php echo $vec[13];?>><a href="comentarios.php"> &nbsp ○ Comentarios &nbsp &nbsp</a></li>
        			    </ul>
        			</div>
    			</nav>
		</div>
    	<?php
	}


	function getPieDePagina(){
		?>
		<br>
		<div class="container-fluid maxWidth sp">
		 <div class="row">            
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <footer>
                <div>   
                    <p>Informes:</p>
                    <p>http://www.usmp.edu.pe</p>
                    <p>Teléfono:  362-0064    anexo   3148</p>
                    <p>Email:  mtorresg@usmp.pe</p>
                </div> 
                <br>
				<div class="lineaSeparadora"></div>
				<br>
                <div>
                    <p>Copyright © 2015 - Dirección General de Administración - Oficina de Recursos Humanos - USMP</p>
                    <p>Todos lso derechos reservados</p>                        
                </div>
            </footer>
        </div>
    </div>
</div>

    <?php
	}

	function cargarMeta(){
		// Contenido de meta //
		?>
		<meta charset="UTF-8">

		<?php
	}

	function cargarCSS(){
		// Hojas de estilos
	?>	
		<link rel="stylesheet" type="text/css" href="css/estilo.css">			
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/bootstrap-lightbox.min.css">
    	<link rel="stylesheet" href="css/jquery.bxslider.css">
		
		<?php
	}

	function cargarJS(){
		// Javascripts
		?>
		<script type="text/javascript" src="js/jquery.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap-lightbox.min.js"></script>
    	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    	<script type="text/javascript" src="js/jquery.responsiveTabs.js"></script>
    	<script type="text/javascript" src="js/script.js"></script>
		<?php
	}


}
?>
