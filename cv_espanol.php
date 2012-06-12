<?php
$opcion= 'cv';
$idioma = 'espanol';
require('header.php');
?>   

<?php
$personalInfo = new PersonalInfo();
echo $personalInfo->getList();
?>
   
   	<div class="titulo">Curriculum Vitae</div>

    <div class="apartado">Información personal
    </div><!-- end #apartado -->
    <p><strong>Iago Díaz Manzano</strong></p>
    <p><strong>Fecha de nacimiento:</strong> 18 de junio de 1985 </p>
    <p><strong>Nacionalidad:</strong> Español </p>
    <p><strong>Email: </strong> soloiago@gmail.com</p>
    <p><strong>Web:</strong> <a href=" http://www.iagodiaz.com">http://www.iagodiaz.com</a></p>
    <p><strong>Permiso de conducir:</strong> B1 (desde octubre de 2003) </p>
    
	<br /><br />
	<div class="apartado">Experiencia laboral 
    </div><!-- end #apartado -->
    
<div style="background-color:#F6F6F6;padding-bottom:30px;">    
    <div class="fecha">05/2011 – Actualidad </div> 
    <div class="carrera">Becario en Elecnor Deimos. Parque tecnológico de Boecillo, Valladolid.</div>
    <div class="logo"><img src="images/logoElecnorDeimos.png" alt="" width="100px" /></div>
    <div class="info">Investigación para proyectos relacionados con las telecomunicaciones en colaboración con empresas TI</div>
</div>    
    <div class="ampliar" onclick='javascript:mostrar("capa5")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa5">Tipo de empresa o sector: DEIMOS Aplicaciones Tecnológicas comercializa soluciones de propósito general en las que aplica la última tecnología espacial de navegación, localización, posicionamiento y telecomunicaciones.</div>
 
 <div style="background-color:#F6F6F6;padding-bottom:30px;">    
    <div class="fecha">07/2010 – 05/2011</div> 
    <div class="carrera">Programador / Investigador en GoMetaverse, S.L. (filial de Frontera Azul Systems, S.L)</div>
    <div class="logo"><img src="images/logoGoMetaverse.png" alt="" width="100px" /></div>
    <div class="info">Programación de varios módulos de comunicaciones de una plataforma de telecolaboración de realidad virtual propietaria. Herramientas principales utilizadas: Microsoft Visual C++</div>
</div>    
    <div class="ampliar" onclick='javascript:mostrar("capa0")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa0">Tipo de empresa o sector: Investigación y desarrollo en el mercado  de los mundos públicos virtuales</div>
    
    
<div style="background-color:#F6F6F6;padding-bottom:0px;">
    <div class="fecha">03/2009 – 08/2009</div> 
    <div class="carrera">Becario en el departamento de seguridad en Continental Automotive Francia (Toulouse)</div>
    <div class="logo"><img src="images/logoContinental.png" alt="" width="120px" /></div>
    <div class="info">Mejora del rendimiento del Driver Distraction System (basado en un sistema de vision monocular que proporciona una indicación de la distracción visual del conductor del vehículo). Herramientas principales utilizadas: Microsoft Visual C++ y MATLAB</div>
</div>    
    <div class="ampliar" onclick='javascript:mostrar("capa1")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa1">Tipo de empresa o sector: Automoción (Departamento de seguridad)</div>    
	<br /><br />
	
	
	<div class="apartado">Formación 
    </div><!-- end #apartado -->
    
<div style="background-color:#F6F6F6;padding-bottom:40px;"> 
    <div class="fecha">12/2010 – 06/2011</div> <div class="carrera">Curso básico sobre bolsa<br /><br /></div>
    	 <div class="logo"><img src="images/logoUNED.jpg" alt="" width="60px" /></div>
       <div class="info">Curso a distancia sobre los mercados financieros</div>
</div>       
    <div class="ampliar" onclick='javascript:mostrar("capa6")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa6">
		Principales materias estudiadas:        
        <ul>
    	<li>Mercados Financieros</li>
        <li>Herramientas necesarias para la toma de decisiones</li>
    	<li>Gestión de carteras de renta variable</li>
    </ul>
    </div>    
    
<div style="background-color:#F6F6F6;padding-bottom:70px;">    
    <div class="fecha">10/2003 – 09/2009</div> 
    <div class="carrera">Ingeniero de Telecomunicación<br /><br /></div>
    <div class="logo"><img src="images/etsitvalladolid.png" alt="" /></div>
    <div class="info">Universidad de  Valladolid (España)</div>        
</div>
    <div class="ampliar" onclick='javascript:mostrar("capa2")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa2">
    	  Principales materias o capacidades profesionales estudiadas:
        <ul>
        <li>Comunicaciones ópticas</li>
        <li>Procesamiento de señales</li>
        <li>Diseño y administración de redes de comunicación</li>
        <li>Diseño y evaluación de sistemas electrónicos</li>
        </ul>
	</div>
    
