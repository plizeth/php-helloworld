
<?php
// Crear un gestor curl
$ch = curl_init('http://session-myhello.apps.sharedocp311cns.lab.rdu2.cee.redhat.com');

// Ejecutar
curl_exec($ch);

// Comprobar si ocurrió un error
if(!curl_errno($ch))
{
 $info = curl_getinfo($ch);

 echo 'Se tardó ' . $info['total_time'] . ' segundos en enviar la petición a ' . $info['url'];
 print_r(array_values($info));


}

// Cerrar manipulador
curl_close($ch);
?>

