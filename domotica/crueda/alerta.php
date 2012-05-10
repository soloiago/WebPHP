<html>
<head><title>Gateway</title></head>
<body>
<?php 

$temp = $_GET["temp"];
$presencia = $_GET["presencia"];
$twitter = $_GET["twitter"];
$kyros = $_GET["kyros"];

if($presencia == 1) {
	echo 'Ha habido una presecia. Uyuyuyuy';
	$to = 'soloiago@gmail.com' ; 
		$subject = 'Alerta de presencia'; 

	// NOT SUGGESTED TO CHANGE THESE VALUES 
	$message = "Ha habido una presecia en el salón"; 
	$headers = 'From: '."domotica@iagodiaz.com".PHP_EOL ; 

	mail ( $to , $subject , $message , $headers ); 

}
if($temp != ''){
	if($kyros==1) {
		$time = time();
		$tramaKyros = "TEMP0,".$temp."\r\nGPRMC,".date('His',$time).".000,A,4036.333,N,00343.226,W,0.0,0.0,".date('dmy',$time).",,,\r\n";
		echo $tramaKyros;


		$port = 5000;
		$address = gethostbyname('demos.deimos-dat-com');

		/* Crear un socket TCP/IP. */
		$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
		if ($socket === false) {
		    echo "socket_create() falló: razón: " . socket_strerror(socket_last_error()) . "\n";
		} else {
		    echo "OK\n";
		}

		echo "Intentando conectar a '$address' en el puerto '$port'...";
		$result = socket_connect($socket, $address, $port);
		if ($result === false) {
		    echo "socket_connect() falló.\nRazón: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
		} else {
		    echo "OK\n";
		}

		$in = $tramaKyros;
		$out = '';

		echo "Enviando ...";
		socket_write($socket, $in, strlen($in));
		echo "OK\n";


		echo "Cerrando socket...";
		socket_close($socket);
		echo "OK\n\n";

	}

	else {
		// NOT SUGGESTED TO CHANGE THESE VALUES 
		$to = 'crueda@gmail.com' ; 
		$subject = 'Alerta de temperatura fuera de rango'; 

		$message = "Temperatura en el salón de: ".$temp." ºC"; 
		$headers = 'From: '."domotica@iagodiaz.com".PHP_EOL ; 

		mail ( $to , $subject , $message , $headers ); 
	}
}
if($twitter == 1){
	$curl_handle = curl_init();
	curl_setopt($curl_handle, CURLOPT_URL, "http://arduino-tweet.appspot.com/update");
	curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_handle, CURLOPT_POST, 1);
	$mensaje = "status=Temperatura_".$temp."&token=469243869-cP3cYRSU5FGKRxd11OM60AEiPHFKTmHk2w9Bzpi9";
	curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $mensaje);
	$buffer = curl_exec($curl_handle);
	curl_close($curl_handle);

	// check for success or failure
	if (empty($buffer)) {
	    echo 'message';
	} else {
	    echo 'success';
}

}
else {
	echo "No pasa nadaaaaaa";
}
?> 
</body>
</html>
