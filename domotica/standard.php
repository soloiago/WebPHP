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

$data = simplexml_load_file("http://84.125.60.89");

?>

<!DOCTYPE html> 
<html> 

<head>
	<title>Mi casa</title> 
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>

	
<body> 

<div id="main">
    	<div id="spotlight" style="height:100px;">
    	  <h1 style="text-align:center;color:#000">¿Qué pasa en mi casa?</h1>
  </div>
       	<div id="content" style="width:900px; height:1750px;background: #2DBFBF; margin: 0 auto; border-left:1px #000000 solid; border-right:1px #000000 solid">
			<div id="izquierda" style="background:#2DBFBF; float:left; width:550px;">
			  <div id="medidas" style="background:#FFF; margin: 10px; padding:10px; border:3px #000000 solid;">
                  <h2 class="sensores"><img src="termometro.png" height="25" /> Sensores</h2>
         
                  <?php foreach ($data->temperatura as $mensaje)
                        echo "<p>Temperatura ".$mensaje->estancia.': '.$mensaje->valor." ºC</p>";?>
              </div>
             	<div id="actuadores" style="background:#FFF; margin: 10px; padding:10px; border:3px #000000 solid;">
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
                    <br /><br />
                  <form action="http://84.125.60.89/" method="get">
                  <label for="password">Password:</label><input type="password" name="pw" id="password" value="" />
                  <button type="submit" name="submit" value="submit-value">Validar</button>
                </form>
              </div>
                
                <div id="configuracion" style=" margin: 10px; padding:10px; ">
                <form action="http://84.125.60.89/" method="get">
                  <h2><img src="configuracion.gif" height="25" /> Configuración Alarmas</h2>
                  <?php 
                    $i=0;
                    foreach ($data->alarma as $mensaje)
                    {	echo "<h3>".$mensaje->tipo."</h3>";
                            echo "<fieldset data-role='controlgroup' data-type='horizontal'>";
                        echo "|<input type='checkbox' name='mail".$i."' id='checkbox-0".$i."' class='custom' ";
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
                        echo "/><label for='checkbox-2".$i."'>Kyros</label>";
                        if($mensaje->valor != 1 && $mensaje->valor != 0)
                            echo " || Umbral: <input type='number' name='valor".$i."' id='slider-0' value='".$mensaje->valor."' min='1' max='40' />";
						echo " |</fieldset>";
                        $i++;
                    }
                    ?>
                  
                    <br />	
                  <h3>Clave</h3>	
                    <label for="password">Password:</label><input type="password" name="pw" id="password" value="" />
                
                  <button type="submit" name="submit" value="submit-value">Validar</button>
                </form>
              </div>
<img src="http://www.pachube.com/feeds/46622/datastreams/salon/history.png?w=900&h=200&c=33cc66&b=true&g=true&t=Temperatura%20salon%20&s=2&r=3" /><br />
	<img src="http://www.pachube.com/feeds/46622/datastreams/luz/history.png?w=900&h=200&c=33cc66&b=true&g=true&t=Luz%20salon%20&s=2&r=3" /><br />
<script type="text/javascript" src="http://www.google.com/jsapi"></script><script language="JavaScript" src="http://apps.pachube.com/google_viz/viz.js"></script><script language="JavaScript">createViz(46622,"luz",900,200,"FF0800");</script>
</script>
	  		</div>
       	  <div id="derecha" style="background-color:#2DBFBF; float:left; width:350px;">
            <div id="twitter" style="margin: 10px; padding-bottom:10px; padding-left:10px; padding-right:10px;">
              <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
			  <script>
                new TWTR.Widget({
                  version: 2,
                  type: 'profile',
                  rpp: 5,
                  interval: 30000,
                  width: 315,
                  height:250,
                  theme: {
                    shell: {
                      background: '#3a95d1',
                      color: '#ffffff'
                    },
                    tweets: {
                      background: '#ffffff',
                      color: '#000000',
                      links: '#000000'
                    }
                  },
                  features: {
                    scrollbar: true,
                    loop: false,
                    live: true,
                    behavior: 'all'
                  }
                }).render().setUser('IagoDiaz').start();
                </script>
            </div>
                <div id="ubicacion" style="margin: 10px; padding:10px;">
                <iframe width="315" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=41.638675,-4.758174&amp;num=1&amp;t=m&amp;vpsrc=0&amp;ie=UTF8&amp;z=14&amp;output=embed"></iframe>
                <br /><small></small>
		    </div>
       	  </div>
  </div>
	
		<div id="footer"></div>
</div>

</body>
</html>
