<?php
class PersonalInfo {
	var $link;
	
	function __construct() {
		// Conexión con la base de datos
		$this->link = mysql_connect('db419607717.db.1and1.com', 'dbo419607717', 'webpersonal')
			or die('No se pudo conectar: ' . mysql_error());

		// Seleccionamos la base de datos
		mysql_select_db('db419607717') 
			or die('No se pudo seleccionar la base de datos');
	}
	
	
	public function getList() {
		// Realizar una consulta MySQL
		$query = 'SELECT TIT_ES, CONT_ES FROM PERSONAL_INFO';
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

		// Imprimir los resultados en HTML
		while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
			echo "<p><strong>$line[0]:</strong> $line[1]</p>";
		}
		
		// Liberar resultados
		mysql_free_result($result);
	}
	
	function __destruct() {
		// Cerrar la conexión
		mysql_close($this->link);
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Iago Díaz Manzano</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link href="style_print.css" rel="stylesheet" type="text/css" media="print" />


<link rel="shortcut icon" href="User.ico" />
<script type="text/javascript" src="javascript/uno.js"></script>
<script type="text/javascript" src="javascript/dos.js"></script>

<script type="text/javascript" src="javascript/menu1.js"></script>
<script type="text/javascript" src="javascript/menu2.js"></script>
<script type="text/javascript" src="javascript/menu3.js"></script>

<script type="text/javascript" src="javascript/mas_menos_info.js"></script>

<style media="all" type="text/css">@import "menu_style.css";</style>
<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="/include/ie6.css" media="screen"/>
<![endif]-->	

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26720806-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<div id="container">
  <div id="header">
  	<div>
        <div id="caption"><h1 id="title"><a href="index.php" style="color:#fff;">Iago Díaz Manzano</a></h1></div>
		<div id="tagline">
        <?php 
        if($idioma=='espanol') 
            echo "Ingeniero de Telecomunicación";
        else if($idioma=='english') 
            echo "Telecommunication Engineer";
        else if($idioma=='francais') 
            echo "Ingeneur des télécommunication";
        else if($opcion=='sobremi')
            echo "About me";
        else if($opcion=='proyectos')
            echo "Pet Proyects";
        else if($opcion=='index')
            echo "Ingeniero de Telecomunicación";
		  else if($opcion=='visitas')
            echo "Ingeniero de Telecomunicación";		
        else if($opcion=='contacto')
            echo "Contacto";	
        ?>
        </div>
      </div>  
  </div>

<div class="wrapper1">
	<div class="wrapper">
		<div class="nav-wrapper">
			<div class="nav-left"></div>
			<div class="nav">
				<ul id="navigation">
			   		<li class="<?php if($opcion=='index') echo "active";?>">
						<a href="index.php">
							<span class="menu-left"></span>
							<span class="menu-mid"><img src="home.gif" alt="Home" /></span>
							<span class="menu-right"></span>
						</a>
					</li>
			   		<li class="<?php if($opcion=='cv') echo "active";?>">
						<a href="#">
							<span class="menu-left"></span>
							<span class="menu-mid">CURRICULUM VITAE</span>
							<span class="menu-right"></span>
						</a>
	            	   	<div class="sub">
			   				<ul>
			   					<li>
									<a href="cv_espanol.php">Español</a>
								</li>
			   					<li>
									<a href="cv_english.php">English</a>
								</li>
			   					<li>
									<a href="cv_francais.php">Français</a>
								</li>
			   				</ul>
			   				<div class="btm-bg"></div>
			   			</div>
					</li>
			   		<li class="<?php if($opcion=='sobremi') echo "active";?>">
						<a href="#">
							<span class="menu-left"></span>
							<span class="menu-mid">About me</span>
							<span class="menu-right"></span>
						</a>
	            	   	<div class="sub">
			   				<ul>
			   					<li>
									<a href="viajes.php">Viajes</a>
								</li>
			   					<li>
									<a href="deportes.php">Deportes</a>
								</li>
									<li>
										<a href="contacto.php">Contacto</a>
									</li>
			   				</ul>
			   				<div class="btm-bg"></div>
			   			</div>
					</li>
			   	</ul>
			</div>
			<div class="nav-right"></div>
		</div>
		
	</div>
</div>


  
  
<div id="mainContent">
     
     <div id="contenido">
