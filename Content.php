<?php
class Content {
	var $link;
	var $language;
	function __construct($language) {
		// Conexión con la base de datos
		$this->link = mysql_connect('127.0.0.1', 'root', '')
			or die('No se pudo conectar: ' . mysql_error());

		// Seleccionamos la base de datos
		mysql_select_db('web_personal') 
			or die('No se pudo seleccionar la base de datos');
			
		$this->language = $language;
	}
	
	
	public function getInfoList() {
		// Realizar una consulta MySQL
		if ($this->language == 'english') {
			$query = 'SELECT TIT_EN, CONT_EN FROM PERSONAL_INFO ORDER BY ORDEN';
		}
		else if ($this->language == 'espanol') {
			$query = 'SELECT TIT_ES, CONT_ES FROM PERSONAL_INFO ORDER BY ORDEN';
			mysql_query("SET NAMES 'utf8'");
		}
		
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

		// Imprimir los resultados en HTML
		while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
			echo "<p><strong>$line[0]:</strong> $line[1]</p>";
		}
		
		// Liberar resultados
		mysql_free_result($result);
	}
	
	public function getExperienciaLaboralList() {
		// Realizar una consulta MySQL
		if ($this->language == 'english') {
			$query = 'SELECT FECHA_EN, CARRERA_EN, INFO_EN, INFO_EXTRA_EN, LOGO, ORDEN FROM EXPERIENCIA_LABORAL ORDER BY ORDEN';
		}
		else if ($this->language == 'espanol') {
			$query = 'SELECT FECHA_ES, CARRERA_ES, INFO_ES, INFO_EXTRA_ES, LOGO, ORDEN FROM EXPERIENCIA_LABORAL ORDER BY ORDEN';
		}
		
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

		// Imprimir los resultados en HTML
		while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
			echo "<div style='background-color:#F6F6F6;padding-bottom:30px;'>";
			echo "<div class='fecha'>$line[0]</div>";
			echo "<div class='carrera'>$line[1]</div>";
			echo "<div class='logo'><img src='$line[4]' alt='' width='100px' /></div>";
			echo "<div class='info'>$line[2]</div>";
			echo "</div>";
			echo "<div class='ampliar' onclick='javascript:mostrar(\"capa$line[5]\")'>⇓ Más información ⇓</div>";
			echo "<div class='info_extra' id=\"capa$line[5]\">$line[3]</div>";
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
