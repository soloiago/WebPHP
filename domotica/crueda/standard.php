<?php
function my_twitter($usuario,$tweets) {
    $feed = "http://search.twitter.com/search.atom?q=from:" . $usuario . "&rpp=" . $tweets;
    $xml = simplexml_load_file($feed);
    foreach($xml->children() as $child) {
        foreach ($child as $value) {
            if($value->getName() == "content") {
                $content = $value . "";
                echo '<p class="twit">'.$content.'</p>';
            }   
        }
    }   
}

$data = simplexml_load_file("http://79.154.51.10:8080/");

?>

<!DOCTYPE html> 
<html> 

<head>
	<title>Mi casa</title> 
</head> 

	
<body style="background-color:#000; font-family:Arial, Helvetica, sans-serif"> 

<div id="site" style="margin:0;">
	<div id="header" style="height:60px;margin:0;">Menuses</div>
<div id="main">
    	<div id="spotlight" style="background-image:url(fondo.png); height:180px;margin:0;"><h1 style="text-align:center;color:#FFFFFF">¿Qué pasa en mi casa?</h1>
  </div>
       	<div id="content" style="width:900px; height:850px;background: #2DBFBF; margin: 0 auto;">
			<div id="izquierda" style="background:#2DBFBF; float:left; width:450px;">
				<div id="medidas" style="background:#FFF; margin: 10px; padding:10px; border:1px #000000 solid;">
                    <h2><img src="termometro.png" height="25" /> Sensores</h2>
         
                  <?php foreach ($data->temperatura as $mensaje)
                        echo "<p>Temperatura ".$mensaje->estancia.': '.$mensaje->valor." C</p>";?>
                </div>
             	<div id="configuracion" style="background:#FFF; margin: 10px; padding:10px; border:1px #000000 solid;">
                <form action="http://79.154.51.10:8080/" method="get">
                  <h2><img src="configuracion.gif" height="25" /> Configuración Alarmas</h2>
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
                
                  <h2><img src="bombilla.png" height="25" /> Actuadores</h2>
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
                </div>
	  		</div>
       	  <div id="derecha" style="background-color:#2DBFBF; float:left; width:450px;">
            <div id="twitter" style="background:#FFF; margin: 10px; padding:10px; border:1px #000000 solid;">
              <h2><img src="twitter.jpg" height="25" /> ON TWITTER</h2>
                <?php my_twitter("carlrue",5);	?>
            </div>
                <div id="ubicacion" style="background:#FFF; margin: 10px; padding:10px; border:1px #000000 solid;">
                      <h2><img src="ubicacion.gif" height="25" /> Ubicación</h2>
                <iframe width="415" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=0,0&amp;num=1&amp;t=m&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;output=embed"></iframe>
                <br /><small><a href="http://maps.google.com/maps?q=0,0&amp;num=1&amp;t=m&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
		    </div>
       	  </div>
      	</div>
		<div id="footer" style="background-image:url(fondo3.png); height:180px; clear:left;"></div>
</div>

</body>
</html>
