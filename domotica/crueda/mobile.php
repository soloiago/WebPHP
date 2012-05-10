<!DOCTYPE html> 
<html> 

<head>
	<title>Mi casa</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
</head> 

	
<body> 

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-theme="d">

	<div data-role="header" >
		<h1>Inicio</h1>
	</div><!-- /header -->

	<div data-role="content" >	
		<h2>Menu principal</h2>
		<p><a href="#two" data-role="button">Sensores</a></p>	
		<p><a href="#three" data-role="button">Estado de las alarmas</a></p>

	</div><!-- /content -->
</div><!-- /page one -->


<!-- Start of second page: #two -->
<div data-role="page" id="two" data-theme="a">

	<div data-role="header" data-position="fixed">
		<a href="#one" data-direction="reverse""data-icon="arrow-l" data-iconpos="left">Main</a>
		<h1>Sensores</h1>
		<a href="#two" data-direction="reverse" data-icon="refresh" data-iconpos="right">Act</a>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	

<?php $data = simplexml_load_file("http://79.154.51.10:8080"); ?>

		<h2>Sensores</h2>
 
			<?php foreach ($data->temperatura as $mensaje)
				echo "<p>Temperatura ".$mensaje->estancia.': '.$mensaje->valor." C</p>";?>

		<p><a href="#one" data-direction="reverse" data-role="button">Menu principal</a></p>	
		
	</div><!-- /content -->

</div><!-- /page two -->


<!-- Start of third page: #three -->
<div data-role="page" id="three" data-theme="a">
	
	<div data-role="header" data-position="fixed">
		<a href="#one" data-direction="reverse""data-icon="arrow-l" data-iconpos="left">Main</a>
		<h1>Alarmas</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="a">	

	<form action="http://79.154.51.10:8080/" method="get">
		<h2>Alarmas</h2>
		<?php 
		$i=0;
		foreach ($data->alarma as $mensaje)
		{	echo "<h3>".$mensaje->tipo."</h3>";
			echo "<fieldset data-role='controlgroup' data-type='horizontal'>";
			echo "<input type='checkbox' name='mail".$i."' id='checkbox-0".$i."' class='custom' ";
			if($mensaje->mail == 1)
				echo "checked='checked'";
			echo "/><label for='checkbox-0".$i."'>Mail</label>";
			echo "<input type='checkbox' name='twitter".$i."' id='checkbox-1".$i."' class='custom' ";
			if($mensaje->twitter == 1)
				echo "checked='checked'";
			echo "/><label for='checkbox-1".$i."'>Twitter</label>";
			echo "<input type='checkbox' name='kyros".$i."' id='checkbox-2".$i."' class='custom' ";
			if($mensaje->kyros == 1)
				echo "checked='checked'";
			echo "/><label for='checkbox-2".$i."'>Kyros</label></fieldset>";
			if($mensaje->valor != 1 && $mensaje->valor != 0)
				echo "<input type='range' name='valor".$i."' id='slider-0' value='".$mensaje->valor."' min='0' max='40' />";
			$i++;
		}
		?>

		<h2>Pilotos</h2>
		<?php 
		foreach ($data->actuador as $mensaje)
		{	echo "<label for='p0'>".$mensaje->tipo.": </label>";
			echo "<select name='p0' id='slider' data-role='slider'>";
			echo "<option value='0' ";
			if($mensaje->valor == 0) 
				echo "selected='selected'";
			echo ">Off</option><option value='1' ";
			if($mensaje->valor == 1) 
				echo "selected='selected'";
			echo ">On</option></select>";
		}
		?>
		
		<br />	
		<h3>Clave</h3>	
		<label for="password">Password:</label><input type="password" name="pw" id="password" value="" />
		
		<button type="submit" name="submit" value="submit-value">Validar</button>
		
	</form>

		<p><a href="#one" data-direction="reverse" data-role="button">Menu principal</a></p>

	</div><!-- /content -->



</div><!-- /page three -->

</body>
</html>
