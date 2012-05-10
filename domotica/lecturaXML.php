<?php $data = simplexml_load_file("http://84.125.62.40"); 

foreach ($data->temperatura as $mensaje)
  echo $mensaje->estancia.': '.$mensaje->valor;

;?>