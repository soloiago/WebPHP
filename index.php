<?php
$opcion= 'index';
$idioma = '';
require('header.php');
?>
<img src="images/portada.jpg" alt="Foto portada" class="imagenPortada" width="192" />
<h3>Iago Díaz Manzano</h3>
<p style="font-style:italic">Ingeniero de Telecomunicación por la Universidad de Valladolid </p>
<br />
<p style="margin-top:20px"><img src="images/index.png" alt="" /> <a href="index.php">Index</a></p>
<p style="margin-top:20px; padding-left:15px;"><img src="images/carpeta_abierta.png" alt="" /> CURRICULUM VITAE </p>
<ul class="inicio">
    <li class="inicio"><img src="images/carpeta.png" alt="" /> <a href="cv_espanol.php">Español</a> <a href="cv_espanol.php"><img src="images/spanishflag.gif" width="22" height="14" alt="Español"/></a></li>
    <li class="inicio"><img src="images/carpeta.png" alt="" /> <a href="cv_english.php">English</a> <a href="cv_english.php"><img src="images/englishflag.gif" width="22" height="14" alt="English"/></a></li>
    <li class="inicio"><img src="images/carpeta.png" alt="" /> <a href="cv_francais.php">Français</a> <a href="cv_francais.php"><img src="images/frenchflag.png" width="22" height="14" alt="Fraçais"/></a></li>
</ul>
<p><img src="images/carpeta_abierta.png" alt="" /> About me</p>
<ul class="inicio">
    <li class="inicio"><img src="images/carpeta.png" alt="" /> <a href="viajes.php">Viajes</a></li>
    <li class="inicio"><img src="images/carpeta.png" alt="" /> <a href="deportes.php">Deportes</a></li>
</ul>


<?php
require('footer.php');
?>