<div style="padding-left:60px"> <!-- desplazamiento a la derecha -->
    <div class="fecha">09/2008 – 02/2009</div> <div class="carrera">* Ingeniero de Electrónica. Especialidad en tratamiento de la señal y la imagen</div>
		  <div class="logo"><img src="images/logoENSEEIHT.JPG" alt="" width="120px" /></div>        
        <div class="info">Último año (3ème année) en la ENSEEIHT de Toulouse (Francia) bajo el programa Erasmus</div>
    <div class="ampliar" onclick='javascript:mostrar("capa3")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa3">
	 Durante los 6 meses que pasé en esta escuela multicultural de gran prestigio en Francia, las materias que estudié de forma teórica y puse en práctica en los laboratorios trataban los siguientes aspectos:    
    <ul>
    	<li>Técnicas de tratamiento de imágenes</li>
        <li>Bases del tratamiento de señales (tratamiento adaptativo, consideraciones espacio-temporales, tratamiento digital, modelización paramétrica)</li>
    	<li>Análisis de vídeo</li>
        <li>Visión por ordenador</li>
        <li>Clasificación y reconocimiento de formas</li>   
    </ul>
    </div>
    
<div style="background-color:#F6F6F6;padding-bottom:40px;"> 
    <div class="fecha">03/2008 – 06/2008</div> <div class="carrera">Prácticas "Mercedes-Benz"<br /><br /></div>
    	 <div class="logo"><img src="images/logoMercedesBenz.png" alt="" width="120px" /></div>
       <div class="info">Estudio de la telemática de los vehículos Mercedes en un laboratorio situado en la Universidad de Valladolid (acuerdo de colaboración con Mercedes-Benz Sindelfingen – Stuttgart)</div>
</div>       
    <div class="ampliar" onclick='javascript:mostrar("capa4")'>⇓ Más información ⇓</div>
    <div class="info_extra" id="capa4">
		Las tareas que realicé fueron:        
        <ul>
    	<li>Estudio de los diferentes protocolos de comunicación utilizados en los vehículos</li>
        <li>Profundización en el protocolo CAN y prácticas con CANoe</li>
    	<li>Estudio de los anillos ópticos y prácticas realizadas con D2B OPTOLYZER y MOST OPTOLYZER</li>
    </ul>
    </div>
</div> <!-- end desplazamiento a la derecha -->
    
	<br /><br />	
	
	
	<div class="apartado">Competencias lingüísticas</div>
        <p><strong>Español: </strong>Lengua materna</p>
        <p><strong>Inglés: </strong>Nivel avanzado (último título obtenido: 'Avanced level English Language Course',  7/01/10 - 25/03/10 at Edinburgh's Telford College)</p>
        <p><strong>Francés: </strong>Nivel avanzado (estancia de un año académico en Francia, realizando y presentando el PFC en francés)</p>

	<br /><br />
	<div class="apartado">Competencia informáticas</div>
    <ul>
		<li class="lista"><strong>Simulación:</strong> RIDE, OPTSIM, Electronic Workbench. Gran experiencia con MATLAB</li>
        <li class="lista"><strong>Programación:</strong> C, HTML, PHP, CSS, Javascript. Participación activa en una aplicación profesional Visual Studio C++.Net</li>
        <li class="lista"><strong>Sistemas operativos:</strong> Microsoft Windows, Unix</li>
        <li class="lista"><strong>Conocimientos generales:</strong> ofimática, Internet; tratamiento de video, audio e imagen; bases de datos</li>
    </ul>

	<br /><br />
	<div class="apartado">Capacidades y competencias personales</div>
    <ul>
        <li class="lista">Gran destreza en el trabajo en equipo gracias a mi experiencia en Continental y a haber pertenecido a diferentes equipos de fútbol sala desde los siete años</li>
        <li class="lista">Experiencia multicultural obtenida a través de mi estancia en Francia (bajo el programa Erasmus) y a los distintos periodos que he pasado en el extranjero</li>
        <li class="lista">Sentido de la organización y la jerarquía</li>
        <li class="lista">Deseo de aprender y enfrentarme a nuevos retos</li>
        <li class="lista">Interesado en manejar nuevo software y lenguajes de programación. Me considero hábil en estas tareas, por lo que me resultan sencillas</li>
        <li class="lista">Buena habilidad demostrada en el laboratorio con equipos de medida como HAMEG HM7042-2, HAMEG HM-8131-2, HAMEG HM-407, HP-34401A, TEKTRONIX TDS2002, DIGIMESS FG100</li>
        <li class="lista">Disponibilidad para viajar</li>
    </ul>

     <br /><br />
     
<!--     <form style="text-align:center"><input class="imprimir" type="button" name="imprimir" value="Imprimir" onclick="window.print();"></form>
-->
<?php
require('footer.php');
?>
